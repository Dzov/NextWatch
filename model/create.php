<?php

function createArticle() {

  require "dbAccess.php"; 

  $create = $bdd->prepare('INSERT INTO t_shows(show_title, show_descr, show_genre, show_year, show_rating, img_name, img_type, img_size, img_content) VALUES(:title, :descr, :genre, :year, :rating, :imgName, :imgType, :imgSize, :imgContent)'); 

  if (isset($_POST['create'])) {

var_dump($_FILES['image']['name']); 

    $fileName = $_FILES['image']['name'];
    $tmpName  = $_FILES['image']['tmp_name'];
    $fileSize = $_FILES['image']['size'];
    $fileType = $_FILES['image']['type'];

    $fp      = fopen($tmpName, 'r');
    $content = fread($fp, filesize($tmpName));
    $content = addslashes($content);
    fclose($fp);

    if(!get_magic_quotes_gpc()) {
      $fileName = addslashes($fileName);
    }

    $create->execute(array(
      'title' => $_POST['title'], 
      'descr' => $_POST['descr'], 
      'genre' => $_POST['genre'], 
      'year' => $_POST['year'], 
      'rating' => $_POST['rating'], 
      'imgName' => $_FILES['image']['name'], 
      'imgType' => $_FILES['image']['type'], 
      'imgSize' => $_FILES['image']['size'], 
      'imgContent' => $content 
      )); 

    echo 'L\'article a bien été ajoutée à la base de données'; 

    $create->closeCursor(); 
  }

}
