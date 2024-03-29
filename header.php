<?php session_start(); ?>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">UrbanFork</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav navbar-right">
      <li id="home"><a href="index.php">Home</a></li>
      <li id="search"><a href="search.php">Search Restaurants</a></li>
      
      <?php
        if (isset($_SESSION['username']) || isset($_SESSION['admin_userid'])) {
          if (isset($_SESSION['admin_userid'])) {
            echo '<li id="admin_manage"><a href="admin_manage.php">Manage</a></li>';
            echo '<li id="add_restaurant"><a href="add_restaurant.php">Add Restaurant</a></li>';
          } else {
            echo '<li id="Favourites"><a href="Favourites.php">Favourites</a></li>';
          }
          echo '<li><a href="logout.php">Logout</a></li>';        
        } else {
          echo '<li id="login" ><a href="login.php">Login/Register</a></li>';  
        }
      ?>     
      
    </ul>

    </div>
  </div>
</nav>