<?
$fileupload=$_FILES['fileupload']['tmp_name'];
$fileupload_name=$_FILES['fileupload']['name'];
$fileupload_size=$_FILES['fileupload']['size'];
$fileupload_type=$_FILES['fileupload']['type'];

$ext = strtolower(end(explode('.', $fileupload_name)));

if ($ext == "jpg" or $ext == "jpeg" or $ext =="png" or $ext=="gif") {
	copy($fileupload,$fileupload_name);

	if ($ext =="jpg" or $ext =="jpeg") {
		$ori_img = imagecreatefromjpeg($fileupload);
	} else if ($ext =="png") {
		$ori_img = imagecreatefrompng($fileupload);
	} else if ($ext =="gif") {
		$ori_img = imagecreatefromgif($fileupload);
	}

	$ori_size = getimagesize($fileupload);
	$ori_w = $ori_size[0]; 
	$ori_h = $ori_size[1];

	if ($ori_w>300) {
		$new_w = 300; 
		$new_h = round(($new_w/$ori_w) * $ori_h);
		$new_img= imagecreatetruecolor($new_w, $new_h);
		imagecopyresized(	$new_img, $ori_img,0,0,0,0,$new_w, $new_h,$ori_w,$ori_h);

		if ($ext =="jpg" or $ext =="jpeg") {
			imagejpeg($new_img,$fileupload_name);
		} else if ($ext =="png") {
			imagepng($new_img,$fileupload_name);
		} else if ($ext =="gif") {
			imagegif($new_img,$fileupload_name);
		}

		imagedestroy($ori_img); 
		imagedestroy($new_img); 
	}
    unlink($fileupload);

	echo "<H3>Upload และ Resize เรียบร้อยแล้วครับ</H3>";
	echo " ขนาดรูปภาพต้นฉบับ $ori_w x  $ori_h pixels<BR>";
	echo " ขนาดรูปภาพ Resize $new_w x $new_h pixels<BR><BR>";
	echo "<IMG SRC='$fileupload_name'><BR>";
} else {
	echo "<H3>ERROR : ไม่สามารถ Upload รูปภาพได้</H3>";
}
?>