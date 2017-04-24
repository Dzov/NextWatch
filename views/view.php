<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>NextWatch</title>
  <link rel="stylesheet" type="text/css" href="css/flex.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>

  <?php include 'views/header.php' ?>

  <main class="flexColumn">
    <ul class="btnList flex justifyAround">
      <li class="button">Genre</li>
      <li class="button">Year</li>
      <li class="button">Random Show</li>
      <li class="button">Highest Ratings</li>
    </ul>
    <h2 class="selfCenter">Here is a wide variety to choose from</h2>
    <section class="flex flexWrap">
      <?php include "views/showCard.php" ?>
    </section>
  </main>

  <?php include 'views/footer.php' ?>
</body>
</html>