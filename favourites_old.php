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
  <link href="css/search.css" rel="stylesheet">
</head>
<body>

<?php echo $page_title;?>

<form method="post" action="favourites.php?go" id="favouritesform">
<p class="text-center">Please log in to see your favourites</p>
<input style="width: 300px; text-align: center; padding: 20 px; cursor: pointer; font-weight: bold; font-size: 150%; background: #ADD8E6;" type="button" value="Log in"
onclick="window.location.href='http://localhost/urbanfork/login.php'"/>
</form>

</?php 
// Connect to database:
$connection = connectToDatabase(); 



</body>
</html>
	
