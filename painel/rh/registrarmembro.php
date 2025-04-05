<?php
include "../../../includes/connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    if (!empty($nome) && !empty($email) && !empty($senha)) {
        $sql = "INSERT INTO users(nome, email, senha) VALUES ('$nome', '$email', '$senha')";

        if ($conexao->query($sql) === TRUE) {
            echo "Cadastro realizado com sucesso!";
        } else {
            echo "Erro ao cadastrar: " . $conexao->error;
        }
    } else {
        echo "Todos os campos são obrigatórios.";
    }

    $conexao->close();
} else {
    echo "Método inválido.";
}
?>
