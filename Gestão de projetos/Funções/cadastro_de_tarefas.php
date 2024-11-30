<?php
include 'db.php';

if (isset($_POST['criar_tarefa'])) {
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $status = $_POST['status'];
    $sql = "INSERT INTO tarefas (nome, descricao, status) VALUES ('$nome', '$descricao', '$status')";
    $conn->query($sql);
}

$sql = "SELECT * FROM tarefas";
$result = $conn->query($sql);
while ($row = $result->fetch_assoc()) {
    echo $row['nome'] . " - " . $row['descricao'] . " - " . $row['status'] . "<br>";
}

if (isset($_POST['atualizar_tarefa'])) {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $status = $_POST['status'];
    $sql = "UPDATE tarefas SET nome='$nome', descricao='$descricao', status='$status' WHERE id=$id";
    $conn->query($sql);
}

if (isset($_POST['deletar_tarefa'])) {
    $id = $_POST['id'];
    $sql = "DELETE FROM tarefas WHERE id=$id";
    $conn->query($sql);
}
?>
