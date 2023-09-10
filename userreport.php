<?php
session_start();
include_once("AdminNav.php");
include_once("dbConnection.php");
?>
<style>
#data{
    width:50%;
    float:right;
}
    </style>
    <!-- banner section -->
    <br><br><br>

    <!-- //banner section -->
<br><br><br><br>
    <!-- banner bottom section -->
    <div class="w3l-index-block4 pb-5">
        <div class="features-bg pb-lg-5 pt-lg-4 py-4">
            <div class="container">
                <div class="title-main text-center mx-auto mb-md-4">
                    <h4 class="title-big">User Records</h4>
                   
                </div>
                <?php
            $cidv=  $_SESSION['uid'];

        $qry = "SELECT `login`.`status`,`user_reg`.* FROM `login`,`user_reg` WHERE `login`.`reg_id`=`user_reg`.`uid` and type='USER'";
    $result = mysqli_query($conn, $qry);
    ?>      <br><br>

                <div class="row">
      <br><br>
<?php
      if ($result->num_rows > 0) {
            while ($row = mysqli_fetch_array($result)) {
                $check=$row['status'];
                ?>
                <div class="usercols">
                        <a href="" class="d-flex feature-unit align-items-center">
                            <div class="col-3">
                                <div class="features15-info">
                                    <img class="img-fluid" src="assets/images/rating.png" alt=" " height="200px" width="200px">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="features15-para">
                                    <h6><?php echo  $row['name'] ?>  </h6>
                                    <h4><?php echo  $row['email'] ?> </h4>
                                    <p><?php echo  $row['phone'] ?> </p>
                                    <p><?php echo  $row['address'] ?> </p>
                            </div>   
                            </div>  
                </a>   
               <?php
            }
} else {
    echo "  <center> <h2 style='color: red;'>.... No Data Found ...</h2></center> ";
}
?>

                </div>
            </div>
        </div>
    </div>
    <!-- footer -->       
<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "footer.php";
include_once("footer.php");
?>