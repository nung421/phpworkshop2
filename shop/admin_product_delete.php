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
	echo "<H3>ź �Թ������º��������</H3>";
	echo "[ <A HREF=admin_product.php>��Ѻ˹����ѡ</A> ] ";
} else {
	echo "<H3>ERROR : �������öź�Թ�����</H3>";
}
mysql_close();
?>