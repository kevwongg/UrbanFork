<!DOCTYPE html>

<?php include("database.php");?>
<?php include("header.php");?>

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
	
	<form  method="post" action="search.php?go"  id="searchform"> 
	<p class="text-center search-title">Search Restaurants</p>  
		<div class="container">
			<input class = "center-bar" type="text" placeholder="Search..." name="query" required>
	 
			<button class="btn-primary" type="submit" name="submit">
				<span class="glyphicon glyphicon-search"></span>
			</button>
		
		</div>
	</form> 
	
	<?php
		if(isset($_POST['submit'])){
			if(isset($_GET['go'])){ 
				$name=$_POST['query']; 
			
				$sql="SELECT * FROM restaurant WHERE location LIKE '%" . $name . "%' OR rname LIKE '%" . $name  ."%'"; 
				$result = mysqli_query($con, $sql) or die(mysqli_error());
				while($row = mysqli_fetch_array($result)){
					echo "<br>";
					$location = $row['location'];
					$rname = $row['rname'];
					
					echo "<br>";
					echo $location;
					echo "<br>";
					echo $rname;
				}
			}
		}
		?>	
	
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.js"></script>  
  <script>
    jQuery("#search").addClass("active");
  </script>
</body>
</html>
