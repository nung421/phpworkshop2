<?
$id_edit=$_GET[id_edit];
include "connect.php";
$sql="select * from tb_title where id_title='$id_edit' ";
$result=mysql_db_query($dbname,$sql);
$r=mysql_fetch_array($result);
$name_title=$r[name_title];
?>
<HTML>
<HEAD><TITLE> PHOTO GALLERY II</TITLE></HEAD>
<BODY>
<H2>ADMIN : PHOTO GALLERY II</H2>
<FORM METHOD=POST ACTION="admin_edit2.php">
	แก้ไขหัวข้อรูปภาพ <INPUT TYPE="text" NAME="title" VALUE="<?=$name_title?>">
	<INPUT TYPE="hidden" NAME="id_edit" VALUE="<?=$id_edit?>">
	<INPUT TYPE="submit" VALUE="Submit"> 
	<INPUT TYPE="reset" VALUE="Reset"> 
</FORM>
</TABLE>
</BODY>
</HTML>