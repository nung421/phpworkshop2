<?
$id_test=$_GET['id_test'];

include "connect.php";
$sql="delete from tb_test where id=$id_test";
mysql_db_query($dbname,$sql);

echo "<h2><a href='admin.php'>Ẻ���ͺ�١ź���º�������Ǥ�Ѻ</a></h2>";
?>