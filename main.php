<?php
// Conexão com o banco de dados
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "database_name";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar a conexão
if ($conn->connect_error) {
  die("Conexão falhou: " . $conn->connect_error);
}

// Receber os dados do formulário
$nome = $_POST["nome"];
$email = $_POST["email"];

// Preparar a consulta SQL
$sql = "INSERT INTO usuarios (nome, email) VALUES ('$nome', '$email')";

// Executar a consulta
if ($conn->query($sql) === TRUE) {
  echo "Inscrição realizada com sucesso!";
} else {
  echo "Erro ao realizar a inscrição: " . $conn->error;
}

$conn->close();
?>