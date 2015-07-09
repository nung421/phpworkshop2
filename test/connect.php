<?
$host="localhost";
$user="root";
$pw="";
$dbname="db_test";
$c = mysql_connect($host,$user,$pw);
if (!$c) {
	echo "<h3>ไม่สามารถติดต่อฐานข้อมูลได้</h3>";
	exit();
}
?>