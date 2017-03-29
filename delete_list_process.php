<?php
include 'database.php';
include 'ChromePhp.php';

$listId = $_GET['listId'];
$listName = $_GET['listName'];


// if(isset($_POST['delete'])){
// 	//$newListName = mysqli_real_escape_string($con, $_POST['listname']);
// 	$delListName = $_POST['listname'];
// 	echo ($delListName);

// 	ChromePhp::log($delListName);
// 	ChromePhp::log($listId);

// 	if(!isset($delListName) || $delListName == '') {
// 		$_SESSION['errors'] = array("Please enter a list to delete!");
// 		header("Location:delete_list.php");
// 		exit();
// 	} else {

// 		if($con === false){
//     die("ERROR: Could not connect. " . mysqli_connect_error());
// }
// 		//$sql = "DELETE FROM maintains WHERE maintains.rname = '$delRestName' AND maintains.listid = '$listId'";
// 		$sql = "DELETE FROM listoffavourites WHERE listid = $listId AND listname = '$delListName'";

// 		if(mysqli_query($con, $sql)){
//     //echo "Records were updated successfully.";
// 			header("Location:favourites.php");
// } else {
//     echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
// }
// 	}
// 	mysqli_close($con);
// }

if(isset ($_POST['delete'])){
	$sql = "DELETE FROM listoffavourites WHERE listid = $listId AND listname = '$listName'";
	if(mysqli_query($con, $sql)){
		header("Location:favourites.php");
	}else{
		echo "ERROR: Could not execute $sql. " . mysqli_error($con);
	}
}
mysqli_close($con);