<?php
// Conectar ao banco de dados (substitua com suas configurações)
$host = "177.126.159.93";
$port = "5432";
$dbname = "zabbix";
$user = "zabbix";
$password = "zabbix";

// Tenta criar uma conexão PDO
try {
    $conn = new PDO("pgsql:host=$host;port=$port;dbname=$dbname;user=$user;password=$password");
    // Configura o PDO para lançar exceções em caso de erros
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Conexão falhou: " . $e->getMessage());
}

// Consulta para recuperar os dados das despesas
$query = "SELECT * FROM transacoes WHERE tipo LIKE '%Despesa%' ORDER BY data DESC;";
$result = $conn->query($query);

if ($result) {
    echo '<div class="display">
            <table class="table table-striped table-bordered style="width:100%">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Data</th>
                        <th scope="col">Grupo</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Destino</th>
                        <th scope="col">Valor</th>
                    </tr>
                </thead>
                <tbody>';

    foreach ($result as $row) {
        echo '<tr>';
        echo '<th scope="row">' . $row['id'] . '</th>';
        echo '<td>' . $row['data'] . '</td>';
        echo '<td>' . $row['grupo'] . '</td>';
        echo '<td>' . $row['categoria'] . '</td>';
        echo '<td>' . $row['destino'] . '</td>';
        echo '<td>R$ ' . $row['valor'] . '</td>';
        echo '</tr>';
    }

    echo '</tbody>
        </table>
    </div>';
} else {
    echo "Erro ao recuperar os dados do banco de dados.";
}

// ... (fechar a conexão ao banco de dados)
$conn = null;
?>