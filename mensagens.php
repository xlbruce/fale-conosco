<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <link rel="stylesheet" href=""/>
    <meta charset="UTF-8"/>
</head>
<body>
<?php include_once "functions.inc" ?>
<section>
    <table border="1">
        <tr>
            <th>Data e hora</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Assunto</th>
            <th>Mensagem</th>
        </tr>
        <?php
        $msgs = getMessagesArray();
        foreach ($msgs as $k => $v) {
            printf("<tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    </tr>")
        }
        ?>
    </table>
</section>

</body>
</html>