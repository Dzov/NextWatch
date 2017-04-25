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

    <button class="randomBtn">Find a random show !</button>
    <ul class="btnList flex justifyAround">
      <li class="button" ng-click='myFilter = {Genre : "Drama"}'>Genre</li>
      <li class="button">Year</li>
      <li class="button" ng-click='myFilter = {Rating : "9.5"}'>Highest Ratings</li>
    </ul>
    <h2 class="selfCenter">Here are a few suggestions to choose from</h2>

    <!-- TV show cards section -->
    <?php include "views/showCard.php" ?>
  </main>

  <!-- Footer -->
  <?php include 'views/footer.php' ?>
</body>
</html>