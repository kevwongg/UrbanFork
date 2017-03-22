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
  <link href="css/restaurant.css" rel="stylesheet">
</head>
<body>
	
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
			
			// echo "<h1 class=\"jumbotron-heading\">$rname</h1>";
			// echo "<br>";
			// echo $location;
			// echo "<br>";
			
			// echo "<br>";
			// echo $cuisine;
			// echo "<br>";
			// echo $description;
			// echo "<br>";
			// echo $phone;
		}

	?>


	<div class="container-fluid" id="box">
        <div class="container-fluid" id="messagebox">
            <div class="text-center" id="restaurant-name"><h1><?php echo $rname?></h1></div>
            <div class="text-center" id="description"><?php echo $description?></div>
                <br>
			  <div class="text-center">Cuisine: <?php echo $cuisine?> | Location: <?php echo $location?> | Phone #: <?php echo $phone?></div>
        </div>
    </div>
	<!--div class="container-fluid">
		<div class="row">
			<div class="col-md-12">

				</br>
				<dl>
					<dt>
						Cuisine
					</dt>
					<dd>
						<?php echo $cuisine ?>
					</dd>
					<dt>
						Description
					</dt>
					<dd>
						<?php echo $description ?>
					</dd>
				</dl> 
								

				<br/>
				<address>
					 <strong><?php echo $rname ?></strong>
					 <br/>
					 <?php echo $location ?>
					 <br />
					 <abbr title="Phone">Phone:</abbr> <?php echo $phone ?>
				</address>

			</div>
		</div>
	</div-->
	
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.js"></script>  
</body>
</html>
