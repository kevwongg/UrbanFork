<!DOCTYPE html>
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
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">UrbanFork</a>
        </div>
        <ul class="nav navbar-nav pull-right">
          <li class="active"><a href="#">Home</a></li>
          <li><a class="pull-center" href="login.php">Login/Register</a></li>
          <li><a class="pull-center" href="#">Search Restaurants</a></li>
          <li><a class="pull-center" href="#">Favourites</a></li>
        </ul>
      </div>
    </nav>

	<form action="action_page.php">
	  <div class="imgcontainer">
	    <img src="img_avatar2.png" alt="Avatar" class="avatar">
	  </div>

	  <div class="container">
	    <label><b>Username</b></label>
	    <input type="text" placeholder="Enter Username" name="uname" required>

	    <label><b>Password</b></label>
	    <input type="password" placeholder="Enter Password" name="psw" required>
	        
	    <button type="submit">Login</button>
	    <input type="checkbox" checked="checked"> Remember me
	  </div>

	  <div class="container" style="background-color:#f1f1f1">
	    <button type="button" class="cancelbtn">Cancel</button>
	    <span class="psw">Forgot <a href="#">password?</a></span>
	  </div>
	</form>
    <script src="js/bootstrap.js"></script>
  </body>
</html>