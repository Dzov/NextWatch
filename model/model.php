<?php 

function getShows() {
  try {
    $bdd = new PDO('mysql:host=localhost;dbname=nextwatch;charset=utf8', 'root', 'root'); 
    $shows= $bdd->query('SELECT * FROM t_shows'); 
    return $shows; 
  } catch(Exception $e) {
    die('Erreur : ' . $e->getMessage()); 
  }

}
