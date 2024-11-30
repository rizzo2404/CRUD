<?php
include 'db.php';

if (isset($_POST['registrar_atividade'])) {
    $id_projeto = $_POST['id_projeto'];
    $id_membro = $_POST['id_membro'];
    $id_tarefa = $_POST['id_tarefa'];
    $data_inicio = $_POST['data_inicio'];
    $data_prevista = $_POST['data_prevista'];
    $sql = "INSERT INTO atividades (id_projeto, id_membro, id_tarefa, data_inicio, data_prevista) 
            VALUES ('$id_projeto', '$id_membro', '$id_tarefa', '$data_inicio', '$data_prevista')";
    $conn->query($sql);
}
?>
