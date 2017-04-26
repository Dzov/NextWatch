<?php session_start() ; ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>UpNext</title>
  <link rel="stylesheet" type="text/css" href="../css/flex.css">
  <link rel="stylesheet" type="text/css" href="../css/main.css">
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.3/angular.min.js"></script>
  <script src="js/controllers/controller.js"></script>
  <script src="js/filters/filters.js"></script>
</head>
<body>

  <header class="mainHeader flex">
    <h1 class="brand"><a href="../index.php">UpNext</a></h1>
    <img src="../img/television.svg" alt='NextWatch Icon' height="90">
    <div class="formContainer selfCenter">
      <div class='flex justifyBetween'><p class='selfCenter'>Welcome, <?= ucfirst($_SESSION['username']) ?> </p><p><a href='../controllers/logout.php'>Log Out</a></div>
      <form class="loginForm flexColumn" action="../index.php" method="post">
        <label for="username">Username</label>
        <input id="username" type="text" name="username" required="">
        <label for="pwd">Password</label>
        <input id="pwd" type="password" name="pwd" required="">
        <input class="loginBtn" type="submit" name="submit" value="Login">
      </form>
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
