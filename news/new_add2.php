<?
session_start();
if ($_SESSION[sess_userid]<>session_id()) { 
	header( "Location: admin.php"); exit(); 
}
$title=$_POST['title'];
$detail=$_POST['detail'];
$type=$_POST['type'];

$photo=$_FILES['photo']['tmp_name'];
$photo_name=$_FILES['photo']['name'];
$photo_size=$_FILES['photo']['size'];
$photo_type=$_FILES['photo']['type'];

$date_today=date("Y-m-d");
$time_today=date("H:i:s");

if ($title=="" or $detail=="" or $type=="0") {
	echo "<H2> กรุณากรอกข้อมูลให้ครบ </H2>";
	exit();
}

include "connect.php";
$sql="INSERT INTO tb_new VALUES('','$title','$detail','$type','','$date_today','$time_today')";
mysql_db_query("$dbname",$sql);

$ext = strtolower(end(explode('.', $photo_name)));
if ($ext == "jpg" or $ext == "jpeg" or $ext=="gif") {

	$sql="select max(id_new) from tb_new";
	$result=mysql_db_query($dbname,$sql);
	$r=mysql_fetch_array($result);
	$id_max=$r[0];

	$filename=$id_max.".".$ext;
	copy($photo,"photo/$filename");

	$sql="update tb_new set photo_new='$filename' where id_new='$id_max' ";
	mysql_db_query($dbname,$sql);

}
echo "<H3>เพิ่มข่าวสารเรียบร้อยแล้วครับ</H3>";
echo "[ <A HREF=new_main.php>กลับหน้าหลัก</A> ] ";
mysql_close();
?>