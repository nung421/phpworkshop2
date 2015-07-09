<?
$title=$_POST['title'];
$id_edit=$_POST['id_edit'];

if ($title=="") {	
	echo "<H3>ERROR : กรุณากรอกหัวข้อรูปภาพด้วยครับ..</H3>"; 
	exit();
} 
include "connect.php";
$sql="update tb_title set name_title='$title' where id_title='$id_edit' ";
$result=mysql_db_query($dbname,$sql);
if ($result){
	echo "<H3>แก้ไข หัวข้อรูปภาพเรียบร้อยแล้ว</H3>";
	echo "<A HREF='admin.php'> กลับหน้าหลัก </A>";
}else{
		echo "<H3>ERROR : ไม่สามารถแก้ไขหัวข้อรูปภาพได้</H3>"; 
}
mysql_close();
?>