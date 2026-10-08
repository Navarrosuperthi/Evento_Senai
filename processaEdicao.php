<?php
require_once __DIR__ . "/init.php";

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $eventoAlterado = $_POST;
    $idEvento = $_POST ['id'];

    $_SESSION ['eventos'][$idEvento] = $eventoAlterado;
    header("Location: index.php");
    exit;
};


?>