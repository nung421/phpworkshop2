<?
session_start();
if ($sess_adminid<>session_id()) { 
	header( "Location: admin.php"); exit(); 
}
$id_edit=$_POST[id_edit];
$name=$_POST[name];

include "connect.php";
$sql="update tb_type set  name_type='$name' where id_type='$id_edit' ";
$result=mysql_db_query($dbname,$sql);
if ($result) {
	echo "<H3>แก้ไข ประเภทสินค้าเรียบร้อยแล้ว</H3>";
	echo "[ <A HREF=admin_type.php>กลับหน้าหลัก</A> ] ";
} else {
	echo "<H3>ERROR : ไม่สามารถแก้ไขประเภทสินค้าได้</H3>";
}
mysql_close();
?>