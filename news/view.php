<?
$id_view=$_GET[id_view];
include "function.php";
include "connect.php";
$sql="select * from tb_new where id_new='$id_view' ";
$result=mysql_db_query($dbname,$sql);
$r=mysql_fetch_array($result);
	$id_new=$r[id_new];
	$title_new=$r[title_new];
	$detail_new=$r[detail_new];
	$type_new=$r[type_new];
	$photo_new=$r[photo_new];
	$date_new=displaydate($r[date_new]);
	$time_new=$r[time_new];
?>
<HTML>
<HEAD><TITLE> ระบบจัดการข่าวสาร </TITLE>
<BODY>
<H2>:: ระบบจัดการข่าวสาร ::</H2>
<TABLE WIDTH="80%"  CELLSPACING="3" CELLPADDING="5">
<TR>
	<TD BGCOLOR="#D4D4D4">
		<B><?  echo " $newtype[$type_new] >> $title_new <BR> $date_new $time_new";  ?></B>
	</TD>
</TR>
<TR>
	<TD BGCOLOR="#F2F2F2">
	<?
		if ($photo_new<>"") {
			echo "<CENTER><IMG SRC='photo/$photo_new'></CENTER><BR>";
		}
		echo nl2br($detail_new);
	?>
	</TD>
</TR>
</TABLE>
</BODY>
</HTML>