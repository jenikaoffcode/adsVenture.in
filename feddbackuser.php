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
    </style>
    <!-- banner section -->
    <br><br><br>
    <br><br><br><br><br>
    <div class="col-lg-8 content-form-right p-0">
        <div class="form-w3ls p-md-5 p-4">
            <h2>Feed Back</h2>
            <br><br><br>
            <form>
                <div class="form-group">
                    <input class="form-control" type="text" name="head" id="w3lSender" placeholder="feedback headLine" required="" minlength="4">
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="address" id="w3lMessage" placeholder="Description" required=""></textarea>
                </div>
                <div class="input-group1 text-right">
                    <button class="btn button-style" type="submit" name="DataEntry">Feedback
                        <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                    </button>
                </div>
            </form>
            <?php
            include('dbConnection.php');
                        if (isset($_REQUEST['DataEntry'])) {
                            $num=$_REQUEST['head'];
                            $add=$_REQUEST['address'];
                            $date = date('d-m-y h:i:s');
                            echo '$nam';
                            $qryReg="insert into feedback(uid,head,description,fdate)values('$uid','$num','$add','$date')";                        
                            if ($conn->query($qryReg) == TRUE ) {
                                echo "<script>alert('Sending Sucessfully');window.location='feddbackuser.php'</script>";
                            } else {
                                echo "<script>alert('Sending has error! Try Again');</script>";
                            }
                        }
                ?>
        </div>
    </div>

    
<div class="w3l-grids-block-5 py-5">
        <section id="grids5-block" class="pt-md-4 pb-md-5 py-4 mb-5">
            <div class="container">
                <div class="row mt-sm-5 pt-lg-2">
                <?php
$qry = "SELECT *FROM `feedback` where uid='$uid'";
$result = mysqli_query($conn, $qry);
      if ($result->num_rows > 0) {
            while ($row = mysqli_fetch_array($result)) {
                ?>
                    <div class="col-lg-4 col-sm-6">
                        <div class=" grids5-info">
                            <div class="blog-info">
                                <h5> <?php echo  $row['fdate'] ?> </h5><br>
                                <h4 style=''><?php echo  $row['head'] ?> </h4>
                                <p>  <?php echo  $row['description'] ?> </p>
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



