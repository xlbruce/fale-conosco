<?php
$MENSAGENS = "messages/sample.json";


function getMessagesArray()
{
    global $MENSAGENS;
    $file = fopen($MENSAGENS, "r");
    $content = fread($file, filesize($MENSAGENS));
    return json_decode($content, true);

}