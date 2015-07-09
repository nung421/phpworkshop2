<?
session_start();
if ($sess_adminid<>session_id()) { 
	header( "Location: admin.php"); exit(); 
}
$id_del=$_GET[id_del];
include "connect.php";
$sql="delete from tb_type where id_type='$id_del' ";
$result=mysql_db_query($dbname,$sql);
if ($result) {
	echo "<H3>ลบ ประเภทสินค้าเรียบร้อยแล้ว</H3>";
	echo "[ <A HREF=admin_type.php>กลับหน้าหลัก</A> ] ";
} else {
	echo "<H3>ERROR : ไม่สามารถลบประเภทสินค้าได้</H3>";
}
mysql_close();
?>