<?
session_start();
if ($sess_adminid<>session_id()) { 
	header( "Location: admin.php"); exit(); 
}
$name=$_POST[name];
if ($name=="") {
	echo "<H3>ERROR : กรุณากรอก ชื่อประเภทสินค้า</H3>";
	exit();
}
include "connect.php";
$sql="INSERT INTO tb_type VALUES('','$name')";
$result=mysql_db_query($dbname,$sql);
if ($result) {
	echo "<H3>เพิ่ม ประเภทสินค้าเรียบร้อยแล้ว</H3>";
	echo "[ <A HREF=admin_type.php>คลิกเพื่อกลับ</A> ] ";
} else {
	echo "<H3>ERROR : ไม่สามารถเพิ่มประเภทสินค้าได้</H3>";
}	
mysql_close();
?>