<?php 
require_once __DIR__ . "/init.php"
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>EVENTOS SENAI - Página de eventos</h1>

    <?php require_once __DIR__ . "/nav.php" ?>
        <ul>
        <?php
        foreach($_SESSION ['eventos'] as $chave => $valor){
            print "<li>
                    <a class='navegacao' href = 'detalhes.php?id={$chave} '>
                        {$valor['titulo']}
                    </a>
                    </li>";
        }
        ?>
        </ul>

    
    
</body>

</html>


