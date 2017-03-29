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
    $type = $_GET['type'];

    // $sql="SELECT * FROM restaurant WHERE rname = '" . $rname . "' AND location = '" . $location . "'"; 
    // $result = mysqli_query($con, $sql) or die(mysqli_error($con));
    // while($row = mysqli_fetch_array($result)){
    //   $location = $row['location'];
    //   $rname = $row['rname'];
    //   $cuisine = $row['cuisine'];
    //   $description = $row['description'];
    //   $phone = $row['phone'];
    // }

    

  ?>

  <p class="text-center login-title">Edit Menu</p>

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
        <?php echo "<label><b>Menu: $type</b></label>"; ?>
        <br>

        <h1>Current Dishes:</h1>

        <input type="hidden" value="<?php echo $rname?>" name="name" />
        <input type="hidden" value="<?php echo $location?>" name="address" />

        <?php

        $hrefRname = str_replace(' ', '%20', $rname);
        $hrefLoc = str_replace(' ', '%20', $location);
        $hrefType = str_replace(' ', '%20', $type);

        $sql="SELECT * FROM contains WHERE rname = '" . $rname . "' AND location = '" . $location . "' AND type = '" . $type . "'"; 
        $result = mysqli_query($con, $sql) or die(mysqli_error($con));
        while($row = mysqli_fetch_array($result)){

          $dishid = $row['dishid'];

          $sql2="SELECT * FROM dishes WHERE dishid = '" . $dishid . "'"; 
          $dishResult = mysqli_query($con, $sql2) or die(mysqli_error($con));
          $dishRow = mysqli_fetch_array($dishResult);


          $dname = $dishRow['dname'];
          $description = $dishRow['description'];
          $price = $dishRow['price'];
          echo "<h4><b>$dname</b></h4>";
          echo "<h5><b>$description</b></h5>";
          echo "<br>";        
        }

        echo "<h1>Add New Dish to Menu (click to add):</h1>";
        $sql="SELECT * FROM dishes WHERE dishid NOT IN (SELECT dishid FROM contains WHERE rname = '" . $rname . "' AND location = '" . $location . "' AND type = '" . $type . "'" . ")";
        $result = mysqli_query($con, $sql) or die(mysqli_error($con));
        while($row = mysqli_fetch_array($result)){
          $dishid = $row['dishid'];
          $dname = $row['dname'];
          $description = $row['description'];
          $price = $row['price'];

          $edit_menu_address = "edit_menu_process.php?rname=".$hrefRname."&location=".$hrefLoc."&type=".$hrefType."&dishid=".$dishid;

          echo "<h4><a class=\"text-center\" onclick=\"myFunction()\" href=$edit_menu_address>$dname</a></h4>";

          echo "<h5><b>$description</b></h5>";

        }

        ?>


        </div>



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
