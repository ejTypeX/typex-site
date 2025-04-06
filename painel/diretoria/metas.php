<?php
include "../../../includes/connect.php";
include "../diretoria/diretoria.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nomeMeta = $_POST['nomeMeta'];
    $descricao = $_POST['descricao'];
    $status = $_POST['status'];
    $diretorResponsavel = $_POST['diretorResponsavel'];
    $diretoria = $_POST['diretoria'];

    $sql = "INSERT INTO metas (nomeMeta, descricao, status, diretorResponsavel, diretoria) 
            VALUES ('$nomeMeta', '$descricao', '$status', '$diretorResponsavel', '$diretoria')";

    if ($conexao->query($sql) === TRUE) {
        echo "Meta cadastrada com sucesso!";
    } else {
        echo "Erro ao cadastrar meta: " . $conexao->error;
    }
}

$conexao->close();
?>
