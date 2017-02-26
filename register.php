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
  <link href="css/register.css" rel="stylesheet">
</head>
<body>
  <?php echo $page_title;?>
  
  <form id="form" action="action_page.php">
  	<p class="text-center login-title">Register</p>
    <div class="container">
      <label><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <label><b>Confirm Password</b></label>
      <input type="password" placeholder="Confirm Password" name="psw" required>

      <label><b>Country</b></label>
      <input type="text" placeholder="Country" name="country" required>

      <button class="btn-primary" type="submit">Register</button>
    </div>

    <div class="container">
      <button type="button" class="cancelbtn btn-danger">Cancel</button>
    <br>
    </div>
    
  </form>

  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script>
    jQuery("#login").addClass("active");
  </script>
</body>
</html>
