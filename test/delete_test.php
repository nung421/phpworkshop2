<?
$id_test=$_GET['id_test'];

include "connect.php";
$sql="delete from tb_test where id=$id_test";
mysql_db_query($dbname,$sql);

echo "<h2><a href='admin.php'>แบบทดสอบถูกลบเรียบร้อยแล้วครับ</a></h2>";
?>