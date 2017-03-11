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

