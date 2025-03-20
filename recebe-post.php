<?php
// VERIFICA SE FOI RERALIZADO UM POST
if($_SERVER["REQUEST_METHOD"] == "POST"){
    print_r($_POST);

    echo "<h1>" . $_POST['nome'] . "<h1>";
    
    $idade = $_POST['idade'];
    
    $anoNascimento = 2025 - $idade;
    
    echo "<h3>$anoNascimento</h3>";
}


