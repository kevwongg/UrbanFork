<!DOCTYPE html> 
<?php 
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

<form method="post" id="form" action="add_list_process.php?listId=<?=$listId?>&listName=<?=$listName?>&userId=<?=$userId?>">
<p class="text-center login-title">Add Favourites List</p>

<?php if (isset($_SESSION['errors'])): ?>
    <div class="form-errors text-center">
        <?php foreach($_SESSION['errors'] as $error): ?>
            <p><?php echo $error ?></p>
        <?php endforeach; ?>
    </div>
    <?php endif;
    unset($_SESSION['errors']); ?>

     <div class="container">
      <label><b>Please enter a list name</b></label>
      <input type="text" placeholder="Enter list name" name="listname" required>

      <button class="btn-primary" type="submit" name="submit">Submit</button>
    </div>
    </form>

  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.js"></script>
</body>
</html>

