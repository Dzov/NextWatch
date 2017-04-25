<?php 

  header("Access-Control-Allow-Origin: *");
  header("Content-Type: application/json; charset=UTF-8");

  try {
    $bdd = new PDO('mysql:host=localhost;dbname=nextwatch;charset=utf8', 'root', 'root'); 
  } catch(Exception $e) {
    die('Erreur : ' . $e->getMessage()); 
  }


  $shows = $bdd->query('SELECT * FROM t_shows'); 

  $outp = '{"shows" : [ ';
  $jsonObj = "" ;

  while ($show = $shows->fetch()) {

    if ($jsonObj != "") {$jsonObj .= ",";}

    $jsonObj .= '{"Title" : "'  . $show["show_title"] . '",';
    $jsonObj .= '"Description" : "'   . $show["show_descr"]        . '",';
    $jsonObj .= '"Genre" : "'   . $show["show_genre"]        . '",';
    $jsonObj .= '"Year" : "'   . $show["show_year"]        . '",';
    $jsonObj .= '"Rating" : "'   . $show["show_rating"]        . '",';
    $jsonObj .= '"Image" : "'. $show["show_img"]     . '"}';
  }



$outp .= $jsonObj . "]}" ;

echo $outp;

$shows->closeCursor();