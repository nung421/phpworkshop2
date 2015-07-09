<?
$im= imagecreate(165, 25); 
$bgcolor=imagecolorallocate ($im,0,0,0);
$textcolor = imagecolorallocate ($im, 255, 255, 255);  

imagestring ($im, 5, 15, 5, "PHP WORKSHOP II",$textcolor);  

header('Content-type: image/jpeg'); 
imagejpeg($im); 
imagedestroy($im); 
?> 