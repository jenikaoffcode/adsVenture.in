<?php
session_start();
include_once("Adminnav.php");
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
$qry = "SELECT `user_reg`.*,`feedback`.* FROM `feedback`,`user_reg` WHERE `user_reg`.`uid`=`feedback`.`uid`";
$result = mysqli_query($conn, $qry);
      if ($result->num_rows > 0) {
            while ($row = mysqli_fetch_array($result)) {
                ?>
                    <div class="col-lg-4 col-sm-6">

                        <div class=" grids5-info">
                            <div class="blog-info">
                            <img src="assets/images/feed.png" alt="" height="100px" width="100"/>

                            <h4 style=''><?php echo  $row['head'] ?> </h4>
                                <h5> <?php echo  $row['name'] ?> </h5><br>
                                <h6 style=''><?php echo  $row['email'] ?> </h6>
                                <h6 style=''><?php echo  $row['phone'] ?> </h6>
                                <h6 style=''><?php echo  $row['address'] ?> </h6>
                                <p>  <?php echo  $row['description'] ?> </p>
                                <h4 style=''><?php echo  $row['fdate'] ?> </h4><br>
                                <?php
               echo "
               <a href='replayfeed.php?id=" . $row['fid'] . "'>  
               <button type='submit' class='btn btn-primary btn-lg'  style='padding-left: 2.5rem; radius:240px; padding-right: 2.5rem;background-color: #d4236d;' name='login'>
            replay </button ></a>";
              ?>
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



