<?php 
require_once '/init.php';
if($_SERVER['REQUEST_METHOD'] == "POST"){
   
    $idNoticia = $_POST['id'];

    unset ($_SESSION['noticias'][$idNoticia]);
    header("Location: index.php");
    exit;
}