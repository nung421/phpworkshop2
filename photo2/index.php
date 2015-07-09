<HTML>
<HEAD><TITLE> PHOTO GALLERY II</TITLE></HEAD>
<BODY>
<H2>PHOTO GALLERY II</H2>
<?
$no=0;
include "connect.php";
$sql="select * from tb_title order by id_title desc";
$result=mysql_db_query($dbname,$sql);
$num=mysql_num_rows($result);
if($num>0) {
	echo "
	<TABLE BORDER=1 >
	<TR BGCOLOR=#EEEEEE> 
    <TD><B>ลำดับ</B></TD>
    <TD><B>หัวข้อรูปภาพ</B></TD>
    <TD><B>จำนวนรูปภาพ</B></TD>
  </TR>";
	while ($r=mysql_fetch_array($result)) {
		$id_title=$r[id_title];
		$name_title=$r[name_title];

		$sql2="select id_photo from tb_photo where ref_title='$id_title' ";
		$result2=mysql_db_query($dbname,$sql2);
		$count=mysql_num_rows($result2);
		$no++;
		echo "
		<TR>
			<TD><CENTER>$no</CENTER></TD>
			<TD><A HREF='list.php?id_title=$id_title'>$name_title</A></TD>
			<TD><CENTER>$count</CENTER></TD>
		</TR>"; 
	} 
}
  ?> 
</TABLE>
</BODY>
</HTML>