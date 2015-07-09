<?
$photo=$_FILES['photo']['tmp_name'];
$photo_name=$_FILES['photo']['name'];
$photo_size=$_FILES['photo']['size'];
$photo_type=$_FILES['photo']['type'];

$detail=$_POST['detail'];
$id_title=$_POST['id_title'];
if (!$photo) {	
	echo "<h3>ERROR : ไม่สามารถ Upload รูปภาพได้ครับ</h3>"; 
	exit();
} 

$ext = strtolower(end(explode('.', $photo_name)));

if ($ext == "jpg" or $ext == "jpeg" or $ext =="png" or $ext=="gif") {

	// เพิ่มข้อมูลลงตาราง tb_photo
	include "connect.php";
	$sql="insert into tb_photo values(null,'','$detail','$id_title')";
	mysql_db_query($dbname,$sql);

	// หา id_photo ที่มากที่สุดของ tb_photo
	$sql="select max(id_photo) from tb_photo";
	$result=mysql_db_query($dbname,$sql);
	$r=mysql_fetch_array($result);
	$id_max=$r[0];

	$filename=$id_max.".".$ext;

	copy($photo,"images_large/$filename");
		
	if ($ext =="jpg" or $ext =="jpeg") {
		$ori_img = imagecreatefromjpeg($photo);
	} else if ($ext =="png") {
		$ori_img = imagecreatefrompng($photo);
	} else if ($ext =="gif") {
		$ori_img = imagecreatefromgif($photo);
	}
	$ori_size = getimagesize($photo);
	$ori_w = $ori_size[0];
	$ori_h = $ori_size[1];

	if ($ori_w>=$ori_h) {
		$new_w = 100; 
		$new_h = round(($new_w/$ori_w) * $ori_h);
	} else {
		$new_h =100; 
		$new_w = round(($new_h/$ori_h) * $ori_w); 
	}
	$new_img= imagecreatetruecolor($new_w, $new_h);
	imagecopyresized(	$new_img, $ori_img,0,0,0,0,$new_w, $new_h,$ori_w,$ori_h);
	
	if ($ext =="jpg" or $ext =="jpeg") {
		imagejpeg($new_img,"images_small/$filename");
	} else if ($ext =="png") {
		imagepng($new_img,"images_small/$filename");
	} else if ($ext =="gif") {
		imagegif($new_img,"images_small/$filename");
	}

	imagedestroy($ori_img); 
	imagedestroy($new_img); 

	$sql="update tb_photo set name_photo='$filename' where id_photo='$id_max' ";
	mysql_db_query($dbname,$sql);

	echo "<H3>Upload รูปภาพเรียบร้อยแล้ว</H3>";
	echo "<A HREF='admin_photo.php?id_title=$id_title'> กลับหน้าหลัก </A>";
	mysql_close();
} else {
		echo "<h3>ERROR : ไม่สามารถ Upload รูปภาพได้ครับ</h3>"; 
}
?>