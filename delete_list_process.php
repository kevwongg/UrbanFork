<?php
include 'database.php';
include 'ChromePhp.php';

$listId = $_GET['listId'];
$listName = $_GET['listName'];

if(isset ($_POST['delete'])){
	$sql = "DELETE FROM listoffavourites WHERE listid = $listId AND listname = '$listName'";
	if(mysqli_query($con, $sql)){
		header("Location:favourites.php");
	}else{
		echo "ERROR: Could not execute $sql. " . mysqli_error($con);
	}
}
mysqli_close($con);