<HTML>
<HEAD><TITLE> PHOTO GALLERY II</TITLE></HEAD>
<BODY>
<H2>ADMIN : PHOTO GALLERY II</H2>
<FORM METHOD=POST ACTION="admin_add.php">
	������Ǣ���ٻ�Ҿ <INPUT TYPE="text" NAME="title">
	<INPUT TYPE="submit" VALUE="Submit"> 
	<INPUT TYPE="reset" VALUE="Reset"> 
</FORM>
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
    <TD><B>�ӴѺ</B></TD>
    <TD><B>��Ǣ���ٻ�Ҿ</B></TD>
    <TD><B>���</B></TD>
    <TD><B>ź</B></TD>
  </TR>";
	while ($r=mysql_fetch_array($result)) {
		$id_title=$r[id_title];
		$name_title=$r[name_title];
		$no++;
		echo " 
		<TR>
		<TD><CENTER>$no</CENTER></TD>
		<TD><A HREF='admin_photo.php?id_title=$id_title'>$name_title</A></TD>
		<TD><A HREF='admin_edit.php?id_edit=$id_title'>���</A></TD>
		<TD><A HREF='admin_del.php?id_del=$id_title' onclick=\"return confirm('�س��㨷���ź��Ǣ�� $name_title ����ٻ�Ҿ㹹�� �͡�ҡ�к� ?')\"> ź </a> 
		</TD> </TR>"; 
		}
	} 
  ?> 
</TABLE>
</BODY>
</HTML>