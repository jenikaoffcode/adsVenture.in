<?php
session_start();
include_once("NewsNav.php");
include_once("dbConnection.php");
$uid=$_SESSION['uid'];
?>
<style>
#data{
    width:50%;
    float:right;
}
    </style>
    <!-- banner section -->
    <br><br><br>

<div class="w3l-grids-block-5 py-5">
        <section id="grids5-block" class="pt-md-4 pb-md-5 py-4 mb-5">
            <div class="container">
                <h2>Paid Users</h2>
                <div class="row mt-sm-5 pt-lg-2">
                <?php
$qry = "SELECT `user_reg`.*,`payment`.* FROM `addrequest`,`user_reg`,`payment`,`addads` WHERE `addrequest`.`rid`=`payment`.`rid` AND `addads`.`anid`=`addrequest`.`anid` AND`addrequest`.`uid`=`user_reg`.`uid` AND `payment`.`status`='yes' AND `addrequest`.`uid`='3'";
$result = mysqli_query($conn, $qry);
      if ($result->num_rows > 0) {
            while ($row = mysqli_fetch_array($result)) {
                ?>
                    <div class="col-lg-4 col-sm-6">
                        <div class=" grids5-info">
                            <div class="blog-info">
                            <img src="assets/images/feed.png" alt="" height="100px" width="100"/>
                            <h4 style=''><?php echo  $row['pdate'] ?> </h4>
                                <h5><?php echo  $row['name'] ?> </h5><br>
                                <h6 style=''><?php echo  $row['email'] ?> </h6>
                                <h6 style=''><?php echo  $row['phone'] ?> </h6>
                                <h6 style=''><?php echo  $row['address'] ?> </h6>
                                <p>Publish Date : <?php echo  $row['publishdate'] ?> </p>
                                <hr style='color:red; height:10px;background-color: #f2f542;'>
                                <p style="color: #f2f542; font-weight:bold">Amount :  <?php echo  $row['amount'] ?> </p>
                            </div>                      
                        </div>
                    </div>                
                    <?php
                }
} else {
    echo "  <center> <h2 style='color: red;'>.... No Data Found ...</h2></center> ";
}
?>
            </div>
            </div>
        </section>
    </div>

<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "footer.php";
include_once("footer.php");
?>



