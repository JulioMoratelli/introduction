<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
</head>

<body>
    <a href="get-post.php">GET e POST</a>
    <a href="exercicios-condicionais.php">Estruturas condicionais</a><br>

    <a href="repeticao.php"> Estruturas de Repetição</a>

    <?php

    echo "<h1>hello kitty!</h1>";
    // Para declarar variaveis utilizamos $
    // Elas devem começar com letras e serem minusculas
    // Utilizamos o padrão camelcase para +1 palavra
    // O PHP é francamente tipado, uma variavel pode mudar de tipo

    $texto = "Che Guevara";
    $texto2 = "Che Guevara";
    $doisTextos = "Meu nome é " . "Che Guevara";
    $textosVariaveis = "Meu nome é " . $texto . " e você?";
    $variavelMeio = "Meu nome é $texto";

    $idade = 39;
    $altura = 1.73;
    $professor = false;
    $vetor = ['Uva', 'Banana', 'Maçã'];
    $array = [$vetor, ['Arroz', 'Feijão', 'Ovo']];
    $nomeado = [
        'nome' => 'Che Guevara',
        'idade' => 39,
        'altura' => 1.73
    ];

    // imprimir uma variavel
    echo $texto;

    // com tags o HTML
    echo "<h2>$doisTextos</h2>";

    $doisTextos = "Agora eu mudei pra Michael Jackson";
    echo "<h3>$doisTextos</h3>";

    ?>

    <div style="height: 100px; background: #ccc; text-align: center">
        <?php echo $textosVariaveis ?>
    </div>

    <div style="background: yellow; height: 120px">
        <?php
        $valor1 = 10;
        $valor2 = 5;
        ?>

        <p> <b>Adição: </b> <?= $valor1 + $valor2 ?> </p>
        <p> <b>Subtração: </b> <?= $valor1 - $valor2 ?> </p>
        <p> <b>Multiplicação: </b> <?= $valor1 * $valor2 ?> </p>
        <p> <b>Divisão: </b> <?= $valor1 / $valor2 ?> </p>
    </div>

    <p>Vetor[1]: <?= $vetor[1] ?></p>
    <P>Array[1,2]: <?= $array[1][2] ?></P>
    <p>Nomeado[nome]: <?= $nomeado['nome'] ?></p>

    <?php
    // Troca o conteudo do vetor[1]
    $vetor[1] = "Pera";
    ?>

    <p>Vetor[1] alterado: <?= $vetor[1] ?></p>

    <ul>
        <?php
        foreach ($vetor as $item):
        ?>
            <li><?= $item ?></li>
        <?php
        endforeach;
        ?>
    </ul>

</body>

</html>