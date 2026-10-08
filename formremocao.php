<?php
require_once __DIR__ . "/init.php";
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deleção - NotiSENAI</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header class="cabecalho">
        <div class="logo-slogan">
            <h1>NotiSENAI</h1>
            <p>Suaa noticias estão aqui</p>
        </div>
        <div class="navegacao">
            <?php require_once __DIR__ . "/nav.php" ?>
        </div>
    </header>
    <?php require_once __DIR__ . "/nav.php" ?>

    <ul>
        <?php
        foreach ($_SESSION['noticias'] as $chave => $valor) {
            print "<li>
            <a href='formDelete.php?id={$chave}'>
                {$valor['titulo']}
            </a>    
        </li>";
        }
        ?>
    </ul>
    <?php if (isset($_GET['id'])): ?>
        <?php
    $id = $_GET['id'];
    $noticiaAtual = $_SESSION['noticias'][$id];
    ?>
    <h2>Deseja mesmo excluir está noticia?</h2>
    <p>
        <strong><?= $noticiaAtual['titulo'] ?></strong>
    </p>

    <form action="processarDeletar.php" method="POST">

        <input type="hidden" name="id" value="<?= $id ?>">

        <button type="submit">Excluir notícia</button>

        </form>
    <?php else: ?>
        <p>Nenhuma noticia selecionada.</p>
        <p>Por favor, selecione uma das opções.</p>
    <?php endif; ?>
</body>

</html>