<!DOCTYPE html> 
<?php include ("header.php");?>
<?php include("database.php");?> 
<?php include 'ChromePhp.php';?>

<!--This code to prevent people from manually accessing this page--> 
<?php 
if (!isset($_SESSION['username'])) {
	header("location:login.php");
}

$listId = $_GET['listId'];
$listName = $_GET['listName'];
$userId = $_SESSION['userId'];
?>

<?php

error_reporting(0);
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
			<h2><?php echo $listName ?> </h2>
			<p><a class="btn btn-primary btn-lg" href="http://localhost/urbanfork/search.php" role="button">Favourite more restaurants</a> 
				<a class="btn btn-primary btn-lg" href="http://localhost/urbanfork/rename_list.php?listId=<?=$listId?>" role="button">Edit List Name</a>
				<a class="btn btn-primary btn-lg" href="http://localhost/urbanfork/add_favourite.php?listId=<?=$listId?>" role="button">Add a Favourite Restaurant</a>



			</div>
			<div class="container">
				<div id="wrapper">
					<div id="columns">
						<?php        
						$userId = $_SESSION['userId'];        
						$query = "SELECT m.rname, m.location FROM maintains m WHERE m.listid = $listId";

						$result = mysqli_query($con, $query) or die("Error");
						
						while($row = mysqli_fetch_array($result)){
							$rname[] = $row['rname'];
							$location[] = $row ['location'];
						}




						$index = 0; 

						while ($index < sizeof($rname)) {

							echo("<br>");
							
							$fileName = str_replace(' ', '', $location[$index].$rname[$index]);
							
							$hrefRname = str_replace(' ', '%20', $rname[$index]);
							$hrefLoc = str_replace(' ', '%20', $location[$index]);
							
							$hrefPath = "http://localhost/Urbanfork/restaurant.php?rname=".$hrefRname."&location=".$hrefLoc."&userId=".$userId;
							
							$imagePath = "./img/searchImage/".$fileName.".jpg";
							echo "<br>";

							?>
							
							<tbody>
								<tr> 
									
									<div>
										
										<a class="btn btn-primary btn-sm" href="http://localhost/urbanfork/delete_restaurant.php?listId=<?=$listId?>&rname=<?=$hrefRname?>&listName=<?=$listName?>" role="button">Delete</a>
										
										
										<div class = "pin">
											
											<a href = <?php echo $hrefPath ?>>
												<img src= <?php echo $imagePath ?> alt="Test">
												<h4><?php echo $rname[$index]?></h4>
											</a></div>


											<?php
											$index++;
										}
										mysqli_close($con);
										?>

									</div>
								</div>
							</div>
						</ul>
						



					</div>
				</div>
			</body>
			</html>