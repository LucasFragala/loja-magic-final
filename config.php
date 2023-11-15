<?php
$servername = "localhost";
$username = "root";
$password = "wab12345678";
$dbname = "magic2";

// Criar a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
?>