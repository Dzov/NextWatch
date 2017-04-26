<?php
/**** Delete a show from database ****/
require "dbAccess.php"; 

if(isset($_GET['delete'])) {
  $response = $bdd->prepare('DELETE FROM t_shows WHERE show_id = :getID'); 
  $response->execute(array('getID' => $_GET['delete'])); 
}

header('Location: ../index.php');

?>