<?php session_start() ; ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>UpNext</title>
  <link rel="stylesheet" type="text/css" href="../css/flex.css">
  <link rel="stylesheet" type="text/css" href="../css/main.css">
  <link rel="stylesheet" type="text/css" href="css/responsive.css">
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.3/angular.min.js"></script>
  <script src="js/controllers/controller.js"></script>
  <script src="js/filters/filters.js"></script>
</head>
<body>

  <header class="mainHeader flex">
    <h1 class="brand"><a href="../index.php">UpNext</a></h1>
    <img src="../img/television.svg" alt='NextWatch Icon' height="60">
    <div class="loginFormContainer selfCenter">
      <div class='flex justifyBetween'>
        <p class='selfCenter'>Welcome, <?= ucfirst($_SESSION['username']) ?></p>
        <p><a href='../controllers/logout.php'>Log Out</a></p>
      </div>
    </div>
  </header>

  <main class="flex alignItemsCenter">
    <article class="showCard flexColumn">
      <?php 
      if(isset($_GET['update'])) {
        include 'updateForm.php'; 
      } elseif(isset($_GET['create'])) {
        include 'createForm.php'; 
      } else {
        echo "ERROR 404"; 
      }
      ?>
    </article>
  </main>
  <?php include 'footer.php'  ?>
</body>
</html>
