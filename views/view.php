<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>NextWatch</title>
  <link rel="stylesheet" type="text/css" href="css/flex.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.3/angular.min.js"></script>
  <script src="js/controllers/controller.js"></script>
  <script src="js/filters/filters.js"></script>
</head>
<body ng-app="myApp">
  <!-- Header -->
  <?php include 'views/header.php' ?>

  <main class="flexColumn" ng-controller="MainCtrl">

    <button class="randomBtn" ng-click=''>Find a random show !</button>
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
    </div>
    <h2 class="selfCenter">Here are a few suggestions to choose from</h2>

    <!-- TV show cards section -->
    <?php include "views/showCard.php" ?>
  </main>

  <!-- Footer -->
  <?php include 'views/footer.php' ?>
</body>
</html>