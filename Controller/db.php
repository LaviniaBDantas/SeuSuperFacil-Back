<?php
$servername = "localhost";
$username = "root";
$password = "lavis2016";
$dbname = "seusuperfacil";

\$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully"; // Mensagem de conexão bem-sucedida
?>
