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
	echo "<H3>ź �������Թ������º��������</H3>";
	echo "[ <A HREF=admin_type.php>��Ѻ˹����ѡ</A> ] ";
} else {
	echo "<H3>ERROR : �������öź�������Թ�����</H3>";
}
mysql_close();
?>