<?php
session_start();
$text = $_POST['texta'];
$text2 = $text;


$text2 = str_replace('  а ', ', а ', $text2);
$text2 = str_replace(' а ', ', а ', $text2);
$text2 = preg_replace("/[,]{2} а /u", ', a ', $text2);
$text2 = str_replace('  но ', ', а ', $text2);
$text2 = str_replace(' но ', ', но ', $text2);
$text2 = preg_replace("/[,]{2} но /u", ', но ', $text2);
$text2 = str_replace('...', '…', $text2);
$text2 = str_replace(' ,', ',', $text2);

?>