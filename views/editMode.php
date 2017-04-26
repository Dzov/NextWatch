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
      <form action="" method="post" class="flexColumn editForm">
        <?php while($show = $shows->fetch()) { ?>
        <label for="title">Title</label>
        <input type="text" name="title" id="title" value="<?= $show['show_title'] ?>">
        <label for="rating">Rating</label>
        <input type="text" name="rating" id="rating" value="<?= $show['show_rating'] ?>">
        <label for="descr">Description</label>
        <textarea type="textarea" rows="10" cols="45" name="descr" id="descr"><?= $show['show_descr'] ?></textarea>
        <label for="year">Year</label>
        <input type="text" name="year" id="year" value="<?= $show['show_year'] ?>">
        <label for="genre">Genre</label>
        <input type="text" name="genre" id="genre" value="<?= $show['show_genre'] ?>">
        <?php 
      } 
      $shows->closeCursor(); 
      ?>
      <input type="submit" name="update" class="updateBtn button selfCenter" value="Update">
    </form>
  </article>
</main>
<?php include 'footer.php'  ?>
</body>
</html>
