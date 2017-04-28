<?php 

session_start(); 

if(isset($_GET['update'])) {
  require '../model/update.php'; 
  require '../views/editView.php'; 
}

if(isset($_GET['create'])) {
  require '../model/create.php'; 
  createArticle(); 
  require '../views/editView.php'; 
}

if(isset($_GET['delete'])) {
  require '../model/delete.php'; 
}