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

<?php $listId = $_GET['listId']?> 
<form method="post" id="form" action="delete_process.php?listId=<?=$listId?>&listName=<?=$listName?>&userId=<?=$userId?>">
<p class="text-center login-title">Delete Favourited Restaurant</p>

<?php if (isset($_SESSION['errors'])): ?>
    <div class="form-errors text-center">
        <?php foreach($_SESSION['errors'] as $error): ?>
            <p><?php echo $error ?></p>
        <?php endforeach; ?>
    </div>
    <?php endif;
    unset($_SESSION['errors']); ?>

     <div class="container">
      <label><b>Please enter the restaurant you want to delete</b></label>
      <input type="text" placeholder="Enter restaurant to delete" name="rname" required>

      <button class="btn-primary" type="delete" name="delete">Delete</button>
    </div>
    </form>

  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.js"></script>
</body>
</html>

