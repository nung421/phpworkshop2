<?
session_start();
if ($_SESSION[sess_userid]<>session_id()) { 
	header( "Location: admin.php"); exit(); 
}
?>
<HTML>
<HEAD><TITLE>ระบบจัดการข่าวสาร </TITLE></HEAD>
<BODY>
<H2>:: ระบบจัดการข่าวสารสำหรับ Admin ::</H2>
<P> [ <A HREF="new_add.php">เพิ่มข่าวใหม่</A> ] [ <A HREF="logout.php">ออกจากระบบ</A> ]</P>
<TABLE BORDER="1">
  <TR BGCOLOR="#E8E8E8"> 
    <TD><CENTER><B>No. </B></CENTER></TD>
    <TD><CENTER><B>หัวข้อ</B></CENTER></TD>
	<TD><CENTER><B>ประเภทข่าว</B></CENTER></TD>
	<TD><CENTER><B>วันที่</B></CENTER></TD>
    <TD><CENTER><B>[แก้ไข]</B></CENTER></TD>
    <TD><CENTER><B>[ลบ]</B></CENTER></TD>
  </TR>
  <?
	$no=1;
	include "function.php";
	include "connect.php";
	$sql="select * from tb_new order by id_new desc";
	$result=mysql_db_query($dbname,$sql);
	while($r=mysql_fetch_array($result)) {
		$id_new=$r[id_new];
		$title_new=$r[title_new];
		$type_new=$r[type_new];
		$photo_new=$r[photo_new];
		$date_new=displaydate($r[date_new]);
		$time_new=$r[time_new];
		echo "
			<TR> 
			<TD>$no</TD>	
			<TD>$title_new</TD>
			<TD>&nbsp;$newtype[$type_new]</TD>
			<TD>$date_new</TD>
			<TD><A HREF=\"new_edit.php?id_edit=$id_new\">[แก้ไข]</A></TD>
			<TD><A HREF=\"new_delete.php?id_del=$id_new&photo_del=$photo_new\" onclick=\"return confirm('ยืนยันการลบข่าว  $title_new ')\">[ลบ]</A></TD>
		</TR>";
		$no++;
	}
	mysql_close();
?>
</TABLE>
</BODY>
</HTML>