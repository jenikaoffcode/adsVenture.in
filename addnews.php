<?php
session_start();
include_once("NewsNav.php");
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
    <br><br><br><center><br><br><br>
    <div class="col-lg-4 content-form-right p-0">
        <div class="form-w3ls p-md-5 p-4">
        <form>
        <label>Paper Print</label>
        <select class="form-control form-control -sm" name="print">
<option>Normal Print</option>
<option>Color Print</option>
</select>
<label>Font Size</label>
<select class="form-control form-control-sm" name="size">
<option>Large</option>
<option>X-Large</option>
<option>XX-Large</option>
<option>Small</option>
<option>x-Small</option>
<option>medium</option>
</select>
<label>No of Pages</label><br>
<select class="form-control form-control-sm" name="page">
<option>0-1</option>
<option>2-3</option>
<option>3-4</option>
<option>4-5</option>
<option>5-6</option>
</select>
<br>
<label>Content Type</label><br>
<select class="form-control form-control-sm" name="type">
<option>SubTitile</option>
<option>MainTitle</Title></option>
<option>Both</option>
<option>Normal</option>
</select>
<br><input class="form-control form-control-lg" type="hidden" placeholder="AMount" name="idval" value="<?php echo $id ?>">
<div class="input-group1 text-right">
                    <button class="btn button-style" type="submit" name="usersubmit">ADD
                        <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                    </button>
                </div>
</form>
    <?php


            include('dbConnection.php');
                        if (isset($_REQUEST['usersubmit'])) {
                            $nam= $_REQUEST['print'];
                            $em = $_REQUEST['size']; 
                            $add=$_REQUEST['page'];
                            $typ=$_REQUEST['type'];
                            $val=$_REQUEST['idval'];
                            $qryReg="INSERT INTO `addads`(`print`,`size`,`page`,`type`,`nid`,`cid`)VALUES('$nam','$em','$add','$typ','$cidy','$val')";    
                            if($conn->query($qryReg) == TRUE){
                                echo "<script>alert('Advertisment Add');window.location='viewcategory.php'</script>";
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
$qry = "SELECT *FROM `addads` where cid='$id'";
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