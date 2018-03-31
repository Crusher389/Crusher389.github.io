<?php
header('Location: http://www.google.co.uk');
$ip = $_SERVER['REMOTE_ADDR'];
$txt = $_POST["message"];
$fo = fopen("messages.txt", "a");
$fw = fwrite($fo, "$ip; $txt\n");
fclose($fo);
?>
