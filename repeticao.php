<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estruturas de Repetição</title>
</head>

<body>
    <h1>Estrutura dde Repetição</h1>

    <h2>While</h2>
    <p>Repete um código até que uma condição aconteça.</p>
    <h2>Fro</h2>
    <p>Repete um código até a condição elaborar dentreo dele seja atendida</p>
    <h2>Foreach</h2>
    <p>Repete um código para cada item de um array</p>

    <form method="POST" action="./repeticao/while.php">
        <label for="numero">Digite um número</label>
        <input type="number" name="numero" id="numero">
        <button type="submit"> Enviar para WHILE</button>
    </form>

    <form method="POST" action="./repeticao/for.php">
        <label for="numero">Digite um número</label>
        <input type="number" name="numero" id="numero">
        <button type="submit"> Enviar para FOR</button>
    </form>

    <form method="POST" action="./repeticao/foreach.php">
        <label for="numero">Digite um número</label>
        <input type="number" name="numero" id="numero">
        <button type="submit"> Enviar para FOREACH</button>
    </form>
</body>

</html>