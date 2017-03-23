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
		<link href="css/stats.css" rel="stylesheet">
		<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		
		<?php
			$rname = $_GET['rname'];
			// echo $rname;
			$location = $_GET['location'];
			// echo $location;
			
			$hrefRname = str_replace(' ', '%20', $rname);
			$hrefLoc = str_replace(' ', '%20', $location);
					
			$restPath = "restaurant.php?rname=".$hrefRname."&location=".$hrefLoc;
			
			$sql="SELECT * FROM restaurant WHERE rname = '" . $rname . "' AND location = '" . $location . "'";
			$result = mysqli_query($con, $sql) or die(mysqli_error($con));
			while($row = mysqli_fetch_array($result)){
				$location = $row['location'];
				$rname = $row['rname'];
				$cuisine = $row['cuisine'];
				$description = $row['description'];
				$phone = $row['phone'];
			}
		?>
		<div class="container-fluid" id="box">
			<div class="container-fluid" id="messagebox">
				<div class="text-center" id="restaurant-name"><h1><?php echo $rname?></h1></div>
				<br>
				<div class = "text-center">
					<a href=<?php echo $restPath ?> class="btn btn-success" id = "back-btn">Back to Restaurant Page</a>
				</div>
			</div>
		</div>
		<div class="text-center" id="menu"><h2><?php echo $rname ?> Statistics</h2></div>
		
		
		
		<div class = "container-fluid">
			<div class = "row">
				<div class = "col-md-3">
					<form  method="post" action=""  id="maxBtn">
						<button class = "btn-aggr" type = "submit" name = "maxDish">
							Most expensive dish on menu
						</button>	
					</form>
				</div>
				<div class = "col-md-3">
					<form  method="post" action=""  id="minBtn">
						<button class = "btn-aggr" type = "submit" name = "minDish">
							Cheapest dish on menu
						</button>	
					</form>
				</div>
				<div class = "col-md-3">
					<form  method="post" action=""  id="numBtn">
						<button class = "btn-aggr" type = "submit" name = "numDish">
							Number of dishes on menu
						</button>	
					</form>
				</div>
				<div class ="col-md-3">
					<form  method="post" action=""  id="avgBtn">
						<button class = "btn-aggr" type = "submit" name = "avgPrice">
							Average price of dishes on menu
						</button>
					</form>
				</div>
			</div>
		</div>
			
		
		<?php
			function displayOutput($result){
				while($row = mysqli_fetch_array($result)){
					$value = round($row[0], 2);
					?>
						<div class="container">
							<div class="row">
								<div id = "aggr-output">
									<?php echo $value ?>
								</div>
							</div>
						</div>
					
					<?php
				}
			}
			
			if(isset($_POST['maxDish'])){
				$sql="SELECT MAX(d.price)
					  FROM contains c, dishes d
					  WHERE c.dishid = d.dishid AND c.location = '".$location."' AND c.rname = '".$rname."'";
				$result = mysqli_query($con, $sql) or die(mysqli_error($con));
				displayOutput($result);
			}
			
			if(isset($_POST['minDish'])){
				$sql="SELECT MIN(d.price)
					  FROM contains c, dishes d
					  WHERE c.dishid = d.dishid AND c.location = '".$location."' AND c.rname = '".$rname."'";
				$result = mysqli_query($con, $sql) or die(mysqli_error($con));
				displayOutput($result);
			}
			
			if(isset($_POST['numDish'])){
				$sql="SELECT COUNT(d.dishid)
					  FROM contains c, dishes d
					  WHERE c.dishid = d.dishid AND c.location = '".$location."' AND c.rname = '".$rname."'";
				$result = mysqli_query($con, $sql) or die(mysqli_error($con));
				displayOutput($result);
			}
			
			if(isset($_POST['avgPrice'])){
				$sql="SELECT AVG(d.price)
					  FROM contains c, dishes d
					  WHERE c.dishid = d.dishid AND c.location = '".$location."' AND c.rname = '".$rname."'";
				$result = mysqli_query($con, $sql) or die(mysqli_error($con));
				displayOutput($result);
			}
		
		?>
		
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.js"></script>
	</body>
</html>