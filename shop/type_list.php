<?
$sql="select * from tb_type";
$result=mysql_db_query($dbname,$sql);
echo "<UL>";
while ($rs=mysql_fetch_array($result)) {
		$id_type=$rs[id_type];
		$name_type=$rs[name_type];
		echo "<LI><A HREF='prd_list.php?id_type=$id_type'>$name_type</A> </LI>";
}
echo "</UL>";
?>