<?
session_start();
if ($_SESSION[sess_userid]<>session_id()) { 
	header( "Location: admin.php"); exit(); 
}
$id_edit=$_POST['id_edit'];
$title=$_POST['title'];
$detail=$_POST['detail'];
$chkdel=$_POST['chkdel'];

$photo=$_FILES['photo']['tmp_name'];
$photo_name=$_FILES['photo']['name'];
$photo_size=$_FILES['photo']['size'];
$photo_type=$_FILES['photo']['type'];

include "connect.php";
if ($chkdel=="1") {
		$sql="update tb_new set photo_new='' where id_new ='$id_edit' ";
		mysql_db_query($dbname,$sql);
		unlink("photo/$photo_del");
}

if ($photo) {
	$ext = strtolower(end(explode('.', $photo_name)));
	if ($ext == "jpg" or $ext == "jpeg" or $ext=="gif") {

		$filename=$id_edit.".".$ext;
		copy($photo,"photo/$filename");

		$sql="update tb_new set photo_new='$filename' where id_new='$id_edit' ";
		mysql_db_query($dbname,$sql);

	}
}

$sql="update tb_new set  title_new='$title',detail_new='$detail',type_new='$type' where id_new='$id_edit' ";
$result=mysql_db_query($dbname,$sql);
if ($result) {
	echo "<h3>แก้ไข ข่าวเรียบร้อยแล้วครับ</h3>";
	echo "[ <a href=new_main.php>กลับหน้าหลัก</a> ] ";
} else {
	echo "<h3>ไม่สามารถแก้ไขข้อมูลได้</h3>";
}
mysql_close();
?>