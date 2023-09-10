<?php
session_start();
include_once("NewsNav.php");
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
                    <h4 class="title-big">News Category</h4>
                </div>
                <?php
            $cidv=  $_SESSION['uid'];
        $qry = "SELECT *FROM `category`";
    $result = mysqli_query($conn, $qry);
    ?>
 <div class="row">

<?php
      if ($result->num_rows > 0) {
            while ($row = mysqli_fetch_array($result)) {
                ?>
                <div class="col-lg-4 col-md-6 features15-col-text">
                        <a href="" class="d-flex feature-unit align-items-center">
                            <div class="col-4">
                                <div class="features15-info">
                                    <img class="img-fluid" src="assets/images/book.png" alt=" ">
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="features15-para">
                                    <h6><?php echo  $row['dates'] ?>  </h6>
                                    <h4><?php echo  $row['catname'] ?> </h4>
                                    <p><?php echo  $row['description'] ?> </p>
                                
                            </div>   
                            </div>  

                </a>   
                <?php
               
                 echo "
                 <a href='addnews.php?id=" . $row['cid'] . "'>  
                 <button type='submit' class='btn btn-primary btn-lg'  style='padding-left: 2.5rem; radius:240px; padding-right: 2.5rem;background-color: #d4236d;' name='login'>
              + </button ></a>";
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