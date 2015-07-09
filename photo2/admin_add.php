<?
$title=$_POST['title'];

if ($title=="") {	
	echo "<H3>ERROR : กรุณากรอกหัวข้อรูปภาพด้วยครับ..</H3>"; 
	exit();
} 
include "connect.php";
$sql="insert into tb_title values(null,'$title')";
$result=mysql_db_query($dbname,$sql);
if ($result){
	echo "<H3>เพิ่มหัวข้อรูปภาพเรียบร้อยแล้ว</H3>";
	echo "<A HREF='admin.php'> กลับหน้าหลัก </A>";
}else{
		echo "<H3>ERROR : ไม่สามารถเพิ่มหัวข้อรูปภาพได้</H3>"; 
}
mysql_close();
?>