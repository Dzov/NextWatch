<?php session_start() ; ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>UpNext</title>
  <link rel="stylesheet" type="text/css" href="views/css/flex.css">
  <link rel="stylesheet" type="text/css" href="views/css/main.css">
  <link rel="stylesheet" type="text/css" href="views/css/responsive.css">
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.3/angular.min.js"></script>
  <script src="js/controllers/controller.js"></script>
  <script src="js/filters/filters.js"></script>
</head>
<body ng-app="myApp">
  <!-- Header -->
  <header class="mainHeader flex">
    <h1 class="brand"><a href="index.php">UpNext</a></h1>
    <img src="img/television.svg" alt='NextWatch Icon' height="60">
    <div class="loginFormContainer selfCenter">
      <?php if(isset($_SESSION['username'])) { ?>
      <div class='flex justifyBetween'>
        <p class='selfCenter'>Welcome, <?= ucfirst($_SESSION['username']) ?></p>
        <p><a href='controllers/logout.php'>Log Out</a></p>
      </div>  
      <?php } else { ?>
      <p class='selfCenter loginBtn' ng-click='show= !show'><a href="#">Log In</a></p> 
      <?php } ?>
      <form class="loginForm form flexColumn" action="index.php" method="post" ng-show='show'>
        <label for="username">Username</label>
        <input id="username" type="text" name="username" required="">
        <label for="pwd">Password</label>
        <input id="pwd" type="password" name="pwd" required="">
        <input class="greenBg formBtn" type="submit" name="submit" value="Login">
      </form>
    </div>
  </header>

  <main class="flexColumn" ng-controller="MainCtrl">

    <button class="randomBtn selfCenter" ng-click=''>Find a random show !</button>
    <div class="btnList flex justifyAround">
      <div class="dropDownMenu navBtn">
        <button class="btn" ng-click='show=!show'>Genre</button>
        <ul class="dropContent btn navBtn" ng-show='show'>
          <li ng-click='myFilter = {Genre : "Adventure"}'>Adventure</li>
          <li ng-click='myFilter = {Genre : "Animation"}'>Animation</li>
          <li ng-click='myFilter = {Genre : "Comedy"}'>Comedy</li>
          <li ng-click='myFilter = {Genre : "Crime"}'>Crime</li>
          <li ng-click='myFilter = {Genre : "Drama"}'>Drama</li>
          <li ng-click='myFilter = {Genre : "Sci-Fi"}'>Sci-Fi</li>
        </ul>
      </div>
      <button class="btn navBtn" ng-click='myFilter = {Rating : "9.5"}'>Highest Ratings</button>
      <button class="btn navBtn" ng-click='myFilter = {Genre : ""} '>All shows</button>
      <?php if($_SESSION['admin'] == true) { ?>
      <button class='addBtn btn navBtn'><a href='controllers/admin.php?create=true'>Add Show</a></button> 
      <?php } ?>
    </div>
    <!-- <h2 class="selfCenter">Here are a few suggestions to choose from</h2> -->

    <!-- TV show cards section -->
    <?php require "views/showCard.php"; ?>
  </main>

  <!-- Footer -->
  <?php include 'views/footer.php' ?>
</body>
</html>