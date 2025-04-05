<?php 
include "../includes/connect.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = trim($_POST["nome"]);
    $email = trim($_POST["email"]);
    $senha = password_hash($_POST["senha"], PASSWORD_DEFAULT);

    if (!empty($nome) && !empty($email) && !empty($_POST["senha"])) {
        $sql = "INSERT INTO users (nome, email, senha) VALUES (?, ?, ?)";
        $stmt = $conexao->prepare($sql);
        
        if ($stmt) {
            $stmt->bind_param("sss", $nome, $email, $senha);
            if ($stmt->execute()) {
                echo "Cadastro realizado com sucesso!";
            } else {
                echo "Erro ao cadastrar: " . $stmt->error;
            }
            $stmt->close();
        } else {
            echo "Erro na preparação da consulta.";
        }
    } else {
        echo "Todos os campos são obrigatórios.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - TypeX Hub</title>
    <link rel="shortcut icon" href="../../resources/img/tx-icon.ico" type="image/x-icon">
</head>
<body>
    <form action="" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" placeholder="Informe seu nome" required id="nome" name="nome">

        <label for="email">Email:</label>
        <input type="email" placeholder="Informe seu email" required id="email" name="email">

        <label for="senha">Senha:</label>
        <input type="password" placeholder="*********" required id="senha" name="senha">

        <button type="submit">Cadastrar</button>
    </form>

<?php 

$sql = "SELECT id, nome, email FROM users";
$result = $conexao->query($sql);

?>

<table>
    <thead>
        <tr>
            <th>

            </th>
        </tr>
    </thead>
    <tbody>
    <?php 
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>{$row['id']}</td>
                            <td>{$row['nome']}</td>
                            <td>{$row['email']}</td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='3'>Nenhum usuário cadastrado.</td></tr>";
            }
            $conexao->close();
            ?>
    </tbody>
</table>

</body>
</html>
