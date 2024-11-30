<?php
$conn = new mysqli('localhost', 'root', '', 'gestao_projetos');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_tarefa = $_POST['id_tarefa'];
    $id_membro = $_POST['id_membro'];
    $data_inicio = $_POST['data_inicio'];
    $data_fim = $_POST['data_fim'];
    $descricao = $_POST['descricao'];

    $sql = "INSERT INTO atividades (id_tarefa, id_membro, data_inicio, data_fim, descricao) 
            VALUES ('$id_tarefa', '$id_membro', '$data_inicio', '$data_fim', '$descricao')";

    if ($conn->query($sql) === TRUE) {
        echo "Atividade registrada com sucesso!";
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
    <title>Registro de Atividade</title>
</head>
<body>
    <h1>Registro de Atividade</h1>
    <form method="POST" action="">
        <label for="id_tarefa">Tarefa:</label><br>
        <select id="id_tarefa" name="id_tarefa" required>
            <option value="1">Tarefa 1</option>
            <option value="2">Tarefa 2</option>
        </select><br><br>
        
        <label for="id_membro">Membro:</label><br>
        <select id="id_membro" name="id_membro" required>
            <option value="1">Membro 1</option>
            <option value="2">Membro 2</option>
        </select><br><br>

        <label for="descricao">Descrição da Atividade:</label><br>
        <textarea id="descricao" name="descricao" required></textarea><br><br>

        <label for="data_inicio">Data de Início:</label><br>
        <input type="date" id="data_inicio" name="data_inicio" required><br><br>

        <label for="data_fim">Data de Término:</label><br>
        <input type="date" id="data_fim" name="data_fim" required><br><br>

        <input type="submit" value="Registrar Atividade">
    </form>
</body>
</html>
