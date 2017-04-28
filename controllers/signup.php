<?php

  require './model/dbAccess.php'; 
  
  $signup = $bdd->prepare('INSERT INTO t_users(firstname, lastname, username, pwd, admin) VALUES(:firstname, :lastname, :username, :pwd, :admin)'); 

  if (isset($_POST['signup'])) {
    $signup->execute(array(
      'firstname' => $_POST['firstName'], 
      'lastname' => $_POST['lastName'], 
      'username' => $_POST['newUsername'], 
      'pwd' => $_POST['newPwd'], 
      'admin' => 0
      )); 

    echo 'L\'utilisateur a bien été ajouté à la base de données'; 
    $signup->closeCursor(); 
  }
