
<?php
include('dbConnection.php');
$id=$_REQUEST['id'];
$qry = "UPDATE login set status='yes' WHERE reg_id='" . $id. "' and type='NEWS'";
    //echo $qry;
   if ($conn->query($qry) == TRUE){
       
    echo "<script>alert('Approved...');window.location='newspaper.php'</script>";
   
}else{
    echo "<script>alert('data Failed to Approved');window.location='newspaper.php'</script>";
}
?>