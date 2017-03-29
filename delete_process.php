<?php
include 'database.php';
include 'ChromePhp.php';

$listId = $_GET['listId'];

if(isset($_POST['submit'])){
	//$newListName = mysqli_real_escape_string($con, $_POST['listname']);
	$delRestName = $_POST['rname'];

	ChromePhp::log($delRestName);
	ChromePhp::log($listId);

	if(!isset($delRestName) || $delRestName == '') {
		$_SESSION['errors'] = array("Please enter a list to delete!");
		header("Location:delete_restaurant.php");
		exit();
	} else {

		if($con === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
		$sql = "DELETE FROM maintains WHERE maintains.rname = '$delRestName' AND maintains.listid = '$listId'";

		if(mysqli_query($con, $sql)){
    //echo "Records were updated successfully.";
			header("Location:favourites.php");
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}
	}
	mysqli_close($con);
}
