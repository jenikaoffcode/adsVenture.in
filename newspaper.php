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
                    <h4 class="title-big">Customer_Records</h4>
                </div>
                <?php
            $cidv=  $_SESSION['uid'];

        $qry = "SELECT `login`.`status`,`news_reg`.* FROM `login`,`news_reg` WHERE `login`.`reg_id`=`news_reg`.`nid` and type='NEWS'";
    $result = mysqli_query($conn, $qry);
    ?>
 <div class="row">
    
<?php
      if ($result->num_rows > 0) {
            while ($row = mysqli_fetch_array($result)) {
                $check=$row['status'];
                ?>
                <div class="col-lg-4 col-md-6 features15-col-text">
                        <a href="" class="d-flex feature-unit align-items-center">
                            <div class="col-4">
                                <div class="features15-info">
                                    <img class="img-fluid" src="assets/images/c2.png" alt=" ">
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="features15-para">
                                    <h6><?php echo  $row['name'] ?>  </h6>
                                    <h4><?php echo  $row['email'] ?> </h4>
                                    <p><?php echo  $row['phone'] ?> </p>
                                    <p><?php echo  $row['address'] ?> </p>
                                    <p><?php echo  $row['iso'] ?> </p>

                            </div>   
                            </div>  

                </a>   
                <?php
                if($check=="yes"){
echo" <button type='submit' class='btn btn-primary btn-lg'  style='padding-left: 2.5rem; padding-right: 2.5rem;background-color: #0d8530;' name='login'>
Approved </button > ";
                }else{
                echo "
                    <a href='approvenews.php?id=" . $row['nid'] . "'>  
                    <button type='submit' class='btn btn-primary btn-lg'  style='padding-left: 2.5rem; padding-right: 2.5rem;background-color: #c81538;' name='login'>
                 Approve </button ></a>";
                }
                 echo "
                 <a href='bloacknews.php?id=" . $row['nid'] . "'>  
                 <button type='submit' class='btn btn-primary btn-lg'  style='padding-left: 2.5rem; padding-right: 2.5rem;background-color: #d4236d;' name='login'>
              Block </button ></a>";
                ?>
                    </div>
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