<?php
// Conectar ao banco de dados (substitua com suas configurações)
$host = "127.0.0.1";
$dbname = "infinity";
$user = "user";
$password = "infPassrootDB991837";

try {
    $conn = new PDO("pgsql:host=$host;dbname=$dbname;user=$user;password=$password");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Obter dados do formulário
    $data = $_POST['data'];
    $tipo = "Receita";
    $categoria = $_POST['categoria'];
    $destino = $_POST['destino'];
    $grupo = $_POST['grupo'];
    $valor = $_POST['valor'];
    $visivel = true;

    // Preparar a instrução SQL
    $stmt = $conn->prepare("INSERT INTO transacoes (data, tipo, categoria, destino, grupo, valor, visivel) 
                            VALUES (:data, :tipo, :categoria, :destino, :grupo, :valor, :visivel)");

    // Bind dos parâmetros
    $stmt->bindParam(':data', $data);
    $stmt->bindParam(':tipo', $tipo);
    $stmt->bindParam(':categoria', $categoria);
    $stmt->bindParam(':destino', $destino);
    $stmt->bindParam(':grupo', $grupo);
    $stmt->bindParam(':valor', $valor);
    $stmt->bindParam(':visivel', $visivel);

    // Executar a instrução preparada
    $stmt->execute();

    echo "Despesa adicionada com sucesso!";
} catch (PDOException $e) {
    echo "Erro ao adicionar despesa: " . $e->getMessage();
}

// Fechar a conexão
$conn = null;
?>
