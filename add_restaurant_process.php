<?php
session_start();
include 'database.php';

//session_start();
// Check if form submitted
if(isset($_POST['submit'])){

	if (!isset($_SESSION['admin_userid'])) {
		// $_SESSION['errors'] = array("Invalid user credentials");
		header("Location:index.php");
		exit();
	}

	$name = mysqli_real_escape_string($con, $_POST['name']);
	$cuisine = mysqli_real_escape_string($con, $_POST['cuisine']);
	$description = mysqli_real_escape_string($con, $_POST['description']);
	$address = mysqli_real_escape_string($con, $_POST['address']);
	$phone = mysqli_real_escape_string($con, $_POST['phone']);
	// Validate input
	if(!isset($name) || $name == '' || !isset($cuisine) || $cuisine == '' 
		|| !isset($description) || $description == ''
		|| !isset($address) || $address == '' || !isset($phone) || $phone == ''){
			$_SESSION['errors'] = array("Fill in all fields!");
			header("Location:add_restaurant.php");
		exit();
	}
	else {
		$sql="SELECT * FROM restaurant WHERE rname = '" . $name . "' AND location = '" . $address . "'"; 
		$result = mysqli_query($con, $sql) or die(mysqli_error($con));
		if($result->num_rows > 0){
			$_SESSION['errors'] = array("Restaurant already exists!");
			header("Location:add_restaurant.php");
			exit();
		}
		$query = "INSERT INTO restaurant (location, cuisine, description, phone, rname) VALUES ('$address', '$cuisine', '$description', '$phone', '$name')";
		if(!mysqli_query($con, $query)){
			die('Error: '.mysqli_error($con));
		} 
		else {
			$_SESSION['success'] = array("Success!");
			header("Location:add_restaurant.php");
			exit();
		}
	}
}