<?php
include 'database.php';
include 'ChromePhp.php';

$listId = $_GET['listId'];

if(isset($_POST['submit'])){
	//$newListName = mysqli_real_escape_string($con, $_POST['listname']);
	$newListName = $_POST['listname'];

	ChromePhp::log($newListName);
	ChromePhp::log($listId);

	if(!isset($newListName) || $newListName == '') {
		$_SESSION['errors'] = array("The List Name cannot be empty!");
		header("Location:rename_list.php");
		exit();
	} else {

		if($con === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
		$sql = "UPDATE listoffavourites lf
		SET lf.listname = '$newListName'
		WHERE lf.listid = $listId";

		if(mysqli_query($con, $sql)){
    //echo "Records were updated successfully.";
			header("Location:favourites.php");
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}
	}
	mysqli_close($con);
}
