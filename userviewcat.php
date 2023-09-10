<?php
session_start();
include_once("UserNav.php");
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
                    <h4 class="title-big"></h4>
                </div>
                <?php
            $cidv=  $_SESSION['uid'];
        $qry = "SELECT `addads`.*,`category`.* FROM `addads`,`category` WHERE `addads`.cid=`category`.cid";
        
    $result = mysqli_query($conn, $qry);
    ?>
 <div class="row">
<?php
      if ($result->num_rows > 0) {
            while ($row = mysqli_fetch_array($result)) {
                ?>
                <div class="col-lg-2 features15-col-text">
                        <a href="" class="d-flex feature-unit align-items-center">
                            <div class="col-4">
                              
                            </div>
                            <div class="col-12">
                                <div class="features15-para">
                                    <h6><?php echo  $row['dates'] ?>  </h6>
                                    <h4><?php echo  $row['catname'] ?> </h4>
                         
                            </div>   
                            </div> 
                            <?php
               
               echo "
               <a href='Viewtypenews.php?id=" . $row['anid'] . "'>  
               <button type='submit' class='btn btn-primary' style='padding-left: 2.5rem; radius:240px; padding-right: 2.5rem;' name='login'>
            View </button ></a>";
              ?> 

                </a>   
            
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