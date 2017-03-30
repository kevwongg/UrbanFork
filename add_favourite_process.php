<?php
include 'database.php';
include 'ChromePhp.php';
session_start();
$userId=$_SESSION['userId'];
$listId = $_GET['listId'];

if(isset($_POST['submit'])){
	$favRname = $_POST['rname'];
	$favLocation = $_POST['location'];


	if(!isset($favRname) || $favRname == ''
		|| !isset($favLocation) || $favLocation == '') {
		$_SESSION['errors'] = array("Both the restaurant name and location cannot be empty!");
		header("Location:add_favourite.php");
		exit();
	} else {

		if($con === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
		$sql = "INSERT INTO maintains (listid, id, location, rname) VALUES ($listId, $userId, '$favLocation', '$favRname')";

		if(mysqli_query($con, $sql)){
    //echo "Records were updated successfully.";
			header("Location:favourites.php");
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}
	}
	mysqli_close($con);
}
