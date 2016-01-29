<?php
include_once "functions.php";

//Não permite que a página seja carregada sem os parâmetros obrigatórios (data e email)
if (!(isset($_GET['email']) && isset($_GET['data']))) header('Location: index.html');

$data = parseDate($_GET['data']);
$email = $_GET['email'];
$msg = readFileContent("messages/$data$email.json");
$email = $_GET['email'];

?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/style.css"/>
    <meta charset="UTF-8"/>
    <title>Mensagem</title>
</head>
<body>
<section id="mensagem">
    <h1>Mensagem de <span class="italic"><?=$email ?></span></h1>
    <p><?=$msg;?></p>
    <input type="button" onclick="window.open('mensagens.php', '_self')" value="Voltar"/>
</section>
</body>
</html>