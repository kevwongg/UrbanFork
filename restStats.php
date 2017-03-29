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
		<link href="css/search.css" rel = "stylesheet">
		<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<div class="container-fluid" id="box">
			<div class="container-fluid" id="messagebox">
				<br>
				<div class = "text-center">
					<a href="search.php" class="btn btn-success" id = "back-btn">Back to Search Page</a>
				</div>
			</div>
		</div>
	
	
		<div class = "container">
		<div class="row">
			<div class = "col-md-3">
				<form method="post" action=""  id="expensiveBtn">
					<button class = "btn-nested-aggr center-block" type = "submit" name = "maxRestAvg">
						Most expensive average
					</button>
				</form>
			</div>
			
			<div class = "col-md-3">
				<form method="post" action=""  id="cheapBtn">
					<button class = "btn-nested-aggr center-block" type = "submit" name = "minRestAvg">
						Cheapest average
					</button>
				</form>
			</div>
			
			<div class = "col-md-3">
				<form method="post" action="">
					<button class = "btn-nested-aggr center-block" type = "submit" name = "maxRestSum">
						Most expensive sum
					</button>
				</form>
			</div>
			
			<div class = "col-md-3">
				<form method="post" action="">
					<button class = "btn-nested-aggr center-block" type = "submit" name = "minRestSum">
						Cheapest sum
					</button>
				</form>
			</div>
		</div>
		
		<div class="row">
			<div class = "col-md-3">
				<form method="post" action="">
					<button class = "btn-nested-aggr center-block" type = "submit" name = "maxRestCount">
						Most dishes
					</button>
				</form>
			</div>
			
			<div class = "col-md-3">
				<form method="post" action="">
					<button class = "btn-nested-aggr center-block" type = "submit" name = "minRestCount">
						Least dishes
					</button>
				</form>
			</div>
			
			<div class = "col-md-3">
				<form method="post" action="">
					<button class = "btn-nested-aggr center-block" type = "submit" name = "maxmaxRestDish">
						Most expensive dish
					</button>
				</form>
			</div>
			
			<div class = "col-md-3">
				<form method="post" action="">
					<button class = "btn-nested-aggr center-block" type = "submit" name = "maxminRestDish">
						Cheapest of all most expensive
					</button>
				</form>
			</div>
		</div>
		
	<div class="row">
		<div class="col-md-3 col-md-offset-3">
			<form method="post" action="">
				<button class = "btn-nested-aggr center-block" type = "submit" name = "minmaxRestDish">
					Most expensive of all cheapest
				</button>
			</form>
		</div>
		<div class="col-md-3">
			<form method="post" action="">
				<button class = "btn-nested-aggr center-block" type = "submit" name = "minminRestDish">
					Cheapest dish
				</button>
			</form>
		</div>
	</div>


	<?php
		function displayOutput($result){
				while($row = mysqli_fetch_array($result)){
					echo "<div class = 'Output'>";
					
					echo "<br>";
					
					$row = (array_unique($row, SORT_STRING));
					
					$rname = $row[0];
					$location = $row[1];
					
					$fileName = str_replace(' ', '', $location.$rname);
					
					$hrefRname = str_replace(' ', '%20', $rname);
					$hrefLoc = str_replace(' ', '%20', $location);
					
					$hrefPath = "http://localhost/Urbanfork/restaurant.php?rname=".$hrefRname."&location=".$hrefLoc;
					
					$imagePath = "./img/searchImage/".$fileName.".jpg";
					echo "<br>";
					?>
					
					
					<div class = "pin">
						<div class = "image">
							<a href = <?php echo $hrefPath ?>>
								<img src= <?php echo $imagePath ?> alt="Test" style="width:304px;height:228px;">
							</a>
						</div>
						
						<div class = "row">
							<div class = "col text_output">
								<p>
									<?php foreach($row as $value){
										echo $value;
										echo "<br>";
										echo "<br>";
										} ?>
								</p>
							</div>
						</div>
					
					</div>
				
					
					<?php
					echo "</div>";
				}
		}
		
		
		
		function displayNestedAggr($result, $msg){
			while($row = mysqli_fetch_array($result)){
				$rname = $row[0];
				$loc = $row[1];
				$val = round($row[2],2);					
				$hrefRname = str_replace(' ', '%20', $rname);
				$hrefLoc = str_replace(' ', '%20', $loc);
				$hrefPath = "http://localhost/Urbanfork/restaurant.php?rname=".$hrefRname."&location=".$hrefLoc;
					
				?>
					<div class="container">
						<div class="row">
							<div class = "nested-aggr-output">
								<a href = <?php echo $hrefPath ?>>
									<?php echo $rname ?>
								</a>
								<br>
								<?php echo $loc ?>
								<br>
								<?php echo $msg.$val ?>
							</div>
						</div>
					</div>
				
				<?php
			}
		}
		
		function queryCreator($aggr1, $aggr2){
			$sql = "SELECT temp.rname, temp.location, temp.avgprice
					FROM (SELECT r.rname, r.location, ".$aggr1."(d.price) AS avgprice
						  FROM restaurant r, contains c, dishes d
						  WHERE r.location = c.location AND r.rname = c.rname AND c.dishid = d.dishid
						  GROUP BY r.rname, r.location) as temp
					 WHERE temp.avgprice = (SELECT ".$aggr2."(t1.avgprice) FROM
												(SELECT r.rname, r.location,".$aggr1. "(d.price) AS avgprice
												  FROM restaurant r, contains c, dishes d
												  WHERE r.location = c.location AND r.rname = c.rname AND c.dishid = d.dishid
												  GROUP BY r.rname, r.location) as t1)";
			
			return $sql;
		}
		
		if(isset($_POST['maxRestAvg'])){
			$sql = queryCreator("AVG", "MAX");						
			$result = mysqli_query($con, $sql) or die(mysqli_error($con));
			displayNestedAggr($result, "Average price of restaurant: ");
		}
		
		if(isset($_POST['minRestAvg'])){
			$sql = queryCreator("AVG", "MIN");					
			$result = mysqli_query($con, $sql) or die(mysqli_error($con));
			displayNestedAggr($result, "Average price of restaurant: ");
		}
		
		if(isset($_POST['maxRestSum'])){
			$sql = queryCreator("SUM", "MAX");
			$result = mysqli_query($con, $sql) or die(mysqli_error($con));
			displayNestedAggr($result, "Sum of all dish prices: ");
		}
		
		if(isset($_POST['minRestSum'])){
			$sql = queryCreator("SUM", "MIN");
			$result = mysqli_query($con, $sql) or die(mysqli_error($con));
			displayNestedAggr($result, "Sum of all dish prices: ");
		}
		
		if(isset($_POST['maxRestCount'])){
			$sql = queryCreator("COUNT", "MAX");						
			$result = mysqli_query($con, $sql) or die(mysqli_error($con));
			displayNestedAggr($result, "Number of dishes: ");
		}
		
		if(isset($_POST['minRestCount'])){
			$sql = queryCreator("COUNT", "MIN");					
			$result = mysqli_query($con, $sql) or die(mysqli_error($con));
			displayNestedAggr($result, "Number of dishes: ");
		}
		
		if(isset($_POST['maxmaxRestDish'])){
			$sql = queryCreator("MAX", "MAX");
			$result = mysqli_query($con, $sql) or die(mysqli_error($con));
			displayNestedAggr($result, "Most expensive dish: ");
		}
		
		if(isset($_POST['maxminRestDish'])){
			$sql = queryCreator("MAX", "MIN");
			$result = mysqli_query($con, $sql) or die(mysqli_error($con));
			displayNestedAggr($result, "Cheapest of all most expensive dishes: ");
		}
		
		if(isset($_POST['minmaxRestDish'])){
			$sql = queryCreator("MIN", "MAX");
			$result = mysqli_query($con, $sql) or die(mysqli_error($con));
			displayNestedAggr($result, "Most expensive of all cheapest dishes: ");
		}
		
		if(isset($_POST['minminRestDish'])){
			$sql = queryCreator("MIN", "MIN");
			$result = mysqli_query($con, $sql) or die(mysqli_error($con));
			displayNestedAggr($result, "Cheapest dish: ");
		}
	?>
		
		
		
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.js"></script>
	</body>
</html>