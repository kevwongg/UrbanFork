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
</head>
<body>
  
  <form method="post" id="form" action="add_restaurant_process.php">
  	<p class="text-center login-title">Add Restaurant</p>
    
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
      <label><b>Name</b></label>
      <input type="text" placeholder="Enter Restaurant Name" name="name" required>

      <label><b>Cuisine</b></label>
      <input type="text" placeholder="Enter Cuisine" name="cuisine" required>

      <label><b>Description</b></label>
      <input type="text" placeholder="Enter Description" name="description" required>

      <label><b>Address</b></label>
      <input type="text" placeholder="Enter Address" name="address" required>

      <label><b>Phone</b></label>
      <input type="text" placeholder="Phone" name="phone" required>

      <button class="btn-primary" type="submit" name="submit">Add</button>
    </div>
    
  </form>

  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script>
    // jQuery("#login").addClass("active");
  </script>
</body>
</html>
