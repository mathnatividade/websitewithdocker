<!DOCTYPE html>
<html>
<head>
    <title>Meu Site</title>
</head>
<body>
    <h1>Meu Site</h1>

    <h2>Adicionar dados</h2>
    <form method="POST" action="adicionar.php">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required>

        <label for="idade">Idade:</label>
        <input type="number" name="idade" required>

        <input type="submit" value="Enviar">
    </form>

    <h2>Dados inseridos</h2>
    <?php
    // Configuração do banco de dados
    $servername = "db";
    $username = "root";
    $password = "SuaSenha@123";
    $database = "production";

    // Conexão com o banco de dados
    $conexao = new mysqli($servername, $username, $password, $database);

    // Verifica se houve erro na conexão
    if ($conexao->connect_error) {
        die("Erro na conexão: " . $conexao->connect_error);
    }

    // Consulta os dados já inseridos no banco
    $consulta = "SELECT nome, idade FROM dadosusers";
    $resultado = $conexao->query($consulta);

    // Exibe os dados em uma tabela
    if ($resultado->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>Nome</th><th>Idade</th></tr>";
        while ($row = $resultado->fetch_assoc()) {
            echo "<tr><td>" . $row["nome"] . "</td><td>" . $row["idade"] . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "Nenhum dado encontrado.";
    }

    // Fecha a conexão com o banco de dados
    $conexao->close();
    ?>
</body>
</html>
