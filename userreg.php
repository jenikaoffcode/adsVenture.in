<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "adsventure");

$userName = $_REQUEST['name'];
$userAge = $_REQUEST['email'];
$userPhone = $_REQUEST['phone'];
$userAddress = $_REQUEST['address'];
$userCourse = $_REQUEST['pass'];

if (isset($_REQUEST['submit'])) {

	// $_SESSION['u_Score'] = $userCourse;
	// $_SESSION['u_Sem'] = $userSem;
	// $_SESSION['u_Room'] = $userRoom;

	$qryUserReg = "INSERT INTO user_reg(name, email, phone, address) VALUES('$userName', '$userAge', '$userPhone', '$userAddress', '$userCourse')";
	$qryUserLog = "INSERT INTO login(reg_id,email, password, type,status) VALUES((select max(uid) from user_reg), '$userEmail', '$userPassword', 'USER','0')";

	// echo $qryUserReg . "&& " . $qryUserLog;

	if ($conn->query($qryUserReg) == TRUE && $conn->query($qryUserLog) == TRUE) {
		echo "<script>alert('Registration Success');window.location = 'login.html';</script>";
	} else {
		echo "<script>alert('Registration Failed');window.location = 'siginup.html';</script>";
	}
}
?>
