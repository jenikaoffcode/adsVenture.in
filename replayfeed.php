
<?php
session_start();
include_once("AdminNav.php");
include_once("dbConnection.php");
$fid=$_REQUEST["id"];
?>
<style>
#data{
    width:50%;
    float:right;
}
    </style>
    <!-- banner section -->
    <br><br><br><br><br>  <br><br><br><br><br>
    <div class="col-lg-8 content-form-right p-0">
        <div class="form-w3ls p-md-5 p-4">
            <h2>ReplayFeedBack</h2>
            <br><br><br>
            <form>
                <input type="hidden" name="fid" value="<?php echo $fid ?>">
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
                            $uid=$_REQUEST['fid'];
                            $add=$_REQUEST['address'];
                            $date = date('d-m-y h:i:s');
                            echo '$nam';
                            $qryReg="insert into replayfeed(fid,rdate,replay)values('$uid','$date','$add')";                        
                            if ($conn->query($qryReg) == TRUE ) {
                                echo "<script>alert('Sending Sucessfully');window.location='viewfeedbacks.php'</script>";
                            } else {
                                echo "<script>alert('Sending has error! Try Again');</script>";
                            }
                        }
                ?>
        </div>
    </div>
<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "footer.php";
include_once("footer.php");
?>











