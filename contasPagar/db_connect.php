<?php
$host = "177.126.159.93";
$username = "zabbix";
$passwd = "zabbix";
$database = "zabbix";

// Cria uma conexão
$conn = new mysqli($host, $username, $passwd, $database);

// Verifica a conexão
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}
?>