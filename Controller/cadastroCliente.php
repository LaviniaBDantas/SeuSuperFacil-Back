<?php
include 'db.php'; // Verifique se o caminho está correto
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");

// Verificar se os dados foram recebidos corretamente
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $senha = $_POST['senha'];

    // Validar os dados
    if (empty($nome) || empty($cpf) || empty($email) || empty($telefone) || empty($senha)) {
        echo "Todos os campos são obrigatórios.";
        exit;
    }

    // Preparar e executar a query
    $sql = "INSERT INTO cliente (nome, cpf, email, telefone, senha) VALUES (?,?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    if ($stmt) {
        $stmt->bind_param('sssss', $nome,$cpf, $email, $telefone, $senha);

        // Verificar se a inserção foi bem-sucedida
        if ($stmt->execute()) {
            echo "Cadastro realizado com sucesso.";
        } else {
            echo "Erro ao realizar o cadastro: " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "Erro ao preparar a query: " . $conn->error;
    }
} else {
    echo "Método POST não foi usado.";
}

// Fechar a conexão
$conn->close();
?>
