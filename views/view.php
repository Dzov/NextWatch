<?php session_start() ; ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>UpNext</title>
  <link rel="stylesheet" type="text/css" href="css/flex.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.3/angular.min.js"></script>
  <script src="js/controllers/controller.js"></script>
  <script src="js/filters/filters.js"></script>
</head>
<body ng-app="myApp">
  <!-- Header -->
  <header class="mainHeader flex">
    <h1 class="brand"><a href="index.php">UpNext</a></h1>
    <img src="img/television.svg" alt='NextWatch Icon' height="90">
    <div class="formContainer selfCenter">
      <?= headerDisplay(); ?>
      <form class="loginForm flexColumn" action="index.php" method="post">
        <label for="username">Username</label>
        <input id="username" type="text" name="username" required="">
        <label for="pwd">Password</label>
        <input id="pwd" type="password" name="pwd" required="">
        <input class="loginBtn" type="submit" name="submit" value="Login">
      </form>
    </div>
  </header>

  <main class="flexColumn" ng-controller="MainCtrl">

    <button class="randomBtn selfCenter" ng-click=''>Find a random show !</button>
    <div class="btnList flex justifyAround">
      <div class="dropDownMenu">
        <button class="button genreBtn">Genre</button>
        <ul class="dropContent">
          <li ng-click='myFilter = {Genre : "Adventure"}'>Adventure</li>
          <li ng-click='myFilter = {Genre : "Animation"}'>Animation</li>
          <li ng-click='myFilter = {Genre : "Comedy"}'>Comedy</li>
          <li ng-click='myFilter = {Genre : "Crime"}'>Crime</li>
          <li ng-click='myFilter = {Genre : "Drama"}'>Drama</li>
          <li ng-click='myFilter = {Genre : "Sci-Fi"}'>Sci-Fi</li>
        </ul>
      </div>
      <button class="button" ng-click='myFilter = {Rating : "9.5"}'>Highest Ratings</button>
      <button class="button" ng-click='myFilter = {Genre : ""} '>All shows</button>
      <?= addShowBtn(); ?>
    </div>
    <!-- <h2 class="selfCenter">Here are a few suggestions to choose from</h2> -->

    <!-- TV show cards section -->
    <?php adminPanel(); ?>
  </main>

  <!-- Footer -->
  <?php include 'views/footer.php' ?>
</body>
</html>