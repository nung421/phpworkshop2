<?
$ori_file="test.jpg";
$ori_size = getimagesize($ori_file);
$ori_w = $ori_size[0]; 
$ori_h = $ori_size[1];
  
$new_w =100;
$new_h = round(($new_w/$ori_w) * $ori_h);

$ori_img = imagecreatefromjpeg($ori_file);
$new_img = imagecreatetruecolor($new_w, $new_h);
imagecopyresized($new_img, $ori_img,0,0, 0,0,$new_w, $new_h,$ori_w,$ori_h);

$new_file="test_resize.jpg";
imagejpeg($new_img, $new_file);
imagedestroy($ori_img); 
imagedestroy($new_img); 

echo "<H1>Resize เรียบร้อยแล้วครับ</H1>";
echo "<IMG SRC='$ori_file'> ";
echo "<IMG SRC='$new_file'><BR>";
?>