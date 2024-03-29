<!DOCTYPE html>
<?php include("header.php");?>
<?php include("database.php");?>
<?php include 'ChromePhp.php';?>
<?php ChromePhp::log('Hello console!');?>
<?php error_reporting(0);?>


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
		<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="favourite.js"></script>					
	</head>

	<body>		

	<body>
		
		
		<?php
			$rname = $_GET['rname'];
			$_SESSION["rname"] = $rname;
			$location = $_GET['location'];
			$_SESSION['location'] = $location;
			if(isset($_SESSION['userId'])){
				$userId = $_SESSION['userId'];
				$sql1 = "SELECT DISTINCT lf.listid, lf.listname FROM listoffavourites lf WHERE lf.id = $userId"; 

				$result1 = mysqli_query($con,$sql1) or die(mysqli_error($con));
				
				 while($row1 = mysqli_fetch_array($result1)){
					$listfav['id'][] = $row1['listid'];
					$listfav['name'][] = $row1['listname'];
				}
			}

					

						
		?>
		<?php

			$hrefRname = str_replace(' ', '%20', $rname);
			$hrefLoc = str_replace(' ', '%20', $location);
					
			$statsPath = "stats.php?rname=".$hrefRname."&location=".$hrefLoc;
			
			
			$sql="SELECT * FROM restaurant WHERE rname = '" . $rname . "' AND location = '" . $location . "'";
			$result = mysqli_query($con, $sql) or die(mysqli_error($con));
			while($row = mysqli_fetch_array($result)){
				$location = $row['location'];
				$rname = $row['rname'];
				$cuisine = $row['cuisine'];
				$description = $row['description'];
				$phone = $row['phone'];
			}

			
			
			if(isset($_SESSION['userId'])){	
				$sql = "SELECT listid from listoffavourites lf WHERE lf.id = $userId";	
				$result = mysqli_query($con, $sql) or die(mysqli_error($con)); 
				
				while($row = mysqli_fetch_array($result)){
					$listFavId['id'][] = $row['listid'];
				}			
			}

			
			
			if(isset($_SESSION['username'])){
				$sql = "INSERT INTO browses(id, location, rname)
						VALUES(".$_SESSION['userId'].", '".$location."' , '".$rname."')
						ON DUPLICATE KEY UPDATE location = '".$location."'";
				$result = mysqli_query($con, $sql) or die(mysqli_error($con));
			}
			

		?>
		<div class="container-fluid" id="box">
			<div class="container-fluid" id="messagebox">
				<div class="text-center" id="restaurant-name"><h1><?php echo $rname?></h1></div>
				<div class="text-center" id="description"><?php echo $description?></div>
				<br>
				<div class="text-center">Cuisine: <?php echo $cuisine?> | Location: <?php echo $location?> | Phone #: <?php echo $phone?></div>
				<ul class="list-inline" align="center">
				
					<li>
						
					<?php if (isset($_SESSION['admin_userid'])) { 
						$hrefRname = str_replace(' ', '%20', $rname);
						$hrefLoc = str_replace(' ', '%20', $location);
						$edit_restaurant_address = "edit_restaurant.php?rname=".$hrefRname."&location=".$hrefLoc;
						?>
						<a href=<?php echo $edit_restaurant_address ?> title="Edit" class="btn-social btn-outline"><i class="fa fa-pencil"></i></a>
						
					</li>
					<?php }?>
					<li>


					<a href=<?php echo $statsPath ?>  title="Statistics" class="btn-social btn-outline"><i class="fa fa-bar-chart"></i></a>


					</li>
					
				</ul>
			</div>
		</div>
		<div class="text-center" id="menu"><h2>Menu</h2></div>

		<?php
			$hrefRname = str_replace(' ', '%20', $rname);
			$hrefLoc = str_replace(' ', '%20', $location);
			$restaurant_address = "restaurant.php?rname=".$hrefRname."&location=".$hrefLoc;
		?>
		<div align="center">
			<form  method="post" action=<?php echo $restaurant_address ?>  id="searchform">
				<fieldset data-role="controlgroup" data-type="horizontal">
					<p>Select the attributes returned for the menu</p>
					<label for="price">Price</label>
					<input type="checkbox" name="price" id="price" value="price">
					<label for="description">Description</label>
					<input type="checkbox" name="description" id="description" value="description">
				</fieldset>
				<br>
				<input class="btn btn-primary" type="submit" data-inline="true" value="Show menu" name="submit">
			</form>
		</div>

		
		<?php if (isset($_SESSION['admin_userid'])) { 
			$hrefRname = str_replace(' ', '%20', $rname);
			$hrefLoc = str_replace(' ', '%20', $location);
			$edit_restaurant_menu_address = "edit_restaurant_menu.php?rname=".$hrefRname."&location=".$hrefLoc;
		?>

		<br>
		<div class="text-center">
			<a class="text-center" href=<?php echo $edit_restaurant_menu_address ?>>Edit Menu</a>
			<br><br>
		</div>

		<?php }?>

		<?php
		if(isset($_POST['submit'])){   
			$sql="SELECT * FROM menu WHERE rname = '" . $_SESSION['rname'] . "' AND location = '" . $_SESSION['location'] . "'ORDER BY type DESC";
			$result = mysqli_query($con, $sql) or die(mysqli_error($con));
			while($row = mysqli_fetch_array($result)){
				$type = $row['type'];
				echo "<div class = 'menu-type text-center'>";
					echo $type;
				echo "</div>";
				echo "<br>";
				$menu_query="SELECT * FROM contains JOIN dishes on dishes.dishid = contains.dishid WHERE rname = '" . $rname . "' AND location = '" . $location . "' AND type = '" . $type ."'";
				$menu_result = mysqli_query($con, $menu_query) or die(mysqli_error($con));
				echo "<div class = 'row'>";
					while($menu_row = mysqli_fetch_array($menu_result)){
						echo "<div class = 'col-sm-6 text-center menu-item'>";
							echo "<div class = 'text-center item-title'>";
								echo $menu_row['dname'] ;
								if(isset($_POST['price'])){
									echo '... ' . $menu_row['price'];
								}
							echo "</div>";
							if(isset($_POST['description'])){
								echo "<div class = 'text-center item-description'>";
									echo $menu_row['description'];
								echo "</div>";
							}
						echo "</div>";
					}
				echo "</div>";
				echo "<br>";
			}
		}
		?>


<?php        
	
    if(isset($_GET["id"])){
        $var = $_GET["id"];

		saveFavourite("9628332");
    }

    function saveFavourite($listId){

    		$rname = $_GET['rname'];
			$location = $_GET['location'];

			 $action = $_GET['checkBoxValue'];


			$userId = $_SESSION['userId'];

			 if($action == 'checked'){
				$sql = "INSERT INTO maintains(listid, id, location, rname) VALUES ($listId, $userId,'" . $location . "','" . $rname ."')";
			 }
			 else {
				$sql = "DELETE FROM maintains WHERE  listid = $listId AND id = $userId AND location ='" . $location . "' AND rname = '".$rname ."'";	
			 }
				 		
				$result = mysqli_query($con, $sql) or die(mysqli_error($con));

	}
?>

		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.js"></script>
	</body>
</html>