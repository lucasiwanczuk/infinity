<?php
include("db_connect.php");

$sql = "SELECT * FROM db";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Loop através dos resultados e exiba-os em uma tabela
    echo "<table><tr><th>ID</th><th>Nome</th><th>Email</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["nome"] . "</td><td>" . $row["email"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "Nenhum resultado encontrado";
}

// Feche a conexão com o banco de dados
$conn->close();
?>