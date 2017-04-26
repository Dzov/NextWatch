<?php 

session_start(); 

// function editViewContent() {
//   if(isset($_GET['update'])) {
//     include 'updateForm.php'; 
//   } elseif(isset($_GET['create'])) {
//     include 'createForm.php'; 
//   } else {
//     echo "ERROR 404"; 
//   }
// }

if(isset($_GET['update'])) {
  require '../model/update.php'; 
  require '../views/editView.php'; 
}

if(isset($_GET['create'])) {
  require '../model/create.php'; 
  require '../views/editView.php'; 
}

if(isset($_GET['delete'])) {
  require '../model/delete.php'; 
}