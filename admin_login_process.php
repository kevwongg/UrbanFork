<?php
session_start();
include 'database.php';

// Check if form submitted
if(isset($_POST['submit'])){
	$email = mysqli_real_escape_string($con, $_POST['email']);
	$password = mysqli_real_escape_string($con, $_POST['psw']);
	// Validate input
	if(!isset($email) || $email == '' 
		|| !isset($password) || $password == ''){
		$_SESSION['admin_errors'] = array("Fill in all fields!");
		header("Location: admin_login.php");
		exit();
	} else {
		$result = mysqli_query($con, "SELECT * FROM admin WHERE email = '$email' AND password = '$password'") or die($mysqli->error());
		if($result ->num_rows == 0){
			$_SESSION['admin_errors'] = array("Incorrect user or password");
			header("Location:admin_login.php");
			exit();
		}
        $username = mysqli_query($con, "SELECT id FROM admin WHERE email = '$email' AND password = '$password'") /*or die($mysqli->error())*/;
        $row = mysqli_fetch_assoc($username); 
        $_SESSION['admin_userid'] = $row['id'];
        header("Location: index.php");
	}
}