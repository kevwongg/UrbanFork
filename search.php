<!DOCTYPE html>

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
</head>
<body>
  <?php echo $page_title;?>
  
  	<section class="searchbar">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-sm-offset-3">
					<div class="input-group stylish-input-group">
						<input type="text" class="form-control"  placeholder="Search" >
						<span class="input-group-addon">
							<button type="submit">
								search
								<!-- <span class="glyphicon glyphicon-search"></span>  glyphicon isn't working-->
							</button>  
						</span>
					</div>
				</div>
			</div>
		</div>
	</section>
		
  
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script>
    jQuery("#search").addClass("active");
  </script>
</body>
</html>
