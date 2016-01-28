<?php
include "functions.php";

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
    "data" => date("d/m/Y - H:m")
];

saveMessage($obj);
header('Location: contato.html');

