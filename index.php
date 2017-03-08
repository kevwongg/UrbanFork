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
</head>
<body>
  <?php echo $page_title;?>
  <section class="jumbotron text-center">
    <div class="container">
      <h1 class="jumbotron-heading">UrbanFork</h1>
      <p class="lead text-muted">The place to search for good food!</p>
      <p>
        <a href="register.php" class="btn btn-primary">Sign Up today</a>
        <a href="search.php" class="btn btn-success">Search Restaurants</a>
      </p>
    </div>
  </section>
  <div class="album text-muted">
    <div class="container">
      <div class="row">
        <div class="card">
          <img src="img/chinese.jpg" class="img-responsive" alt="Card image cap">
          <p class="card-text text-center">Chinese</p>
        </div>
        <div class="card">
          <img src="img/french.jpg" class="img-responsive" alt="Card image cap">
          <p class="card-text text-center">French</p>
        </div>
        <div class="card">
          <img src="img/italian.jpg" class="img-responsive" alt="Card image cap">
          <p class="card-text text-center">Italian</p>
        </div>
        <div class="card">
          <img src="img/korean.jpg" class="img-responsive" alt="Card image cap">
          <p class="card-text text-center">Korean</p>
        </div>
        <div class="card">
          <img src="img/german.jpg" class="img-responsive" alt="Card image cap">
          <p class="card-text text-center">German</p>
        </div>
        <div class="card">
          <img src="img/japanese.jpg" class="img-responsive" alt="Card image cap">
          <p class="card-text text-center">Japanese</p>
        </div>
      </div>
    </div>
  </div>
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script>
    jQuery("#home").addClass("active");
  </script>
</body>
</html>
