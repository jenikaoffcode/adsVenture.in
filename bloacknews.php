
<?php

include('dbConnection.php');
$id=$_REQUEST['id'];
$qry = "delete from login WHERE reg_id='" . $id. "' and type='NEWS'";
$qrys = "delete from news_reg WHERE nid='" . $id. "'";

  //  echo $qry;
   if (($conn->query($qry) == TRUE)&&$conn->query($qrys) == TRUE){
    echo "<script>alert('Data is blocked...');window.location='newspaper.php'</script>";
}else{
    echo "<script>alert('Data Failed');window.location='newspaper.php'</script>";
}
?>