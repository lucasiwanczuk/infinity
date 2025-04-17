<?php
// Configurações do banco de dados (substitua pelos seus próprios dados)
$port = "5432";
$host = "127.0.0.1";
$dbname = "infinity";
$user = "user";
$password = "infPassrootDB991837";

// Tenta criar uma conexão PDO
try {
    $conn = new PDO("pgsql:host=$host;port=$port;dbname=$dbname;user=$user;password=$password");
    // Configura o PDO para lançar exceções em caso de erros
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Conexão falhou: " . $e->getMessage());
}

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $passwd = $_POST["passwd"];

    try {
        // Consulta SQL usando placeholders para evitar injeção de SQL
        $sql = "SELECT * FROM usersinf WHERE username = :username AND passwd = :passwd";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':passwd', $passwd);
        $stmt->execute();

        // Verifica se há algum resultado na consulta
        if ($stmt->rowCount() > 0) {
            // Autenticação bem-sucedida
            session_start();
            $_SESSION['authenticated'] = true;
            header("Location: index.php");
            exit();
        } else {
            // Autenticação falhou
            echo "Login falhou. Verifique seu usuário e senha.";
        }
    } catch (PDOException $e) {
        die("Erro na consulta: " . $e->getMessage());
    }
}

// Fecha a conexão com o banco de dados
$conn = null;
?>
