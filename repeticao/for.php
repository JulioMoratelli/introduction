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
    <title>for</title>
</head>

<body>
    <h1>Laço de Repetição for</h1>


    <p>Recebemos o número: <?= $numero ?></p>

    <?php

    for ($i = 0; $i <= 10; $i++) {
        echo "<p>$i x $numero =" . $i * $numero . " </p>";
    } ?>
</body>

</html>