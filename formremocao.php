<?php
require_once __DIR__ . "/init.php";
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deleção - EventoSENAI</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header class="cabecalho">
        <div class="logo-slogan">
            <h1>EventoSENAI</h1>
            <p>Seus eventos estão aqui</p>
        </div>
        <div class="navegacao">
            <?php require_once __DIR__ . "/nav.php" ?>
        </div>
    </header>
    <?php require_once __DIR__ . "/nav.php" ?>

    <ul>
        <?php
        foreach ($_SESSION['eventos'] as $chave => $valor) {
            print "<li>
            <a href='formremocao.php?id={$chave}'>
                {$valor['titulo']}
            </a>    
        </li>";
        }
        ?>
    </ul>
    <?php if (isset($_GET['id'])): ?>
        <?php
    $id = $_GET['id'];
    $eventoAtual = $_SESSION['eventos'][$id];
    ?>
    <h2>Deseja mesmo excluir este evento?</h2>
    <p>
        <strong><?= $eventoAtual['titulo'] ?></strong>
    </p>

    <form action="remocao.php" method="POST">

        <input type="hidden" name="id" value="<?= $id ?>">

        <button type="submit">Excluir evento</button>

        </form>
    <?php else: ?>
        <p>Nenhum evento selecionado.</p>
        <p>Por favor, selecione uma das opções.</p>
    <?php endif; ?>
</body>

</html>