<?php
session_start();
include 'database.php';

//session_start();
// Check if form submitted

if (!isset($_SESSION['admin_userid'])) {
	// $_SESSION['errors'] = array("Invalid user credentials");
	header("Location:index.php");
	exit();
}

$name = $_GET['rname'];
$address = $_GET['location'];
$type = $_GET['type'];
$dishid = $_GET['dishid'];

// Validate input
if(!isset($name) || $name == '' || !isset($address) || $address == '' || !isset($type) || $type == '' || !isset($dishid) || $dishid == ''){
		$_SESSION['errors'] = array("Fill in all fields!");
		header("Location:edit_menu.php?rname=".$name."&location=".$address."&type=".$type);
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
	$query = "INSERT INTO contains (dishid, location, rname, type) VALUES ('$dishid', '$address', '$name', '$type')";
	if(!mysqli_query($con, $query)){
		$_SESSION['errors'] = array(mysqli_error($con));
		header("Location:edit_menu.php?rname=".$name."&location=".$address."&type=".$type);
		exit();
	} 
	else {
		// $_SESSION['success'] = array("Success!");
		header("Location:edit_menu.php?rname=".$name."&location=".$address."&type=".$type);
		exit();
	}
}

