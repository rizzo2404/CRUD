<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $data_inicio = $_POST['data_inicio'];

    $conn = new mysqli('localhost', 'root', '', 'gestao_projetos');

    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }

    $sql = "INSERT INTO projetos (nome, descricao, data_inicio) VALUES ('$nome', '$descricao', '$data_inicio')";

    if ($conn->query($sql) === TRUE) {
        echo "Projeto cadastrado com sucesso!";
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
    <title>Cadastro de Projeto</title>
</head>
<body>
    <h1>Cadastro de Projeto</h1>
    <form method="POST" action="">
        <label for="nome">Nome do Projeto:</label><br>
        <input type="text" id="nome" name="nome" required><br><br>
        
        <label for="descricao">Descrição:</label><br>
        <textarea id="descricao" name="descricao" required></textarea><br><br>
        
        <label for="data_inicio">Data de Início:</label><br>
        <input type="date" id="data_inicio" name="data_inicio" required><br><br>
        
        <input type="submit" value="Cadastrar Projeto">
    </form>
</body>
</html>
