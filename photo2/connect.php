<?
$host="localhost";
$user="root";
$pw="nung";
$dbname="db_photo2";
$c = mysql_connect($host,$user,$pw);
if (!$c) {
	echo "<h3>ไม่สามารถติดต่อฐานข้อมูลได้</h3>";
	exit();
}
?>