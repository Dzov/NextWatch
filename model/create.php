<?php

require "dbAccess.php"; 

$create = $bdd->prepare('INSERT INTO t_shows(show_title, show_descr, show_genre, show_year, show_rating) VALUES(:title, :descr, :genre, :year, :rating)'); 

if (isset($_POST['create'])) {
  $create->execute(array(
    'title' => $_POST['title'], 
    'descr' => $_POST['descr'], 
    'genre' => $_POST['genre'], 
    'year' => $_POST['year'], 
    'rating' => $_POST['rating']
    )); 

  echo 'L\'article a bien été ajoutée à la base de données'; 
  $create->closeCursor(); 
  header('Location: ../index.php');
}

