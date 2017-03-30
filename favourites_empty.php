	<!DOCTYPE html>
	<?php include("header.php");?>
	<?php include("database.php");?>
	<?php include 'ChromePhp.php';?>

	<?php
	if (!isset($_SESSION['username'])) {
		header("location:login.php");
	}

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
		<h2>Hey there <?php echo $_SESSION['name'];?>!</h2>
		<p>Listed here are favourites lists that are empty.</p>
		<p><a class="btn btn-primary btn-lg" href="http://localhost/urbanfork/search.php" role="button">Search for Favourites</a>
		<a class="btn btn-primary btn-lg" href="http://localhost/urbanfork/favourites.php" role="button">Back to Favourites Page</a></p>
		</div>
		</div>

	<div class="container">   
	      <div id="wrapper">
	    	<div id ="columns">
	    			<?php        
	    			$userId = $_SESSION['userId']; 
	    			
	    			$query = "SELECT lf.listid, lf.listname FROM listoffavourites lf WHERE lf.id = $userId AND listid NOT IN (SELECT m.listid FROM maintains m WHERE m.id = $userId)";
	    				
	    				$result = mysqli_query($con, $query) or die("Error");

	    				while($row = mysqli_fetch_array($result)){
	    					$listName = $row['listname'];
	    					$listid = $row['listid'];
	    				
	    				?>
	    				<div> 
	    				
	    				<a class="btn btn-primary btn-md" href="http://localhost/urbanfork/delete_list.php?listId=<?=$listid?>&listName=<?=$listName?>" role="button">Delete</a>
	    				<a href="favourites_list.php?listId=<?=$listid?>&listName=<?=$listName?>"> <div class="pin">
	    				<img src= "./img/searchImage/empty.jpg"/>
	    				<h4><?php echo $listName?></h4>
	    				</div>
	    				</div>
	    				<div>
	    				<?php 
	    			}
	    			?>
	    			</div>


	    				</div>
	    				</div>
	    				</div>

	</body>