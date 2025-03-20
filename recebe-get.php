<?php
// print_r faz a impressão de variaveis complexas, como arrays
print_r($_GET);
// isset verifica se uma variavel existe
if(isset($_GET['nome'])){
    echo "<h1>" . $_GET['nome'] . "<h1>";   
}

// If ternario
// $var = condição ? retorno de true : retorno se false;


$idade = isset($_GET['idade']) ? $_GET['idade'] : 0;

$anoNascimento = 2025 - $idade;

echo "<h3>$anoNascimento</h3>";
