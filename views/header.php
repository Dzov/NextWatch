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