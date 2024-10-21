<?php
// Conexão com o banco de dados
$host = 'localhost';
$db = 'formulario_inscricao';
$user = 'root';  // Substitua pelo usuário do seu MySQL
$password = '';  // Substitua pela senha do seu MySQL

try {
    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro de conexão: " . $e->getMessage());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $primeiroNome = $_POST['primeiro-nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $genero = $_POST['genero'];
    $ocupacao = $_POST['ocupacao'];
    $instituicao = $_POST['instituicao'] ?? null;

    $cartaoEstudante = null;
    if (isset($_FILES['cartao-estudante']) && $_FILES['cartao-estudante']['error'] == 0) {
        $uploadDir = './uploads/';
        $fileName = basename($_FILES['cartao-estudante']['name']);
        $uploadPath = $uploadDir . $fileName;

        if (move_uploaded_file($_FILES['cartao-estudante']['tmp_name'], $uploadPath)) {
            $cartaoEstudante = $fileName;
        } else {
            die("Erro ao fazer upload do cartão de estudante.");
        }
    }

    $sql = "INSERT INTO inscricoes (primeiro_nome, sobrenome, email, telefone, genero, ocupacao, instituicao, cartao_estudante, status) 
            VALUES (:primeiro_nome, :sobrenome, :email, :telefone, :genero, :ocupacao, :instituicao, :cartao_estudante, 'pendente')";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':primeiro_nome', $primeiroNome);
    $stmt->bindParam(':sobrenome', $sobrenome);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':telefone', $telefone);
    $stmt->bindParam(':genero', $genero);
    $stmt->bindParam(':ocupacao', $ocupacao);
    $stmt->bindParam(':instituicao', $instituicao);
    $stmt->bindParam(':cartao_estudante', $cartaoEstudante);

    if ($stmt->execute()) {
        echo "Inscrição realizada com sucesso!";
    } else {
        echo "Erro ao realizar a inscrição.";
    }
}
?>
