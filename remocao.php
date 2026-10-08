<?php 
require_once '/init.php';
if($_SERVER['REQUEST_METHOD'] == "POST"){
   
    $idEvento = $_POST['id'];

    unset ($_SESSION['eventos'][$idevento]);
    header("Location: index.php");
    exit;
}