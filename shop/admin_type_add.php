<?
session_start();
if ($sess_adminid<>session_id()) { 
	header( "Location: admin.php"); exit(); 
}
$name=$_POST[name];
if ($name=="") {
	echo "<H3>ERROR : ��سҡ�͡ ���ͻ������Թ���</H3>";
	exit();
}
include "connect.php";
$sql="INSERT INTO tb_type VALUES('','$name')";
$result=mysql_db_query($dbname,$sql);
if ($result) {
	echo "<H3>���� �������Թ������º��������</H3>";
	echo "[ <A HREF=admin_type.php>��ԡ���͡�Ѻ</A> ] ";
} else {
	echo "<H3>ERROR : �������ö�����������Թ�����</H3>";
}	
mysql_close();
?>