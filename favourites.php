<!DOCTYPE html>
<?php include("header.php");?>
<?php 
$db = mysqli_connect('localhost', "root", "",'urbanfork')
or die('Error connecting to MySql server.');
?>

<html>
  <head> 
    <meta charset="utf-8">
    <title>UrbanFork</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    </head>
    <body>

    <?php echo $page_title;?>

    <div class="container">
    <div class="jumbotron">
        <h1>My Favourites</h1>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Favourite More Restaurants</a>
        </p>
        </div>
    <?php
    $query = "SELECT * FROM listoffavourites";
    mysqli_query($db, $query) or die('Error querying database.');
    

    $result = mysqli_query($db, $query);
    $row = mysqli_fetch_array($result);

    while($row = mysqli_fetch_array($result)){
      echo $row['listname'] . '<br />';

    }

    mysqli_close($db);

    ?>
    </div>


    </body>

    </html>

