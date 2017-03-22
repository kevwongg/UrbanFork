<!DOCTYPE html> 
<?php include ("header.php");?>
<?php include("database.php");?> 

<!--This code to prevent people from manually accessing this page--> 
<?php 
if (!isset($_SESSION['username'])) {
  header("location:login.php");
}

$listId = $_GET['listId'];
$listName = $_GET['listName'];
?>

<html> 
	<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="css/pin.css" rel="stylesheet">
	</head>



	<body>

<div class="container">
<div class="jumbotron">
<h2><? echo $listName ?> </h2>
<p><a class="btn btn-primary btn-lg" href="http://localhost/urbanfork/search.php" role="button">Favourite more restaurants</a>
</p>
</div>
	<div class="container">
	<?php        
		$userId = $_SESSION['userId'];        
		$query = "SELECT m.rname FROM maintains m WHERE m.listid = $listId";

		$result = mysqli_query($con, $query) or die("Error");
		
		while($row = mysqli_fetch_array($result)){
			$placeNames[] = $row['rname'];
		}
		?>

		<?php
		$index = 0; 
		while ($index < sizeof($placeNames)) {
			echo $placeNames[$index];
			echo("<br>");
			$index++;
		}
		mysqli_close($con);
		?>

	</div>
</body>
</html>