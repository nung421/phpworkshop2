<HTML>
<HEAD><TITLE> ระบบจัดการข่าวสาร </TITLE></HEAD>
<BODY>
<H2>:: ระบบจัดการข่าวสาร ::</H2>
<?
include "function.php";
include "connect.php";
for ($i=1;$i<=count($newtype);$i++) {
	echo "<B>$newtype[$i]</B><BR>";
	echo "<UL>";

	$sql="select * from tb_new where type_new='$i' ";
	$result=mysql_db_query($dbname,$sql);
	$total=mysql_num_rows($result);

	$sql="select * from tb_new where type_new='$i' order by date_new desc limit 0,5";
	$result=mysql_db_query($dbname,$sql);
	while($r=mysql_fetch_array($result)) {
		$id_new=$r[id_new];
		$title_new=$r[title_new];
		$type_new=$r[type_new];
		$date_new=displaydate($r[date_new]);
		echo "<LI>[$date_new] &nbsp;<A HREF='view.php?id_view=$id_new' TARGET='_blank'>$title_new</A></LI>";
	}
	if ($total>=5) {
		echo "<LI> <A HREF='list.php?id_type=$i'>more...</A> </LI>";
	}
	echo "</UL>";
}
?>
</BODY>
</HTML>