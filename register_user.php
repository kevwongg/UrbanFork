<?php
session_start();
include 'database.php';

//session_start();
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
			$_SESSION['errors'] = array("Fill in all fields!");
			header("Location:register.php");
		exit();
	} else {
		$result = mysqli_query($con, "SELECT * FROM loggedinuser WHERE email= '$email'") or die($mysqli->error());
		if($result ->num_rows > 0){
			$_SESSION['errors'] = array("Email already exists!");
			header("Location:register.php");
			exit();
		}
		$query = "INSERT INTO loggedinuser (name, username, email, password, country) VALUES ('$name', '$username', '$email', '$password', '$country')";
		if(!mysqli_query($con, $query)){
			die('Error: '.mysqli_error($con));
		} 
		else {
			$_SESSION['errors'] = array("Success!");
			header("Location:register.php");
			exit();
		}
	}
}