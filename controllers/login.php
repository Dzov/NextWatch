<?php 
session_start(); 

// User authentification

  require './model/dbAccess.php'; 

  if(!isset($_SESSION['username'])) {

    if(isset($_POST['login'])) {
      $users = $bdd->query('SELECT * FROM t_users WHERE '); 

      while($user = $users->fetch()) {
      // If user exists in db, start session
        if($user['username'] == $_POST['username'] && $user['pwd'] == $_POST['pwd']) {
          $_SESSION['username'] = $_POST['username']; 

        // Checks whether user is an admin
          if($user['admin'] == 1) {
            $_SESSION['admin'] = true ; 
          } else {
            $_SESSION['admin'] = false ; 
          }
        } 
      }
    }
  }

