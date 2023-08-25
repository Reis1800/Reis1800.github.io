<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    // Conexão com o banco de dados (substitua pelos seus dados)
    $servidor = "localhost";
    $usuario = "seu_usuario";
    $senhaBD = "sua_senha";
    $banco = "seu_banco";
    
    $conn = new mysqli($servidor, $usuario, $senhaBD, $banco);
    if ($conn->connect_error) {
        die("Erro na conexão: " . $conn->connect_error);
    }

    // Inserir dados na tabela de usuários (substitua pelos seus dados)
    $sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
    if ($conn->query($sql) === TRUE) {
        echo "Cadastro realizado com sucesso!";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
