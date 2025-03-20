<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET e POST</title>
</head>

<body>
    <h1>Formulário com GET</h1>
    <P>Os Formulário que utilizam GET aprensentam seu conteúdo enviando na barra de endereço do navegador.<br>
        Todo form sem o atributo <b>method</b> é do tipo GET.<br>
        Os dados são enviados para o arquivo do atributo <b>action</b> </P>

    <form action="recebe-get.php" method="GET">
        <!-- LABEL contem o testode instrução de campo, o atribuido for aponta para o id de um input -->
        <label for="nome">Digite seu nome:</label>
        <input type="text" name="nome" id="nome"> <br>

        <label for="idade">Digite sua idade</label>
        <input type="number" name="idade" id="idade"> <br>

        <label for="altura">Digite sua altura:</label>
        <input type="number" name="altura" id="altura" step="0.01"> <br>

        <label for="Genero">Escolha seu Genero:</label>
        <select name="genero" id="genero">
            <option value="">-- Escolha --</option>
            <option value="F">Feminino</option>
            <option value="M">Masculino</option>
            <option value="o">Outros</option>
        </select> <br>
        <button type="reset">Limpar</button> &nbsp;
        <button type="submit">Enviar</button>
    </form>
    <hr>
    <h1>Formulário com POST</h1>
    <P>Os Formulário que utilizam POST OCULTAM seu conteúdo enviando do uduário comum, aparecendo apenas na depuração.<br>

        Os dados são enviados para o arquivo do atributo <b>action</b> </P>

    <form action="recebe-post.php" method="POST">
        <!-- LABEL contem o testode instrução de campo, o atribuido for aponta para o id de um input -->
        <label for="nome">Digite seu nome:</label>
        <input type="text" name="nome" id="nome"> <br>

        <label for="idade">Digite sua idade</label>
        <input type="number" name="idade" id="idade"> <br>

        <label for="altura">Digite sua altura:</label>
        <input type="number" name="altura" id="altura" step="0.01"> <br>

        <label for="Genero">Escolha seu Genero:</label>
        <select name="genero" id="genero">
            <option value="">-- Escolha --</option>
            <option value="F">Feminino</option>
            <option value="M">Masculino</option>
            <option value="o">Outros</option>
        </select> <br>
        <button type="reset">Limpar</button> &nbsp;
        <button type="submit">Enviar</button>
    </form>
    <hr>

</body>

</html>