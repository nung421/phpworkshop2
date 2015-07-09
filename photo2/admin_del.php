<?
$id_del=$_GET['id_del'];

include "connect.php";
$sql="select name_photo from tb_photo where ref_title='$id_del' ";
$result=mysql_db_query($dbname,$sql);
while($r=mysql_fetch_array($result)) {
	$name_photo=$r[name_photo];
	if (file_exists("images_large/$name_photo")){
		unlink("images_large/$name_photo");
	}
	if (file_exists("images_small/$name_photo")){
		unlink("images_small/$name_photo");
	}
}

$sql="delete from tb_photo where ref_title='$id_del' ";
mysql_db_query($dbname,$sql);

$sql="delete from tb_title where id_title='$id_del' ";
mysql_db_query($dbname,$sql);

echo "<H3>ลบ หัวข้อ และ รูปภาพ ออกจากระบบเรียบร้อยแล้ว</H3>";
echo "<A HREF='admin.php'> กลับหน้าหลัก </A>";
mysql_close();
?>