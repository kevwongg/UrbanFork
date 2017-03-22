	<!DOCTYPE html>
	<?php include("header.php");?>
	<?php include("database.php");?>

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
				<h2>Hey there <? echo $_SESSION['name'];?>!</h2> 
				<p>All of your favourited restaurants are listed below. </p>
				<p><a class="btn btn-primary btn-lg" href="http://localhost/urbanfork/search.php" role="button">Find More Favourites</a>
				</p>
			</div>          

		</div>

	    		<div class="container">   
	      <div id="wrapper">
	    	<div id ="columns">
	    			<?php        
	    			$userId = $_SESSION['userId'];        
	    			$query = "SELECT DISTINCT lf.listid,  lf.listname FROM listoffavourites lf INNER JOIN maintains m ON lf.listid = m.listid AND m.id = $userId";


	    			$result = mysqli_query($con, $query) or die("Error");

	    			while($row = mysqli_fetch_array($result)) {
	    				$listName = $row['listname'];
	    				$listid = $row['listid'];
	    				?>     

	    				<div>
	    					<a href="favourites_list.php?listId=<?=$listid?>&listName=<?=$listName?>"> <div class="pin">
	    						<img src= "img/italian.jpg"/>  <!-- This picture should be the picture of the first reataurant in the list--> 
	    						<h4><? echo $listName?></h4>
	    					</div></a>
	    					</div>
	    					<div>
	    				<?php
	    					}
	    				?>
	    		</div>
	    		</div>
	    		</div>	    		

	    		<!--<?php 
	    		// JUST A NOTE, please delete later
	    			function deleteList($listId){
	    				$query = "DELETE FROM listoffavourites WHERE listid = $listId";

	    			}
	    		?>-->

	    		<?php
	    		mysqli_close($con); 
	    		?>
</div>
	    </body>

	    </html>

