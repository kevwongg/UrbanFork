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
  <link href="css/search.css" rel = "stylesheet">
</head>
<body>
	
	<form  method="post" action="search.php?go"  id="searchform"> 
	<p class="text-center search-title">Search Restaurants</p>  
		<div class="container">
			<input id = "center-bar" class = "center-bar" type="text" placeholder="Search..." name="query" required>
	 
			<button class="btn-primary" type="submit" name="submit">
				<span class="glyphicon glyphicon-search"></span>
			</button>
		
		</div>
	</form>
	<form method="post" id = "filter" action= "search.php">
		<div id = "filterSection">
		<p class = "sectionHead" >Choose Cuisine</p>
			<input type="radio" name="cuisine" value="chinese">  Chinese<br>
			<input type="radio" name="cuisine" value="french">  French<br>
			<input type="radio" name="cuisine" value="italian">  Italian<br>
			<input type="radio" name="cuisine" value="korean">  Korean<br>
			<input type="radio" name="cuisine" value="german">  German<br>
			<input type="radio" name="cuisine" value="japanese">  Japanese<br>
			<button class = "filterbtn" type="submit" name = "applyFilters">Apply Filter</button>
		</div>
	</form>
	
	<form method ="post" id = "options" action = "search.php">
		<div id = "additionalOption">
			<p class = "sectionHead" >Additional Information</p>
			<input type="checkbox" name="checkCuisine" value="cuisine">   Cuisine<br>
			<input type="checkbox" name="checkPhone" value="phone-number">  Phone number<br>
			<input type="checkbox" name="checkDes" value="description">  Description<br>
			
		</div>
	</form>
	

	<?php
	// TODO: Maybe change the code so user can select what should be displayed?
		function displayOutput($result){
				while($row = mysqli_fetch_array($result)){
					
					echo "<div class = 'Output'>";
					
					echo "<br>";
					$location = $row['location'];
					$rname = $row['rname'];
					$cuisine = $row['cuisine'];
					$phone = $row['phone'];
					$des = $row['description'];
					
					
					$fileName = str_replace(' ', '', $location.$rname);
					
					$imagePath = "./img/searchImage/".$fileName.".jpg";
					echo "<br>";
					?>
					
					<div class = "image">
						<img src= <?php echo $imagePath ?> alt="Test" style="width:304px;height:228px;">
					</div>
					
					<?php
					echo "<div class='rname_output'>{$rname}</div>";
					echo "<div class='location_output'>{$location}</div>";
					
					if(isset($_POST['checkCuisine'])){
						echo "<div class='rname_output'>{$cuisine}</div>";
					}	
					if(isset($_POST['checkPhone'])){
						echo "<div class='rname_output'>{$phone}</div>";
					}
						
					if(isset($_POST['checkDes'])){
						echo "<div class='rname_output'>{$des}</div>";
					}
					
					
					
					echo "</div>";
					
					?>
					<?php
				}
			
		}
		
		if(isset($_POST['submit'])){
			if(isset($_GET['go'])){
				$name=$_POST['query'];
			
				$sql="SELECT * FROM restaurant WHERE location LIKE '%" . $name . "%' OR rname LIKE '%" . $name  ."%'"; 
				$result = mysqli_query($con, $sql) or die(mysqli_error($con));
				
				displayOutput($result);
			}
		}
		
		
		// Filters data according to cuisine using radio buttons
		if(isset($_POST['applyFilters'])){
			if (isset($_POST['cuisine'])){
				$name = $_POST['cuisine'];
				$sql="SELECT * FROM restaurant WHERE cuisine LIKE '%". $name. "%'";
				$result = mysqli_query($con, $sql) or die(mysqli_error($con));
				
				displayOutput($result);
			}
			else{
				?>
				<script type="text/javascript">
					alert("Please choose one of the filter options");
				</script>
				<?php
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
