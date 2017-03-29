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
<?php $listName = $_GET['listName']?>
<?php $userId = $_SESSION['userId'];?>
<!-- echo($userId);
echo($listName);?> -->

<form method="post" id="form" action="delete_list_process.php?listId=<?=$listId?>&listName=<?=$listName?>&userId=<?=$userId?>">
<p class="text-center login-title">Delete Favourites List</p>

<?php if (isset($_SESSION['errors'])): ?>
    <div class="form-errors text-center">
        <?php foreach($_SESSION['errors'] as $error): ?>
            <p><?php echo $error ?></p>
        <?php endforeach; ?>
    </div>
    <?php endif;
    unset($_SESSION['errors']); ?> 



     <div class="container">
      <label><b><font size="5">Please confirm that the list you want to delete is: <?php echo $listName?></font></b></label>
      <!-- <input type="text" placeholder="Enter list to delete" name="listName" required> -->
      <p>
      <button style = "height:50px;width:200px" class="btn btn-primary btn-lg" type="delete" name="delete">Delete</button>
      </p>
      <a style ="height:50px;width:200px" class="btn btn-primary btn-lg" href="http://localhost/urbanfork/favourites.php" type="cancel" name="cancel">Cancel</a>
      
    </div>
    </form>

  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.js"></script>
</body>
</html>

