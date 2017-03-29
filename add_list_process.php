<?php
include 'database.php';
include 'ChromePhp.php';
session_start();
$userId=$_SESSION['userId'];

if(isset($_POST['submit'])){
	$newListName = $_POST['listname'];

	ChromePhp::log($newListName);

	if(!isset($newListName) || $newListName == '') {
		$_SESSION['errors'] = array("The List Name cannot be empty!");
		header("Location:add_list.php");
		exit();
	} else {

		if($con === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
		$sql = "INSERT INTO listoffavourites (id, listname) VALUES ($userId, '$newListName')";

		if(mysqli_query($con, $sql)){
    //echo "Records were updated successfully.";
			header("Location:favourites.php");
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}
	}
	mysqli_close($con);
}
