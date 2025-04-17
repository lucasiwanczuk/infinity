<?php
// Substitua as credenciais do banco de dados pelas suas
$host = '177.126.159.93';
$dbname = 'zabbix';
$username = 'zabbix';
$passwd = 'zabbix';

try {
    // Conecte-se ao banco de dados usando PDO
    $db = new PDO("pgsql:host=$host;dbname=$dbname", $username, $passwd);
    // Defina o modo de erro do PDO como exceção
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Remova ou comente esta linha para evitar saída antes da chamada a header()
    // echo 'Conexão bem-sucedida!';
} catch (PDOException $e) {
    // Log ou registre detalhes do erro
    error_log('Erro na conexão com o banco de dados: ' . $e->getMessage());

    // Exiba uma mensagem genérica para o usuário final
    echo 'Ocorreu um erro na conexão com o banco de dados. Por favor, tente novamente mais tarde.';
    exit();
}

// Verificar se a conexão foi bem-sucedida
if ($db->getAttribute(PDO::ATTR_CONNECTION_STATUS)) {
    // Aqui você pode fazer algo relacionado à conexão bem-sucedida se necessário
    // Por exemplo, redirecionar para uma página inicial
    header('Location: index.php');
    exit();
}
?>
