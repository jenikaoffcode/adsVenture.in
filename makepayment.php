<?php
session_start();
include_once("UserNav.php");
include_once("dbConnection.php");
$rid=$_REQUEST['id'];
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
            <h2>User Payment Request</h2>
            <br><br><br>
            <form>
            <input class="form-control" type="hidden" name="idd" value="<?php echo $rid ?>">
                <div class="form-group">

                    <input class="form-control" type="date" name="pdate" id="w3lSender" placeholder=" " required="" minlength="4">
                </div>
                <div class="form-group">
                    <input class="form-control" type="date" name="pubdate" id="w3lSender" placeholder=" " required="" minlength="4">
                </div>
                <div class="form-group">
                <input class="form-control" type="number" name="amou" id="w3lSender" placeholder="Amount" required="" >
            </div>
                <div class="input-group1 text-right">
                    <button class="btn button-style" type="submit" name="DataEntry">Procced
                        <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                    </button>
                </div>
            </form>
            <?php
            include('dbConnection.php');
                        if (isset($_REQUEST['DataEntry'])) {
                            $idd=$_REQUEST['idd'];
                            $num=$_REQUEST['pdate'];
                            $pp=$_REQUEST['pubdate'];
                            $add=$_REQUEST['amou'];
                            echo '$nam';
                            $qryReg="INSERT INTO `payment`(`rid`,`amount`,`pdate`,`publishdate`,`status`)values('$idd','$add','$num','$pp','no')";                        
                            if ($conn->query($qryReg) == TRUE ) {
                                echo "<script>alert('proceed Sucessfully');window.location='userads.php'</script>";
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



