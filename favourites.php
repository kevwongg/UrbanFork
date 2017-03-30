	<!DOCTYPE html>
	<?php include("header.php");?>
	<?php include("database.php");?>
	<?php include 'ChromePhp.php';?>

	<?php ChromePhp::log('Hello console!');?>

	<?php
	if (!isset($_SESSION['username'])) {
		header("location:login.php");
	}

	$userId = $_SESSION['userId'];
	
	$name = $_SESSION['name'];



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
				<h2>Hey there <?php echo $name;?>!</h2> 
				<p>All of your favourites lists are below. Please note that if your list is empty, it will not show up here. Please add a restaurant to that list first! </p>
				<p><a class="btn btn-primary btn-lg" href="http://localhost/urbanfork/search.php" role="button">Find More Favourites</a>
				<a class="btn btn-primary btn-lg" href="http://localhost/urbanfork/add_list.php" role="button">Add Favourites List</a>
				<!-- <a class="btn btn-primary btn-lg" href="http://localhost/urbanfork/delete_list.php?listId=<?=$listid?>&listName=<?=$listName?>" role="button">Delete Favourites List</a> -->
				<a class="btn btn-primary btn-lg" href="http://localhost/urbanfork/favourites_empty.php" role="button">See Empty Lists</a>

				</p>
			</div>          

		</div>

	    		<div class="container">   
	      <div id="wrapper">
	    	<div id ="columns">
	    			<?php        
	    			$userId = $_SESSION['userId'];        
	    			// $query = "SELECT DISTINCT lf.listid,  lf.listname, m.rname, m.location FROM listoffavourites lf INNER JOIN maintains m ON lf.listid = m.listid AND m.id = $userId GROUP BY lf.listid";

	    			$query = "SELECT DISTINCT lf.listid,  lf.listname, m.rname, m.location FROM listoffavourites lf INNER JOIN maintains m ON lf.listid = m.listid AND lf.id = $userId GROUP BY lf.listid";
	    			

	    			


	    			$result = mysqli_query($con, $query) or die("Error");

	    			while($row = mysqli_fetch_array($result)) {
	    				$listName = $row['listname'];
	    				$listid = $row['listid'];
	    				$rname = $row['rname'];
	    				$location = $row['location'];

	    				


							$fileName = str_replace(' ', '', $location.$rname);

	    				$imagePath = "./img/searchImage/".$fileName.".jpg";
	    				//chromephp::log($listName);
	    				
	    				?>     

	    				
	    				
	    				<div>
	    				<a class="btn btn-primary btn-sm" href="http://localhost/urbanfork/delete_list.php?listId=<?=$listid?>&listName=<?=$listName?>" role="button">Delete</a>
	    					<a href="favourites_list.php?listId=<?=$listid?>&listName=<?=$listName?>"> <div class="pin">
	    					
	    					
	    						<img src= <?php echo $imagePath ?> alt="Test"/>  <!-- This picture should be the picture of the first reataurant in the list--> 
	    						<h4><?php echo $listName?></h4>
	    					</div></a>
	    					</div>
	    					<div>

	    				<?php
	    					}
	    				?>

	    		</div>
	    		</div>
	    		</div>	    		

	    		<?php
	    		mysqli_close($con); 
	    		?>
</div>

	    </body>

	    </html>

