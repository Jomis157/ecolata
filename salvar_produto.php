<?php
// Recebe os dados do formulário
$nome_produto = $_POST['nome_produto'];
$quantidade_produto = $_POST['quantidade_produto'];
$nome_doador = $_POST['nome_doador'];

// Conecta ao banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecolata";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}

// Insere os dados na tabela de produtos
$sql = "INSERT INTO produtos (nome, quantidade, doador) VALUES ('$nome_produto', $quantidade_produto, '$nome_doador')";

if ($conn->query($sql) === TRUE) {
    echo "Produto cadastrado com sucesso!";
} else {
    echo "Erro ao cadastrar o produto: " . $conn->error;
}

$conn->close();
?>
