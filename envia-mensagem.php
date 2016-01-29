<?php
include_once "functions.php";

$nome = $_POST['nome'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];

$obj = [
    "nome" => $nome,
    "email" => $email,
    "telefone" => $tel,
    "assunto" => $assunto,
    "mensagem" => $mensagem,
    "data" => date("d/m/Y - H:i")
];

saveMessage($obj);
echo "<script>alert('Mensagem enviada com sucesso!');
            window.open('contato.html', '_self');
            </script>";