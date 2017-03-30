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


	$sql1 = "SELECT * FROM restaurant WHERE rname='$favRname' AND location='$favLocation'";
	if ($result=mysqli_query($con,$sql1)){
	  // Return the number of rows in result set
		$rowcount=mysqli_num_rows($result);
  //printf("Result set has %d rows.\n",$rowcount);
		if($rowcount == 0){
			echo("This restaurant is not a participating restaurant of Urban Fork. You will be redirected to add another restaurant.");
  // Free result set
			mysqli_free_result($result);
			header("refresh:5;url=add_favourite.php?listId=$listId.");
			exit();
		} else {
			//rowcount is not 0
			$listId = $_GET['listId'];
			echo($listId);
			$sql = "INSERT INTO maintains (listid, id, location, rname) VALUES ($listId, $userId, '$favLocation', '$favRname')";

			if(mysqli_query($con, $sql)){
			    //echo "Records were updated successfully.";
				header("Location:favourites.php");
			} else {
				echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
			}

		}
	}
}
mysqli_close($con);
}