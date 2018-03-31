<?php
header('Location: https://time2rhyme.000webhostapp.com');
$ip = $_SERVER['REMOTE_ADDR'];
$txt = $_POST["message"];
$fo = fopen("messages.txt", "a");
$fw = fwrite($fo, "$ip; $txt\n");
fclose($fo);
?>
