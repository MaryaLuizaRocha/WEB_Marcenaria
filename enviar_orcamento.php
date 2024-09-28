<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $mensagem = $_POST['mensagem'];

    // Aqui você pode adicionar código para enviar o e-mail
    $to = "maryaluiza.rocha@gmail.com";
    $subject = "Orçamento solicitado por $nome";
    $body = "Nome: $nome\nEmail: $email\nTelefone: $telefone\nMensagem: $mensagem";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Email enviado com sucesso.";
    } else {
        echo "Falha no envio do email.";
    }
} else {
    echo "Método não permitido.";
}
?>