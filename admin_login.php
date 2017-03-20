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
</head>
<body>
  
  <form method="post" id="form" action="admin_login_process.php">
  	<p class="text-center login-title">Admin Login</p>

  	<?php if (isset($_SESSION['admin_errors'])): ?>
    <div class="form-errors text-center">
        <?php foreach($_SESSION['admin_errors'] as $error): ?>
            <p><?php echo $error ?></p>
        <?php endforeach; ?>
    </div>
    <?php endif;
    unset($_SESSION['admin_errors']); ?>

    <div class="container">
      <label><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>

      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <button class="btn-danger" type="submit" name="submit">Login</button>
    </div>

    </div>
    
  </form>

  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script>
    jQuery("#login").addClass("active");
  </script>
</body>
</html>
