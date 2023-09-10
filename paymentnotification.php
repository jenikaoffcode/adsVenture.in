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
#amt{
    background-color: #ebc334;
        height: 50px;
        width: 50px;
        border-radius: 50px;
        color: black;
        width:100px;
        text-align: center;
        padding: 10px;
}
</style>
    </style>
    <!-- banner section -->
    <br><br><br>
    
<div class="w3l-grids-block-5 py-5">
        <section id="grids5-block" class="pt-md-4 pb-md-5 py-4 mb-5">
            <div class="container">
                <h3>Payment Notifications</h4>
                <div class="row mt-sm-5 pt-lg-2">
                <?php
$qry = "SELECT `payment`.*,`addrequest`.* FROM `addrequest`,`payment` WHERE `addrequest`.`rid`=`payment`.`rid` AND `addrequest`.`uid`='$uid' and payment.status='no'";
$result = mysqli_query($conn, $qry);
      if ($result->num_rows > 0) {
            while ($row = mysqli_fetch_array($result)) {
                ?>
                    <div class="col-lg-4 col-sm-6">
                        <div class=" grids5-info">
                            <div class="blog-info">
                            <img src="assets/images/c6.png" alt="" height="100px" width="100"/><br><br>
                            <hr style='color:red; height:10px;background-color: #d4236d;'>
                            <h4 style=''><?php echo  $row['rdate'] ?> </h4><br>
                                <hp>Payment Date :<?php echo  $row['pdate'] ?> </p>
                                <h6 style=''>PublishedDate :<?php echo  $row['publishdate'] ?> </h6>
                                <p>  <?php echo  $row['des'] ?></p>
                                <hr style='color:red; height:10px;background-color: #d4236d;'>
                             <h4 style='' id="amt"><?php echo  $row['amount'] ?> </h4><br>
                             
                             <?php              
               echo "
               <a href='procced.php?ids=" . $row['pid'] . "'>  
               <button type='submit'  class='btn btn-primary btn-lg'  style='padding-left: 2.5rem; radius:240px; padding-right: 2.5rem;background-color: #d4236d;float:right' name='login'>
            Procced</button ></a>";
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



