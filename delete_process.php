<?php
include 'database.php';
include 'ChromePhp.php';

$listId = $_GET['listId'];
$rname = $_GET['rname'];

if(isset ($_POST['delete'])){
	$sql = "DELETE FROM maintains WHERE rname = '$rname' AND listid = '$listId'";
	if(mysqli_query($con, $sql)){
		header("Location:favourites.php");
	}else{
		echo "ERROR: Could not execute $sql. " . mysqli_error($con);
	}
}
mysqli_close($con);