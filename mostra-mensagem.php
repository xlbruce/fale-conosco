<?php
include_once "functions.php";
//Não permite que a página seja carregada sem os parâmetros obrigatórios (data e email)
if (!(isset($_GET['email']) && isset($_GET['data']))) header('Location: index.html');
$data = parseDate($_GET['data']);
$email = $_GET['email'];
$msg = readFileContent("messages/$data$email.json");
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href=""/>
    <meta charset="UTF-8"/>
    <title>Mensagem</title>
</head>
<body>
<section>
    <h1>Mensagem de <?=$_GET['email'] ?></h1>
    <p><?=$msg;?></p>
</section>
<a href="mensagens.php">Voltar</a>
</body>
</html>