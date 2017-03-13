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
		$_SESSION['errors'] = array("Fill in all fields!");
		header("Location:login.php");
		exit();
	} else {
		$result = mysqli_query($con, "SELECT * FROM loggedinuser WHERE email = '$email' AND password = '$password'") or die($mysqli->error());
		if($result ->num_rows == 0){
			$_SESSION['errors'] = array("Incorrect user or password");
			header("Location:login.php");
			exit();
		}
        $username = "SELECT id FROM loggedinuser WHERE email = '$email' AND password = '$password'";
        $_SESSION['username'] = $username; 
        header("Location: index.php");
	}
}