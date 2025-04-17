<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infinity - Login</title>
    <!-- Adicione o link para o arquivo CSS do Tailwind -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-blue-500 h-screen flex items-center justify-center">

    <div class="bg-white p-8 rounded-lg shadow-md w-96">
        <h1 class="text-3xl font-semibold mb-6 text-center text-blue-700">Bem-vindo(a) de volta!</h1>

        <!-- Formulário de login -->
        <form action="processa_login.php" method="post">
            <div class="mb-4">
                <label for="username" class="block text-gray-700 text-sm font-bold mb-2">Usuário:</label>
                <input type="text" id="username" name="username" class="w-full p-2 border rounded focus:outline-none focus:ring focus:border-blue-300">
            </div>

            <div class="mb-6">
                <label for="passwd" class="block text-gray-700 text-sm font-bold mb-2">Senha:</label>
                <input type="password" id="passwd" name="passwd" class="w-full p-2 border rounded focus:outline-none focus:ring focus:border-blue-300">
            </div>

            <button type="submit" class="bg-blue-700 text-white rounded-full py-2 px-4 w-full hover:bg-blue-800 focus:outline-none focus:ring focus:border-blue-300">Entrar</button>
        </form>

        <p class="text-gray-600 mt-4 text-sm text-center">Ainda não tem uma conta? <a href="#" class="text-blue-700">Registre-se</a></p>
    </div>

</body>
</html>
