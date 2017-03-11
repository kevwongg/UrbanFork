<!DOCTYPE html>

<?php include("header.php");?>
<?php include("database.php");?>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="">
  <title>UrbanFork</title>
  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/search.css" rel="stylesheet">
</head>
<body>
	
	<?php echo $page_title;?>

	<?php
		$rname = $_GET['rname'];
		// echo $rname;
		$location = $_GET['location'];
		// echo $location;


		$sql="SELECT * FROM restaurant WHERE rname = '" . $rname . "' AND location = '" . $location . "'"; 
		$result = mysqli_query($con, $sql) or die(mysqli_error($con));
		while($row = mysqli_fetch_array($result)){
			$location = $row['location'];
			$rname = $row['rname'];
			$cuisine = $row['cuisine'];
			$description = $row['description'];
			$phone = $row['phone'];
			
			echo "<h1 class=\"jumbotron-heading\">$rname</h1>";
			echo "<br>";
			echo $location;
			echo "<br>";
			
			echo "<br>";
			echo $cuisine;
			echo "<br>";
			echo $description;
			echo "<br>";
			echo $phone;
		}

	?>

	
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.js"></script>  
</body>
</html>
