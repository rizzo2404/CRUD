<?php
include 'db.php';

if (isset($_POST['criar_projeto'])) {
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $data_inicio = $_POST['data_inicio'];
    $sql = "INSERT INTO projetos (nome, descricao, data_inicio) VALUES ('$nome', '$descricao', '$data_inicio')";
    $conn->query($sql);
}

$sql = "SELECT * FROM projetos";
$result = $conn->query($sql);
while ($row = $result->fetch_assoc()) {
    echo $row['nome'] . " - " . $row['descricao'] . "<br>";
}

if (isset($_POST['atualizar_projeto'])) {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $data_inicio = $_POST['data_inicio'];
    $sql = "UPDATE projetos SET nome='$nome', descricao='$descricao', data_inicio='$data_inicio' WHERE id=$id";
    $conn->query($sql);
}

if (isset($_POST['deletar_projeto'])) {
    $id = $_POST['id'];
    $sql = "DELETE FROM projetos WHERE id=$id";
    $conn->query($sql);
}
?>
