<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ESTRUTURAS CONDICIONAIS</title>
</head>

<body>
    <h1>Estruturas Condicionais</h1>
    <h2>if, if/else, if, if/else if/else</h2>
    <p>As estruturas condicionais no PHP são iguais a qualquer outra linguagem de programação</p>
    <form action="if.php" method="POST">
        <label for="idade">IDADE:</label>
        <input type="number" name="idade" id="idade">
        <button type="submit">Verificar Idade</button>
    </form>
    <br>
    <h1>IMC</h1>
    <form action="imc.php" method="POST">
        <label for="nome">NOME:</label>
        <input type="text" name="nome" id="nome"> <br>

        <label for="altura">ALTURA:</label>
        <input type="text" name="altura" id="altura"> <br>

        <label for="peso">PESO:</label>
        <input type="text" name="peso" id="peso"> <br>

        <button type="submit">Verificar IMC</button>
    </form>
</body>

</html>