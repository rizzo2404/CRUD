<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cargo = $_POST['cargo'];

    $conn = new mysqli('localhost', 'root', '', 'gestao_projetos');

    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }

    $sql = "INSERT INTO membros (nome, email, cargo) VALUES ('$nome', '$email', '$cargo')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Membro cadastrado com sucesso!";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Membro</title>
</head>
<body>
    <h1>Cadastro de Membro</h1>
    <form method="POST" action="">
        <label for="nome">Nome do Membro:</label><br>
        <input type="text" id="nome" name="nome" required><br><br>
        
        <label for="email">E-mail:</label><br>
        <input type="email" id="email" name="email" required><br><br>
        
        <label for="cargo">Cargo:</label><br>
        <input type="text" id="cargo" name="cargo" required><br><br>
        
        <input type="submit" value="Cadastrar Membro">
    </form>
</body>
</html>
