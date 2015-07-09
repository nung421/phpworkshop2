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

echo "<H3>ลบ ใบสั่งซื้อสินค้าเรียบร้อยแล้ว</H3>";
echo "[ <A HREF=admin_order.php>กลับหน้าหลัก</A> ] ";
mysql_close();
?>
