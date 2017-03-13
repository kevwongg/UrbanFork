<!DOCTYPE html>

<?php include("header.php");?>
<?php include 'database.php' ;?>
<?php session_start(); ?>
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
  <?php echo $page_title;?>
  
  <form method="post" id="form" action="register_user.php">
  	<p class="text-center login-title">Register</p>
    
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
      <input type="text" placeholder="Enter Name" name="name" required>

      <label><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>

      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <label><b>Confirm Password</b></label>
      <input type="password" placeholder="Confirm Password" name="psw2" required>

      <label><b>Country</b></label>
      <input type="text" placeholder="Country" name="country" required>

      <button class="btn-primary" type="submit" name="submit">Register</button>
    </div>
    
  </form>

  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script>
    jQuery("#login").addClass("active");
  </script>
</body>
</html>
