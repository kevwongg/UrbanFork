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

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<h1>
					<?php echo $rname ?>
				</h1>
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
								
				<div class="carousel slide" id="carousel-207906">
					<ol class="carousel-indicators">
						<li data-slide-to="0" data-target="#carousel-207906" class="active">
						</li>
						<li data-slide-to="1" data-target="#carousel-207906">
						</li>
					</ol>
					<div class="carousel-inner">
						<div class="item active">
							<img class="img-responsive center-block" alt="Carousel Bootstrap First" src="img/chinese.jpg" />
							<div class="carousel-caption">
								<h4>
									First Thumbnail label
								</h4>
								<p>
									Some text 1
								</p>
							</div>
						</div>
						<div class="item">
							<img class="img-responsive center-block" alt="Carousel Bootstrap Second" src="img/french.jpg" />
							<div class="carousel-caption">
								<h4>
									Second Thumbnail label
								</h4>
								<p>
									Some text 2
								</p>
							</div>
						</div>
					</div>
					<a class="left carousel-control" href="#carousel-207906" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
					</a>
					<a class="right carousel-control" href="#carousel-207906" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
					</a>
				</div>

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
	</div>
	
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.js"></script>  
</body>
</html>
