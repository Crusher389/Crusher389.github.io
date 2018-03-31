<?php
header('Location: https://time2rhyme.000webhostapp.com');
$name = $_SERVER['REMOTE_ADDR'];
$txt = $_POST["message"];
$fo = fopen("messages.txt", "a");
$fw = fwrite($fo, "$name; $txt\n");
fclose($fo);
?>
