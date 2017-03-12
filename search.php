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

	<form method="post" id = "filterButton" action="search.php">
	<div id = "Checkbox_filters">
		<table>
			<tr>
				<td>
					<div id = "filterSection">
						<input type="radio" name="cuisine" value="chinese">Chinese
						<input type="radio" name="cuisine" value="french">French
						<input type="radio" name="cuisine" value="italian">Italian
						<input type="radio" name="cuisine" value="korean">Korean
						<input type="radio" name="cuisine" value="german">German
						<input type="radio" name="cuisine" value="japanese">Japanese<br>
						<button class = "filterbtn" type="submit" name = "applyFilters">Apply Filter</button>
					</div>
				</td>
			</tr>
		</table>
	</div>
	</form>
	
	<?php
		function displayOutput($result){
				while($row = mysqli_fetch_array($result)){
					?>

					<div class = "Output">
						<?php
						echo "<br>";
						$location = $row['location'];
						$rname = $row['rname'];
						
						$fileName = str_replace(' ', '', $location.$rname);
						
						$imagePath = "./img/searchImage/".$fileName.".jpg";
						echo "<br>";
						?>
						<div class = "image">
							<img src= <?php echo $imagePath ?> alt="Test" style="width:304px;height:228px;">
						</div>
						<?php
						echo "<div class='location_output'>{$rname}</div>";
						echo "<div class='rname_output'>{$location}</div>";
						?>
					</div>
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
			if (!empty($_POST['cuisine'])){
				$name = $_POST['cuisine'];
				$sql="SELECT * FROM restaurant WHERE cuisine LIKE '%". $name. "%'";
				$result = mysqli_query($con, $sql) or die(mysqli_error($con));
				
				displayOutput($result);
			}
			else{
				?>
				<script type="text/javascript">
					alert("Please choose one of the filter options")
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
