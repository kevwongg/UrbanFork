<!DOCTYPE html>
<?php include("header.php");?>
<?php include("database.php");?>

<?php
if (!isset($_SESSION['username'])) {
  header("location:login.php");
}
?>

<html>
  <head> 

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="css/pin.css" rel="stylesheet">

  </head>
  
  <body>
    <div class="container">
    <div>
     <!-- <h1><? echo $_SESSION['name']; ?></h1> probably don't need this line?--> 
    </div>

      <div class="jumbotron">
        <h2>Hey there <? echo $_SESSION['name'];?> !</h2> 
        <p>All of your favourited restaurants are listed below. </p>
        <p><a class="btn btn-primary btn-lg" href="http://localhost/urbanfork/search.php" role="button">Favourite More Restaurants</a>
        </p>
      </div>          
                
    </div>

<!--Fix this code here--> 
    <div id="wrapper">
      <div id="columns"> 
        <div class="pin">
        <img src= "img/italian.jpg"/>  <!-- This picture should be the picture of the first reataurant in the list--> 
        <p> This caption should be the listname  
        </p>
    </div>

    <!-- Clicking on the image should take user to webpage of that list, should show list contents.--> 

      <div class="pin"> 
      <img src="img/chinese.jpg"/> 
      <p> This caption should be listname2 
      </p>
    </div>

      <div class="pin">
      <img src="img/french.jpg"/>
      <p> This caption should be listname3
      </p>
      </div>

       <div class="pin">
      <img src="img/japanese.jpg"/>
      <p> This caption should be listname4
      </p>
      </div>

       <div class="pin">
      <img src="img/korean.jpg"/>
      <p> This caption should be listname4
      </p>
      </div>

    <div class="container">   
        <?php        
          $userId = $_SESSION['userId'];        
          $query = "SELECT listname, m.rname FROM listoffavourites lf INNER JOIN maintains m INNER JOIN favourites f ON lf.listid = m.listid AND f.id = m.id AND m.id = $userId";

          $result = mysqli_query($con, $query) or die("Error");
          $row = mysqli_fetch_array($result);
          $listName[] = $row['listname'];
          $placeNames[] = $row['rname'];
        ?>     
        
        
        <?php 
          $indexList = 0;
          while ($indexList < sizeof($listName)) {          
        ?>
            <div>
              <h3><? echo $listName[$indexList]?></h3>
              <ul>
                <?php         
                  $index = 0;
                  while($index < sizeof($placeNames)){
                ?> 
                    <li><?echo $placeNames[$index];?></li>
                <?php
                    $index++;
                  }
                  mysqli_close($con); 
                ?>
              </ul>
            </div>
          <?php 
            $indexList++;
          }
          ?>

    </div>


  </body>

</html>

