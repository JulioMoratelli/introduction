<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>SESSION</h1>

    <p>Guarda os dados enquanto o navegador está aberto, ficando disponivel para todas as páginas do site</p>

    <form action="recebe-login.php" method="POST">
        <label for="usuario">Usuário:</label>
        <input type="text" name="usuario" id="usuario"><br>
        <label for="senha">Senha</label>
        <input type="password" name="senha" id="senha"><br>
        <button type="submit">ENTRAR</button>
    </form>
</body>
</html>