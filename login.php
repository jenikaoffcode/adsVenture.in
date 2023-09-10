<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "adsventure");
$username = $_POST['username'];
$password = $_POST['password'];

if (isset($_REQUEST['login'])) {
	$email = $_REQUEST['username'];
	$password = $_REQUEST['password'];
    $st="yes";
	$qry = "SELECT * FROM login WHERE `email` = '$email' AND `password` = '$password' AND `status`='$st'";
	$result = mysqli_query($conn, $qry);
	if ($result->num_rows > 0) {
		$data = $result->fetch_assoc();
		$uid = $data['reg_id'];
		$type = $data['type'];
		$_SESSION['uid'] = $uid;
		$_SESSION['type'] = $type;
		echo "<script>alert('Login Success')</script>";
		if ($type == 'ADMIN'){
			echo "<script>window.location='AdminHome.php'</script>";
		} else  if ($type == 'USER'){
			echo "<script>window.location='UserHome.php'</script>";
		}
		if ($type == 'NEWS') {
			echo "<script>window.location='NewsHome.php'</script>";
		} else {
			echo "<script>alert('Login Failed'); window.location='index.php';</script>";
		}
	   }
    else {
		echo "<script>alert('Invalid email and password');
		window.location='login.html';</script>";
	}
}

?>
