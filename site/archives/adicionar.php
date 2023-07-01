<?php
// Configuração do banco de dados
$servername = "db";
$username = "root";
$password = "SuaSenha@123";
$database = "production";

// Obtém os dados enviados pelo formulário
$nome = $_POST["nome"];
$idade = $_POST["idade"];

// Conexão com o banco de dados
$conexao = new mysqli($servername, $username, $password, $database);

// Verifica se houve erro na conexão
if ($conexao->connect_error) {
    die("Erro na conexão: " . $conexao->connect_error);
}

// Insere os dados no banco de dados
$insercao = "INSERT INTO dadosusers (nome, idade) VALUES ('$nome', '$idade')";
if ($conexao->query($insercao) === TRUE) {
    echo "Dados inseridos com sucesso.";
    echo "<br>";
    echo "<button onclick=\"window.location.href='index.php'\">Voltar</button>";

} else {
    echo "Erro na inserção: " . $conexao->error;
}

// Fecha a conexão com o banco de dados
$conexao->close();
?>
