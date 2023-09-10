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
    <center>

    <br><br><br><br><br>
    <div class="col-lg-6 text-center">
        <div class="form-w3ls p-md-5 p-4">
            <img src="assets/images/pay.png" width="550px" height="150px" >
            <form><br>
            <div class="form-group">
                    <input class="form-control" type="text" name="cname" id="w3lSender" placeholder="Card Name" required="" minlength="4">
                </div>
                 <div class="form-group">
                    <input class="form-control" type="text" name="card" id="w3lSender" placeholder="Card Number" required="" minlength="4">
                </div>

                <div class="form-group">
                    <input class="form-control" type="text" name="cvv" id="w3lSender" placeholder="CVV" required="" minlength="4">
                </div>

                <div class="form-group">
                <input class="form-control" type="date" name="pdate" id="w3lSender" placeholder="Expiry Date" required="" minlength="4">
                </div>

                <div class="input-group1 text-right">
                    <button class="btn button-style" type="submit" name="DataEntry">Payment
                        <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                    </button>
                </div>

            </form>
            <?php
            include('dbConnection.php');
                        if (isset($_REQUEST['DataEntry'])) {
                        
                            echo '$nam';
                            $qryReg="UPDATE `payment`,`addrequest` SET `payment`.`status`='yes'  WHERE `addrequest`.`rid`=`payment`.`rid` AND `addrequest`.`uid`='$uid'";                        
                            if ($conn->query($qryReg) == TRUE ) {
                                echo "<script>alert('Procced Sucessfully');window.location='paymentnotification.php'</script>";
                            } else {
                                echo "<script>alert('procced has error! Try Again');</script>";
                            }
                        }
                ?>
        </div>
    </div>
                    </center>

<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "footer.php";
include_once("footer.php");
?>



