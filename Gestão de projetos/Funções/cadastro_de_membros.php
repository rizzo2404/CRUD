<?php
include 'db.php';

if (isset($_POST['criar_membro'])) {
    $nome = $_POST['nome'];
    $funcao = $_POST['funcao'];
    $status = $_POST['status'];
    $sql = "INSERT INTO membros (nome, funcao, status) VALUES ('$nome', '$funcao', '$status')";
    $conn->query($sql);
}

$sql = "SELECT * FROM membros";
$result = $conn->query($sql);
while ($row = $result->fetch_assoc()) {
    echo $row['nome'] . " - " . $row['funcao'] . " - " . $row['status'] . "<br>";
}

if (isset($_POST['atualizar_membro'])) {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $funcao = $_POST['funcao'];
    $status = $_POST['status'];
    $sql = "UPDATE membros SET nome='$nome', funcao='$funcao', status='$status' WHERE id=$id";
    $conn->query($sql);
}

if (isset($_POST['deletar_membro'])) {
    $id = $_POST['id'];
    $sql = "DELETE FROM membros WHERE id=$id";
    $conn->query($sql);
}
?>
