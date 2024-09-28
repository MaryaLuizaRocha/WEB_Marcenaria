<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitizando os dados recebidos
    $nome = htmlspecialchars($_POST['nome']);
    $email = htmlspecialchars($_POST['email']);
    $telefone = htmlspecialchars($_POST['telefone']);
    $descricao = htmlspecialchars($_POST['mensagem']);

    // Configurando o e-mail
    $to = "maryaluiza.rocha@gmail.com"; 
    $subject = "Solicitação de Orçamento";
    $message = "Nome: $nome\nE-mail: $email\nTelefone: $telefone\nDescrição: $descricao";
    $headers = "From: $email\r\n";

    // Enviando o e-mail
    if (mail($to, $subject, $message, $headers)) {
        // Mensagem de sucesso
        echo "<script>alert('Orçamento enviado com sucesso!');</script>";
    } else {
        // Mensagem de erro
        echo "<script>alert('Erro ao enviar o orçamento.');</script>";
    }
} else {
    echo "Método não permitido.";
}
?>