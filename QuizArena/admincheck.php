<?php
session_start();
$con = mysqli_connect('localhost', 'root');
$db = mysqli_select_db($con, 'quizarena');
if (isset($_POST['submit'])) {
	$userid = $_POST['user'];
	$password = $_POST['pass'];

	$sql = "select * from admin where Email_id = '$userid' and Password = '$password'";
	$query = mysqli_query($con, $sql);

	$row = mysqli_num_rows($query);
	if ($row == 1) {
		$_SESSION['admin_logged'] = 'true';
		header('location:adminmainpage.php');
	} else {

		echo "<center><h1>Invalid credentials </h1></center><br><br>";
		echo "<center><a href = 'admin.php' >Click here to try again </a></center><br><br>";
	}
}
