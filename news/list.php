<?
$id_type=$_GET['id_type'];
include "function.php";
include "connect.php";
?>
<HTML>
<HEAD><TITLE> ระบบจัดการข่าวสาร </TITLE></HEAD>
<BODY>
<H2>:: ระบบจัดการข่าวสาร ::</H2>
<?
echo "<B>$newtype[$id_type]</B><BR>";
echo "<UL>";
$sql="select * from tb_new where type_new='$id_type' order by date_new desc ";
$result=mysql_db_query($dbname,$sql);
while($r=mysql_fetch_array($result)) {
	$id_new=$r[id_new];
	$title_new=$r[title_new];
	$type_new=$r[type_new];
	$date_new=displaydate($r[date_new]);

	echo "<LI>[$date_new] &nbsp;<A HREF='view.php?id_view=$id_new' TARGET='_blank'>$title_new</A></LI>";
}
echo "</UL>";
?>
</BODY>
</HTML>