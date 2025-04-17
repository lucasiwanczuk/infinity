<?php
$host = "127.0.0.1";
$dbname = "infinity";
$user = "user";
$password = "infPassrootDB991837";

// Cria uma conexão
$conn = new mysqli($host, $username, $passwd, $database);

// Verifica a conexão
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}
?>