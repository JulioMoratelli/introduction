<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $numero = isset($_POST['numero']) ? $_POST['numero'] : 0;
}
?>


<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WHILE</title>
</head>

<body>
    <h1>Laço de Repetição WHILE</h1>


    <p>Recebemos o número: <?= $numero ?></p>

    <?php
    $i = 0; // cria a variavel de controle da repetição

    while ($i <= 10) {
        echo "<p>$i x $numero =" . $i * $numero . " </p>";
        $i++;
    } ?>
</body>

</html>