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
	$address = mysqli_real_escape_string($con, $_POST['address']);
	$new_menu_name = mysqli_real_escape_string($con, $_POST['new_menu_name']);
	// Validate input
	if(!isset($name) || $name == '' || !isset($address) || $address == '' || !isset($new_menu_name) || $new_menu_name == ''){
			$_SESSION['errors'] = array("Fill in all fields!");
			header("Location:edit_restaurant_menu.php?rname=".$name."&location=".$address);
		exit();
	}
	else {
		$sql="SELECT * FROM restaurant WHERE rname = '" . $name . "' AND location = '" . $address . "'"; 
		$result = mysqli_query($con, $sql) or die(mysqli_error($con));
		if($result->num_rows != 1){
			$_SESSION['errors'] = array("Restaurant does not exist!");
			header("Location:index.php");
			exit();			
		}
		$query = "INSERT INTO menu (type, location, rname) VALUES ('$new_menu_name', '$address', '$name')";
		if(!mysqli_query($con, $query)){
			$_SESSION['errors'] = array(mysqli_error($con));
			header("Location:edit_restaurant_menu.php?rname=".$name."&location=".$address);
			exit();
		} 
		else {
			// $_SESSION['success'] = array("Success!");
			header("Location:edit_restaurant_menu.php?rname=".$name."&location=".$address);
			exit();
		}
	}
}