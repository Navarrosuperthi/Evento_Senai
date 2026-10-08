<?php
require_once __DIR__ . "/init.php";

$eventoDetectado = false;

if (isset($_GET['id'])){
    $eventoDetectado = true;
    $eventoAtual = $_SESSION ['evento'][$_GET['id']];
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
        <h1>EVENTOS SENAI - Editar</h1>
        <?php require_once __DIR__ . "/nav.php" ?>
        <ul>
        <?php
        foreach($_SESSION ['eventos'] as $chave => $valor){
            print "<li>
                    <a class='navegacao' href = 'edicao.php?id={$chave}'>
                        {$valor['titulo']}
                    </a>
                    </li>";
        }
        ?>
        </ul>
        <?php if($eventoDetectado): ?>

        <form action="processaEdicao.php" method="POST">
            <input type="text" name="id" id="id"
            value="<?= $_GET['id'] ?>" hidden
            required  >
            <div>
            <label for="titulo">Titulo: </label>
            <input type="text"
            name="titulo"
            id="titulo"
            value="<?= $eventoAtual['titulo'] ?>"
            required>
        </div>
        <div>
            <label for="descricao">Descrição: </label>
            <input type="text"
                name="descricao"
                id="descricao"
                value="<?= $eventoAtual['descricao'] ?>"
                required>
                
        </div>
        <div>
            <label for="area">Area: </label>
            <input type=""
                name="area"
                id="area"
                value="<?= $eventoAtual['area'] ?>"
                required>
                
        </div>
        <div>
            <label for="data">Data: </label>
            <input type="date"
                name="data"
                id="data"
                value="<?= $eventoAtual['data'] ?>"
                required>
        </div>
        <div>
            <label for="inicio"> Início do Evento:</label>
            <input type="time"
                name="inicio"
                id="inicio"
                value="<?= $eventoAtual['inicio'] ?>"
                required>
        </div>
        <div>
            <label for="fim"> Fim do Evento:</label>
            <input type="time"
                name="fim"
                id="fim"
                value="<?= $eventoAtual['fim'] ?>"
                required>
        </div>
         <div>
            <label for="local">Local: </label>
            <input type="text"
                name="local"
                id="local"
                value="<?= $eventoAtual['local'] ?>"
                required>
        </div>
        <div>
            <label for="reponsavel">Responsável: </label>
            <input type="text"
                name="reponsavel"
                id="reponsavel"
                value="<?= $eventoAtual['reponsavel'] ?>"
                required>
        </div>
        
        <button type="submit">Cadastrar</button>
        </form>
        
        <?php else: ?>
            <p>Nenhuma noticia selecionada.</p>
            <p>Por favor, selecione uma das opções acima!</p> 
        <?php endif;?>
    
</body>
</html>