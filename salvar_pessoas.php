<?php
// Recebe os dados do formulário
$nome_pessoa = $_POST['nome_pessoa'];
$telefone_pessoa = $_POST['telefone_pessoa'];
$email_pessoa = $_POST['email_pessoa'];
$endereco_pessoa = $_POST['endereco_pessoa'];

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

// Insere os dados na tabela de pessoas
$sql = "INSERT INTO pessoas (nome, telefone, email, endereco) VALUES ('$nome_pessoa', '$telefone_pessoa', '$email_pessoa', '$endereco_pessoa')";

if ($conn->query($sql) === TRUE) {
    echo "Pessoa cadastrada com sucesso!";
} else {
    echo "Erro ao cadastrar a pessoa: " . $conn->error;
}

$conn->close();
?>
