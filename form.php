<?php
$txt = $_GET["message"];
$fo = fopen("messages.txt", "a");
$fw = fwrite($fo, "$txt\n");
fclose($fo);
?>
