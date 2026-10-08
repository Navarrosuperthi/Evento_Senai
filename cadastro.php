<?php

session_start();

$erros = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $titulo = trim($_POST['titulo'] ?? '');
    $descricao = trim($_POST['descricao'] ?? '');
    $area = trim($_POST['area'] ?? '');
    $data = trim($_POST['data'] ?? '');
    $inicio = trim($_POST['inicio'] ?? '');
    $fim = trim($_POST['fim'] ?? '');
    $local = trim($_POST['local'] ?? '');
    $responsavel = trim($_POST['responsavel'] ?? '');

    if (empty($titulo)) {
        $erros[] = "Preencha o título.";
    }

    if (empty($descricao)) {
        $erros[] = "Preencha a descrição.";
    }

    if (empty($area)) {
        $erros[] = "Preencha a área.";
    }

    if (empty($data)) {
        $erros[] = "Preencha a data.";
    }

    if (empty($inicio)) {
        $erros[] = "Preencha o horário de início.";
    }

    if (empty($fim)) {
        $erros[] = "Preencha o horário de fim.";
    }

    if (empty($local)) {
        $erros[] = "Preencha o local.";
    }

    if (empty($responsavel)) {
        $erros[] = "Preencha o responsável.";
    }

    if (strlen($descricao) < 25) {
        $erros[] = "A descrição deve ter no mínimo 25 caracteres.";
    }

    if (empty($erros)) {

        if (!isset($_SESSION['eventos'])) {
            $_SESSION['eventos'] = [];
        }

        $evento = [
            'id' => count($_SESSION['eventos']) + 1,
            'titulo' => $titulo,
            'descricao' => $descricao,
            'area' => $area,
            'data' => $data,
            'inicio' => $inicio,
            'fim' => $fim,
            'local' => $local,
            'responsavel' => $responsavel
        ];

        $_SESSION['eventos'][] = $evento;

        header("Location: index.php");
        exit;
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Cadastrar Evento</title>
</head>

<body>

    <h1>Cadastrar Evento</h1>

    <?php if (!empty($erros)): ?>

        <?php foreach ($erros as $erro): ?>

            <p><?= $erro ?></p>

        <?php endforeach; ?>

    <?php endif; ?>

    <form method="post">

        <label for="titulo">Título:</label>
        <input type="text" id="titulo" name="titulo">

        <br><br>

        <label for="descricao">Descrição:</label>
        <textarea id="descricao" name="descricao"></textarea>

        <br><br>

        <label for="area">Área:</label>
        <input type="text" id="area" name="area">

        <br><br>

        <label for="data">Data:</label>
        <input type="date" id="data" name="data">

        <br><br>

        <label for="inicio">Início:</label>
        <input type="time" id="inicio" name="inicio">

        <br><br>

        <label for="fim">Fim:</label>
        <input type="time" id="fim" name="fim">

        <br><br>

        <label for="local">Local:</label>
        <input type="text" id="local" name="local">

        <br><br>

        <label for="responsavel">Responsável:</label>
        <input type="text" id="responsavel" name="responsavel">

        <br><br>

        <button type="submit">Cadastrar</button>

        <br><br>

        <a href="index.php">Voltar</a>

    </form>

</body>

</html>