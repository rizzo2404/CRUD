<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "projeto_crud";

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>
