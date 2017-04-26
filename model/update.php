<?php 

require "dbAccess.php"; 

if (isset($_POST['update'])) {
  $update = $bdd->prepare(
    'UPDATE t_shows 
    SET show_title = :title, 
    show_descr = :descr, 
    show_genre = :genre, 
    show_year = :year, 
    show_rating = :rating 
    WHERE show_id = :getID' 
    );
  $update->execute(array(
    'title' => $_POST['title'], 
    'descr' => $_POST['descr'], 
    'genre' => $_POST['genre'], 
    'year' => $_POST['year'], 
    'rating' => $_POST['rating'], 
    'getID' => $_GET['update']
    )); 
  echo "La base de données est à jour";
  $update->closeCursor(); 
}

$shows = $bdd->prepare('SELECT * FROM t_shows WHERE show_id = :getID');
$shows->execute(array('getID' => $_GET['update'])); 

?>