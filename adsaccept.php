
<?php
include('dbConnection.php');
$id=$_REQUEST['id'];
$qry = "UPDATE addrequest set status='yes' WHERE rid='" . $id. "'";
    //echo $qry;
   if ($conn->query($qry) == TRUE){
       
    echo "<script>alert('Approved...');window.location='userads.php'</script>";
   
}else{
    echo "<script>alert('data Failed to Approved');window.location='userads.php'</script>";
}
?>