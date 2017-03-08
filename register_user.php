<?php
include 'database.php';

// Check if form submitted
if(isset($_POST['submit'])){
	$name = mysqli_real_escape_string($con, $_POST['name']);
	$username = mysqli_real_escape_string($con, $_POST['uname']);
	$email = mysqli_real_escape_string($con, $_POST['email']);
	$password = mysqli_real_escape_string($con, $_POST['psw']);
	$country = mysqli_real_escape_string($con, $_POST['country']);
	// Validate input
	if(!isset($name) || $name == '' || !isset($username) || $username == '' 
		|| !isset($email) || $email == ''
		|| !isset($password) || $password == '' || !isset($country) || $country == ''){
		$error = "Please fill in your name and message";
		header("Location: register.php?error=".urlencode($error));
		exit();
	} else {
		
		$query = "INSERT INTO loggedinuser (name, username, email, password, country) VALUES ('$name', '$username', '$email', '$password', '$country')";
		if(!mysqli_query($con, $query)){
			die('Error: '.mysqli_error($con));
		} 
		else {
			header("Location: register.php");
			exit();
		}
	}
}