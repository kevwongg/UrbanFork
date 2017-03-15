<!DOCTYPE html>
<?php include("header.php");?>
<?php include("database.php");?>

<html>
  <head> 

    <meta charset="utf-8">
    <title>UrbanFork</title>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 50%;
      margin: auto;
      }
      </style>
      </head>
      <body>

      <div class="container">
      <br>

    <div id="carousel_id" class="carousel slide" data-ride="carousel" data-interval="3000">
        <!-- Indicatiors --> 
        <ol class="carousel-indicators">
        <li data-target="carousel_id" data-slide-to="0" class="active"></li>
        <li data-target="carousel_id" data-slide-to="1"></li>
        <li data-target="carousel_id" data-slide-to="2"></li>
    </ol>

    <div class="carousel-inner">
    <div class="item active">
    <img src="img/salmon.jpg" alt="Salmon">
    <div class="carousel-caption">
    <h3>Seafood</h3>
    </div>
    </div>

    <div class="item">
    <img src="img/noodles.jpg" alt="Ramen">
    <div class="carousel-caption">
    <h3>Ramen</h3>
    </div>
    </div>

    <div class="item">
    <img src="img/shrimp.jpg" alt="Shr">
    <div class="carousel-caption">
    <h3>Stir-fry</h3>
    </div>
    </div>


    <a class="left carousel-control" href="#carousel-id" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#caoursel-id" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div>
</div>
</div>
</body>




   
    <body>

    <?php echo $page_title;?>



    <div class="container">
    <div class="jumbotron">
        <h1>My Favourites</h1>
        <p>All your favourited restaurants displayed here! </p>
        <p><a class="btn btn-primary btn-lg" href="http://localhost/urbanfork/search.php" role="button">Favourite More Restaurants</a>
        </p>
        </div>
        <table align="center" border="1" width="100%">
        <tr>
        <th>List Name</th>
        </tr>
    <?php
    $query = "SELECT listname FROM listoffavourites INNER JOIN maintains INNER JOIN favourites ON listoffavourites.listid = maintains.listid AND favourites.id = maintains.id";

    $result = mysqli_query($db, $query) or die(mysqli_error());
    while($row = mysqli_fetch_array($result)){
        echo "<br>";
        $listname = $row['listname'];

        ?> 
        <tr>
        <td><p><?php echo $listname; ?></p></td>
        <?php

    }


    mysqli_close($db);

    ?>
    </div>


    </body>

    </html>

