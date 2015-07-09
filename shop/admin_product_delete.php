<?
session_start();
if ($sess_adminid<>session_id()) { 
	header( "Location: admin.php"); exit(); 
}

$id_del=$_GET[id_del];
$photo_del=$_GET[photo_del];

include "connect.php";
$sql="delete from tb_product where id_prd='$id_del' ";
$result=mysql_db_query($dbname,$sql);


if ($photo_del<>"") {
	$photo_del="photo/".$photo_del;
	if (file_exists($photo_del)) {
		unlink($photo_del);
	}
}

if ($result) {
	echo "<H3>ลบ สินค้าเรียบร้อยแล้ว</H3>";
	echo "[ <A HREF=admin_product.php>กลับหน้าหลัก</A> ] ";
} else {
	echo "<H3>ERROR : ไม่สามารถลบสินค้าได้</H3>";
}
mysql_close();
?>