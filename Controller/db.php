<?php
$servername = "localhost";
$username = "root";
$password = "lavis2016";
$dbname = "seusuperfacil"; // O nome do seu banco de dados

// Criando a conexão com o banco de dados usando mysqli
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificando a conexão
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully"; // Mensagem de conexão bem-sucedida
?>
