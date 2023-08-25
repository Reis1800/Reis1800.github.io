<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nome = $_POST["nome"];
  $email = $_POST["email"];
  $mensagem = $_POST["mensagem"];

  $destinatario = "kyuubimaster1515@gmail.com"; 
  $assunto = "Novo contato do formulário";

  $mensagemCompleta = "Nome: $nome\nE-mail: $email\nMensagem:\n$mensagem";

  mail($destinatario, $assunto, $mensagemCompleta);

  echo "Mensagem enviada com sucesso!";
}
?>
