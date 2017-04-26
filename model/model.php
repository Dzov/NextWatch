<?php 

  header("Access-Control-Allow-Origin: *");
  header("Content-Type: application/json; charset=UTF-8");


  require 'dbAccess.php'; 


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