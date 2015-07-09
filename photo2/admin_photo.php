<?
$id_title=$_GET[id_title];

include "connect.php";
$sql="select * from tb_title where id_title='$id_title' ";
$result=mysql_db_query($dbname,$sql);
$r=mysql_fetch_array($result);
$name_title=$r[name_title];
?>
<HTML>
<HEAD><TITLE> PHOTO GALLERY II</TITLE></HEAD>
<BODY>
<H2>ADMIN : PHOTO GALLERY II</H2>
<FORM METHOD=POST ACTION="admin_photo_add.php" ENCTYPE="multipart/form-data">
  <TABLE>
    <TR> 
      <TD><div align="right"><B>หัวข้อ :</B></div></TD>
      <TD><?=$name_title?></TD>
    </TR>
    <TR> 
      <TD><div align="right"><B>รูปภาพ :</B></div></TD>
      <TD><INPUT TYPE="file" NAME="photo"></TD>
    </TR>
    <TR> 
      <TD VALIGN="top"><div align="right"><B>คำอธิบายรูปภาพ : </B></div></TD>
      <TD><TEXTAREA NAME="detail" ROWS="2" COLS="35"></TEXTAREA></TD>
    </TR>
    <TR> 
      <TD>&nbsp;</TD>
      <TD><INPUT TYPE="submit" VALUE="Submit"> 
	  <INPUT TYPE="reset" VALUE="Reset">
	  <INPUT TYPE="hidden" NAME="id_title" VALUE="<?=$id_title?>">
      </TD>
    </TR>
  </TABLE>
 <A HREF="admin.php">คลิกเพื่อกลับ</A><BR>
</FORM>
<?
$no=0;
$sql="select * from tb_photo where ref_title='$id_title' order by id_photo";
$result=mysql_db_query($dbname,$sql);
$num=mysql_num_rows($result);
if($num>0) {
	echo "
	<TABLE BORDER=1 >
	<TR BGCOLOR=#EEEEEE> 
    <TD><B>ลำดับ</B></TD>
    <TD><B>รูปภาพ</B></TD>
    <TD><B>รายละเอียด</B></TD>
    <TD><B>ลบ</B></TD>
  </TR>";
	while ($r=mysql_fetch_array($result)) {
		$id_photo=$r[id_photo];
		$name_photo=$r[name_photo];
		$detail_photo=$r[detail_photo];
		$no++;
		echo " 
		<TR>
		<TD><CENTER>$no</CENTER></TD>
		<TD>
			<A HREF='images_large/$name_photo' TARGET='_blank'>
			<IMG SRC='images_small/$name_photo' BORDER=0></A></TD>
		<TD>$detail_photo</TD>
		<TD><A HREF='admin_photo_del.php?id_del=$id_photo&id_title=$id_title&name_del=$name_photo' 
			onclick=\"return confirm('คุณแน่ใจที่จะลบรูป $name_photo ออกจากระบบ?')\">ลบ</A> 
			</TD> </TR>"; 
		}
	} 
  ?>
</TABLE>
</BODY>
</HTML>