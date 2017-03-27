<!DOCTYPE html>
<?php 
// session_start();
include("header.php");?>

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
  <link href="css/login.css" rel="stylesheet">
  <link href="css/manage.css" rel="stylesheet">
</head>
<body>
  <div><h1 class="text-center">Divison Query Page</h1></div>

  <div align="center">
    <form  method="post" action="admin_manage.php?go"  id="searchform"> 
      <fieldset data-role="controlgroup" data-type="horizontal">
        <!--legend>Choose as many favorite colors as you'd like:</legend-->
          <p id="query">Find all loggedin users who browsed all restaurants</p>
          <p>Select the attributes returned for division</p>
          <label for="email">Email</label>
          <input type="checkbox" name="email" id="email" value="email">
          <label for="name">Name</label>
          <input type="checkbox" name="name" id="name" value="name">
          <label for="username">Username</label>
          <input type="checkbox" name="username" id="username" value="username">
      </fieldset>
      <br>
      <input class="btn btn-primary" type="submit" data-inline="true" value="Submit">
    </form>
  </div>
  
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script>
    jQuery("#login").addClass("active");
  </script>
</body>
</html>
