<?php
/**** Delete a show from database ****/
require "dbAccess.php"; 

// if(isset($_GET['id'])) {
//   $response = $bdd->prepare('DELETE FROM hiking WHERE id = :getID'); 
//   $response->execute(array('getID' => $_GET['id'])); 
// }

header('Location: read.php');

?>