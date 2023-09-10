<?php
session_start();
include_once("UserNav.php");
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
                <div class="row mt-sm-5 pt-lg-2">
                <?php
$qry = "SELECT `replayfeed`.*,`feedback`.* FROM `replayfeed`,`feedback` WHERE `feedback`.`fid`=`replayfeed`.`fid` AND `feedback`.`uid`=2";
$result = mysqli_query($conn, $qry);
      if ($result->num_rows > 0) {
            while ($row = mysqli_fetch_array($result)) {
                ?>
                    <div class="col-lg-4 col-sm-6">
                        <div class=" grids5-info">
                            <div class="blog-info">
                            <img src="assets/images/c6.png" alt="" height="100px" width="100"/><br><br>
                            <h4 style=''><?php echo  $row['rdate'] ?> </h4><br>
                                <hp> <?php echo  $row['replay'] ?> </p>
                                <p>My feedback</p>
                                <hr style='color:red; height:10px;background-color: #d4236d;'>
                                <h6 style=''><?php echo  $row['head'] ?> </h6>
                                <p>  <?php echo  $row['description'] ?> </p>
                             <h4 style=''><?php echo  $row['fdate'] ?> </h4><br>
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



