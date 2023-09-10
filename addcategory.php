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
    <br><br><br><center><br><br><br>
    <div class="col-lg-8 content-form-right p-0">
        <div class="form-w3ls p-md-5 p-4">
            <form>
                <div class="form-group">
                    <input class="form-control" type="text" name="name" id="w3lSender" placeholder="Category Name" required="">
                </div>
                
                 <div class="form-group">
                    <input class="form-control" type="date" name="dates" id="w3lSender" placeholder="Dates" required="">
                 </div>
                 <div class="form-group">
                    <textarea class="form-control" name="Category" id="w3lMessage" placeholder="Address"
                        required="">
                    </textarea>
                </div>
                <div class="input-group1 text-right"> 
                    <button class="btn button-style" type="submit" name="addsubmit">SiginUp
                        <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                    </button>
                </div>
            </form>
            <?php
            include('dbConnection.php');
                        if (isset($_REQUEST['addsubmit'])) {
                            $nam= $_REQUEST['name'];
                            $em = $_REQUEST['dates']; 
                            $add=$_REQUEST['Category'];
                            $qryReg="insert into  category(catname,dates,description)values('$nam','$em','$add')";    
                            if ($conn->query($qryReg) == TRUE){
                                echo "<script>alert('Category added');window.location='addcategory.php'</script>";
                            }else{
                                echo "<script>alert('added has error! Try Again');</script>";
                            }
                        }
                        ?>
</div></div></center>
<div class="w3l-grids-block-5 py-5">
        <section id="grids5-block" class="pt-md-4 pb-md-5 py-4 mb-5">
            <div class="container">

                <div class="row mt-sm-5 pt-lg-2">
                <?php

$qry = "SELECT *FROM `category`";
$result = mysqli_query($conn, $qry);

      if ($result->num_rows > 0) {
            while ($row = mysqli_fetch_array($result)) {
                ?>
                    <div class="col-lg-4 col-sm-6">
                        <div class=" grids5-info">
                            <a href="#blog"><img src="assets/images/blog1.jpg" alt="" /></a>
                            <div class="blog-info">
                                <h5><?php echo  $row['dates'] ?> </h5>
                                <h4 style='float:right'><?php echo  $row['catname'] ?> </h4><br>
                                <p><?php echo  $row['description'] ?> </p>
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