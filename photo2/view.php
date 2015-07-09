<?
$id_photo=$_GET['id_photo'];

include "connect.php";
$sql="select * from tb_photo where id_photo='$id_photo' ";
$result=mysql_db_query($dbname,$sql);
$r=mysql_fetch_array($result);
$name_photo=$r[name_photo];
$detail_photo=$r[detail_photo];
mysql_close();
?>
<HTML>
<HEAD><TITLE> PHOTO GALLERY II</TITLE></HEAD>
<BODY>
<H2>PHOTO GALLERY II</H2>
<? 
echo "<B>รายละเอียดของรูปภาพ : </B>$detail_photo<BR><BR>"; 
echo "<IMG SRC='images_large/$name_photo'><BR>";
?>
</BODY>
</HTML>