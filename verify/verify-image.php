<?
session_start(); 

$text  = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";

$rand = substr(str_shuffle($text),0, 5); 
$_SESSION['verify_value'] = $rand; 

$im= imagecreate(70, 25); 
$bgcolor=imagecolorallocate ($im, 0, 0, 0);  
$textcolor = imagecolorallocate ($im, 255, 255, 255);  

imagestring ($im, 5, 14, 5,  $rand, $textcolor);  

header('Content-type: image/jpeg'); 
imagejpeg($im); 
imagedestroy($im); 
?>