<!DOCTYPE html>
<?php include("database.php");?>
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
          <p id="query">Find all loggedin users who browsed all restaurants</p>
          <p>Select the attributes returned for division</p>
          <label for="email">Email</label>
          <input type="checkbox" name="email" id="email" value="email">
          <label for="country">Country</label>
          <input type="checkbox" name="country" id="country" value="country">
          <label for="username">Username</label>
          <input type="checkbox" name="username" id="username" value="username">
      </fieldset>
      <br>
      <input class="btn btn-primary" type="submit" data-inline="true" value="Submit" name="submit">
    </form>
  </div>

  <?php
    if(isset($_POST['submit'])){        
        $select_string = " u.name";
            
        if(isset($_POST['email'])){
          $select_string = $select_string.", u.email";
        }
        if(isset($_POST['country'])){
          $select_string = $select_string.", u.country";
        }
        if(isset($_POST['username'])){
          $select_string = $select_string.", u.username";
        }

        $sql = "SELECT".$select_string."   FROM loggedinuser u WHERE NOT EXISTS 
        (
          SELECT *
          FROM restaurant r 
          WHERE NOT EXISTS (
                SELECT *
                FROM browses b 
                WHERE b.id = u.id AND r.rname = b.rname AND r.location = b.location
            )
        )";
        $result = mysqli_query($con, $sql) or die(mysqli_error($con));
        echo "<div class = 'row'>";
          while($menu_row = mysqli_fetch_array($result)){
            echo "<div class = 'col-sm-6 text-center menu-item'>";
              echo "<div class = 'text-center name'>";
                  echo $menu_row['name'];
              echo "</div>";
              if(isset($_POST['email'])){
                echo "<div class = 'text-center email'>";
                  echo $menu_row['email'];
                echo "</div>";
              }
              if(isset($_POST['country'])){
                echo "<div class = 'text-center country'>";
                  echo $menu_row['country'];
                echo "</div>";
              }
              if(isset($_POST['username'])){
                echo "<div class = 'text-center username'>";
                  echo $menu_row['username'];
                echo "</div>";
              }
            echo "</div>";
          }
        echo "</div>";
        echo "<br>";
    }
  ?>


  
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script>
    jQuery("#login").addClass("active");
  </script>
</body>
</html>
