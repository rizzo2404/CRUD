<?php
$conn = new mysqli('localhost', 'root', '', 'gestao_projetos');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titulo = $_POST['titulo'];
    $descricao = $_POST['descricao'];
    $data_inicio = $_POST['data_inicio'];
    $data_fim = $_POST['data_fim'];
    $id_projeto = $_POST['id_projeto'];
    $id_membro = $_POST['id_membro'];

    $sql = "INSERT INTO tarefas (titulo, descricao, data_inicio, data_fim, id_projeto, id_membro) 
            VALUES ('$titulo', '$descricao', '$data_inicio', '$data_fim', '$id_projeto', '$id_membro')";

    if ($conn->query($sql) === TRUE) {
        echo "Tarefa cadastrada com sucesso!";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Tarefa</title>
</head>
<body>
    <h1>Cadastro de Tarefa</h1>
    <form method="POST" action="">
        <label for="titulo">Título da Tarefa:</label><br>
        <input type="text" id="titulo" name="titulo" required><br><br>
        
        <label for="descricao">Descrição:</label><br>
        <textarea id="descricao" name="descricao" required></textarea><br><br>
        
        <label for="data_inicio">Data de Início:</label><br>
        <input type="date" id="data_inicio" name="data_inicio" required><br><br>
        
        <label for="data_fim">Data de Término:</label><br>
        <input type="date" id="data_fim" name="data_fim" required><br><br>
        
        <label for="id_projeto">Projeto:</label><br>
        <select id="id_projeto" name="id_projeto" required>
            <option value="1">Projeto 1</option>
            <option value="2">Projeto 2</option>
        </select><br><br>
        
        <label for="id_membro">Membro Responsável:</label><br>
        <select id="id_membro" name="id_membro" required>
            <option value="1">Membro 1</option>
            <option value="2">Membro 2</option>
        </select><br><br>
        
        <input type="submit" value="Cadastrar Tarefa">
    </form>
</body>
</html>
