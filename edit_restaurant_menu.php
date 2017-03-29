<!DOCTYPE html>

<?php include("header.php");?>
<?php include 'database.php' ;?>
<!-- <?php session_start(); ?> -->
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
  <link href="css/register.css" rel="stylesheet">
  <link href="css/edit_restaurant_menu.css" rel="stylesheet">
</head>
<body>
  
  <?php
    $rname = $_GET['rname'];
    $location = $_GET['location'];

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

  <form method="post" id="form" action="edit_restaurant_menu_process.php">
    <p class="text-center login-title">Edit Restaurant Menu</p>

    <?php if (isset($_SESSION['errors'])): ?>
    <div class="form-errors text-center">
        <?php foreach($_SESSION['errors'] as $error): ?>
            <p><?php echo $error ?></p>
        <?php endforeach; ?>
    </div>
    <?php endif;
    unset($_SESSION['errors']); ?>

    <?php if (isset($_SESSION['success'])): ?>
    <div class="form-success text-center">
        <?php foreach($_SESSION['success'] as $error): ?>
            <p><?php echo $error ?></p>
        <?php endforeach; ?>
    </div>
    <?php endif;
    unset($_SESSION['success']); ?>

    <div class="container">
      <?php echo "<label><b>Restaurant: $rname</b></label>"; ?>
      <br>
      <?php echo "<label><b>Location: $location</b></label>"; ?>
      <br>
      <br>

      <h1>Current Menus:</h1>

      <input type="hidden" value="<?php echo $rname?>" name="name" />
      <input type="hidden" value="<?php echo $location?>" name="address" />

      <?php

      $hrefRname = str_replace(' ', '%20', $rname);
      $hrefLoc = str_replace(' ', '%20', $location);

      $sql="SELECT * FROM menu WHERE rname = '" . $rname . "' AND location = '" . $location . "'"; 
      $result = mysqli_query($con, $sql) or die(mysqli_error($con));
      while($row = mysqli_fetch_array($result)){

        $type = $row['type'];        
        $hrefType = str_replace(' ', '%20', $type);
        
        $edit_menu_address = "edit_menu.php?rname=".$hrefRname."&location=".$hrefLoc."&type=".$hrefType;

        echo "<a class=\"text-center\" href=$edit_menu_address>$type</a>";
        echo "<br>";        
      }

      ?>

      <h1>Add new menu:</h1>
      <label><b>New menu name</b></label>
      <input type="text" placeholder="New menu name" name="new_menu_name" required>

      <button class="btn-primary" type="submit" name="submit">Add</button>

      </div>
    
  </form>

      <!-- <label><b>Cuisine</b></label>
      <input type="text" placeholder="Enter Cuisine" value="<?php echo $cuisine?>" name="cuisine" required>

      <label><b>Description</b></label>
      <input type="text" placeholder="Enter Description" value="<?php echo $description?>" name="description" required>

      <label><b>Phone</b></label>
      <input type="text" placeholder="Phone" value="<?php echo $phone?>" name="phone" required> -->

      
    



  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/edit_restaurant_menu.js"></script>
  <script>
    // jQuery("#login").addClass("active");
  </script>
</body>
</html>
