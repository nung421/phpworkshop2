<?
session_start();
if ($sess_adminid<>session_id()) { 
	header( "Location: admin.php"); exit(); 
}
$id_order=$_GET[id_order];

include "connect.php";
$sql="delete from tb_order where id_order='$id_order' ";
mysql_db_query($dbname,$sql);

$sql="delete from tb_order_detail where ref_id_order='$id_order' ";
mysql_db_query($dbname,$sql);

echo "<H3>ź ���觫����Թ������º��������</H3>";
echo "[ <A HREF=admin_order.php>��Ѻ˹����ѡ</A> ] ";
mysql_close();
?>
