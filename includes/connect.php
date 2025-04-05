<?php
$servername = "localhost";
$username = "utfpr";
$password = "utfpr";      
$dbname = "typex"; 

$conexao = new mysqli($servername, $username, $password, $dbname);

if ($conexao->connect_error) {
    die("Conexão falhou: " . $conexao->connect_error);
} else {
    echo "Conexão bem sucedida!!";
}
?>