<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $numero = isset($_POST['numero']) ? $_POST['numero'] : 0;
}

$sorteio = [
    rand(1, 60),
    rand(1, 60),
    rand(1, 60),
    rand(1, 60),
    rand(1, 60),
    rand(1, 60)
]
?>


<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ForEach</title>
</head>

<body>
    <h1>Laço de Repetição ForEach</h1>

    <p>
        Você enviou o numero <?= $numero ?>
    </p>

    <h2>Numeros Sorteados</h2>

    <ol>
        <?php foreach ($sorteio as $numeroSorteado) : ?>

            <li><? $numeroSorteado ?></li>
        <?php endforeach; ?>
    </ol>

    <h3>Mesmo código em FOR</h3>

    <ol>
        <?php for ($i = 0; $i < count($sorteio); $i++) : ?>

            <li><? $sorteio[$i] ?></li>
        <?php endfor; ?>
    </ol>


    <?php

    foreach ($sorteio as $item) {
        if ($item == $numero) {
            echo "<h1> VocÊ acertou o numero! </h1>";
            break;
        } else {
            echo "<p> VocÊ acertou o numero! </p>";
        }
    }
    ?>



</body>

</html>