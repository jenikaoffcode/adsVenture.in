<?php
session_start();
include_once("UserNav.php");
include_once("dbConnection.php");
$cidy=$_SESSION['uid'];
$id=$_REQUEST['id'];
?>
<style>
#data{
    width:50%;
    float:right;
}
    </style>
    <!-- banner section -->
   
<div class="w3l-grids-block-5 py-5">
        <section id="grids5-block" class="pt-md-4 pb-md-5 py-4 mb-5">
            <div class="container">
                <div class="row mt-sm-5 pt-lg-2">
                <?php
        $qry = "SELECT DISTINCT `addads`.*,`category`.* FROM `addads`,`category` WHERE `addads`.cid=`category`.cid  AND `addads`.`anid`='$id'";
        $result = mysqli_query($conn, $qry);
      if ($result->num_rows > 0) {
            while ($row = mysqli_fetch_array($result)) {
                ?>
                    <div class="col-lg-4 col-sm-6">
                        <div class=" grids5-info">
                            <div class="blog-info">
                                <h5>Paper Print :<?php echo  $row['print'] ?> </h5><br>
                                <h4 style=''>Font Size :<?php echo  $row['size'] ?> </h4>
                                <p> Number of Page :<?php echo  $row['page'] ?> </p>
                                <p>Page Type :<?php echo  $row['type'] ?> </p>
                                <hr style='color:red; height:10px;background-color: #d4236d;'>
                                <h6 style=''><?php echo  $row['description'] ?> </h6>
                                <hr style='color:red; height:10px;background-color: #d4236d;'>
                            </div>
                        </div>
                        <?php              
               echo "
               <a href='requesttype.php?ids=" . $row['anid'] . "'>  
               <button type='submit'  class='btn btn-primary btn-lg'  style='padding-left: 2.5rem; radius:240px; padding-right: 2.5rem;background-color: #d4236d;float:right' name='login'>
            <i class='fa fa-angle-double-right' aria-hidden='true'></i> </button ></a>";
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
        </section>
    </div>


<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "footer.php";
include_once("footer.php");
?>