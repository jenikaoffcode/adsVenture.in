
<?php

include('dbConnection.php');
$id=$_REQUEST['id'];
$qry = "delete from `addrequest` WHERE rid='" . $id. "'";

  //  echo $qry;
   if ($conn->query($qry) == TRUE){
    echo "<script>alert('Data is blocked...');window.location='userads.php'</script>";
}else{
    echo "<script>alert('Data Failed');window.location='userads.php'</script>";
}
?>