<?php include_once "functions.php" ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <link rel="stylesheet" href=""/>
    <meta charset="UTF-8"/>
    <title>Mensagens</title>
</head>
<body>
<section>
    <?php
    $msgs = getMessagesArray();
    if (count($msgs)) {
    //Se houver mensagens, exibe a tabela normalmente
    ?>
    <table border="1">
        <tr>
            <th>Data e hora</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Assunto</th>
            <th>Mensagem</th>
        </tr>
        <?php
        for ($i = 0; $i < count($msgs); $i++) {
            $mail = $msgs[$i]['email'];
            $data = $msgs[$i]['data'];
            $link = "<a href='mostra-mensagem.php?data=$data&email=$mail'>Ver Mensagem</a>";
            printf("<tr>
                    <td>%s</td>
                    <td>%s</td>
                    <td>%s</td>
                    <td>%s</td>
                    <td>%s</td>
                    </tr>",
                            $msgs[$i]['data'],
                            $msgs[$i]['nome'],
                            $msgs[$i]['email'],
                            $msgs[$i]['assunto'],
                            $link);

        }
        ?>
        <?php
        } //end if
        else {
        ?>

        <h1>Não há nenhuma mensagem</h1>
        <?php
        } //end else
        ?>
    </table>
</section>
<a href="index.html">Voltar</a>
</body>
</html>