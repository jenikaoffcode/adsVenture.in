<?php
session_start();
include_once("AdminNav.php");
include_once("dbConnection.php");
?>
<style>
    #cou{
        background-color: #db1873;
        height: 70px;
        width: 70px;
        border-radius: 100px;
        color: white;
        text-align: center;
        padding: 10px;
        padding-top: 20px;

    }
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
                    <h4 class="title-big">All Company Advertisments</h4>
                </div>
                <?php
            $cidv=  $_SESSION['uid'];
        $qry = "SELECT `addrequest`.*,`category`.*,`news_reg`.*,`user_reg`.*,addads.* FROM `news_reg`,`user_reg`,`addrequest`,`category`,`addads`  WHERE `category`.`cid`=`addads`.`cid` AND `news_reg`.`nid`=`addads`.`nid` AND `user_reg`.`uid`=`addrequest`.`uid` AND `addads`.`anid`=`addrequest`.`anid`";
    $result = mysqli_query($conn, $qry);
    ?>
 <div class="row">

<?php
$count=1;
      if ($result->num_rows > 0) {
            while ($row = mysqli_fetch_array($result)) {
                
                ?>
                <div class="col-lg-4 col-md-6 features15-col-text">
                        <a href="" class="d-flex feature-unit align-items-center">
                        
                            <div class="col-8">
                            <h1 id="cou"><?php echo $count ?></h1><br>
                                <div class="features15-para">
                                    <h5>Customer Detials :</h5>
                                    <hr style='color:red; height:2px;background-color: #d4236d;'>

                                    <h4><?php echo  $row['name'] ?> </h4>
                                    <h6><?php echo  $row['email'] ?>  </h6>

                                    <h6><?php echo  $row['phone'] ?>  </h6>
                                    <h4><?php echo  $row['address'] ?> </h4><br>
                                    <h5>Ads_Details :</h5>

                                    <hr style='color:red; height:5px;background-color: #d4236d;'>
                                    <h6><?php echo  $row['dates'] ?>  </h6>
                                    <h4><?php echo  $row['catname'] ?> </h4>
                                    <p><?php echo  $row['description'] ?> </p>
                                    <h6><?php echo  $row['print'] ?>  </h6>
                                    <h4><?php echo  $row['size'] ?> </h4>
                                    <p>Pages :<?php echo  $row['page'] ?> </p>
                                    <p><?php echo  $row['type'] ?> </p><br>
                                    <h5>Company Certificate:</h5>

<hr style='color:red; height:5px;background-color: #d4236d;'>
<h6><?php echo  $row['iso'] ?>  </h6>
                                    

                            </div>   
                            </div>  

                </a>   
               
                    </div>
<?php
$count=$count+1;
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