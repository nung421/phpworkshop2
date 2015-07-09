<?
session_start();
if ($_SESSION[sess_userid]<>session_id()) { 
	header( "Location: admin.php"); exit(); 
}
$id_del=$_GET[id_del];
$photo_del=$_GET[photo_del];

if ($photo_del) {
	if (file_exists("photo/$photo_del")){
		unlink("photo/$photo_del");
	}
}

include "connect.php";
$sql="delete from tb_new where id_new='$id_del' ";
$result=mysql_db_query($dbname,$sql);
if ($result) {
	echo "<h3>ลบ ข่าวสาร ออกจากระบบเรียบร้อยแล้ว</h3>";
	echo "[ <a href=new_main.php>กลับหน้าหลัก</a> ] ";
} else {
	echo "<h3>ไม่สามารถลบข่าวสารได้ครับ</h3>";
}
mysql_close();
?>