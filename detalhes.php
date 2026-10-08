<?php 
require_once __DIR__ . "/init.php"
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>EVENTOS SENAI - Detalhes</h1>
    
    <?php require_once __DIR__ . "/nav.php" ?>

    <?php
    foreach ($_SESSION['eventos'] as $chave => $valor){
        print "
        <h2> {$valor['titulo']} </h2>
        <p>  {$valor['descricao']} </p>
         <p>  {$valor['area']} </p>
          <p>  {$valor['data']} </p>
           <p>  {$valor['inicio']} </p>
            <h4>  {$valor['fim']} </h4>
            <h4> {$valor['local']} </h4>
            <p> {$valor['responsavel']} </p>
        ";
    };
    ?>
    
    
    
</body>

</html>


