<?
$host="localhost";
$user="root";
$pw="1234";
$dbname="db_shop";
$c = mysql_connect($host,$user,$pw);
if (!$c) {
	echo "<H3>�������ö�Դ��Ͱҹ��������</H3>";
	exit();
}
?>