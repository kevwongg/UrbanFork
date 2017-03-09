<!DOCTYPE html>
<?php
$db = mysqli_connect('localhost', "root", "",'urbanfork')
or die('Error connecting to MySql server.');
?>

<html>
  <head> 
    <meta charset="utf-8">
    <title>Favourites</title>

    </head>
    <body>

    <h1> My Favourites</h1>
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


    </body>

    </html>

