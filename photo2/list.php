<?
$id_title=$_GET['id_title'];
include "connect.php";
$sql="select * from tb_title where id_title='$id_title' ";
$result=mysql_db_query($dbname,$sql);
$r=mysql_fetch_array($result);

$name_title=$r['name_title'];
?>
<HTML>
<HEAD><TITLE> PHOTO GALLERY II</TITLE></HEAD>
<BODY>
<?
echo "<H2>PHOTO GALLERY II --> $name_title</H2>";

$sql="select * from tb_photo where ref_title='$id_title' ";
$result=mysql_db_query($dbname,$sql);
$num=mysql_num_rows($result);
if ($num>0) {
	echo "<TABLE BORDER=1 CELLPADDING=5 CELLSPACING=5  BORDERCOLOR='#FFFFFF'>";
	$check=1;
	while($r=mysql_fetch_array($result)) {
			$id_photo=$r[id_photo];
			$name_photo=$r[name_photo];
			$detail_photo=$r[detail_photo];

			if ($check%5 ==1) {
					echo "<TR>";
			}
			echo "
			<TD WIDTH=100 VALIGN='middle' BORDERCOLOR='#000000'>
				<CENTER>
					<A HREF='view.php?id_photo=$id_photo' TARGET='_blank'>
					<IMG SRC='images_small/$name_photo' BORDER=0></A>
				</CENTER>
				</TD>";
			if ($check % 5 == 0) {
				echo "</TR>";
				$check=0;
			} 
			$check++;
	}
	echo "</TABLE>";
}
?>
 <BR><A HREF="index.php">คลิกเพื่อกลับ</A><BR>
</BODY>
</HTML>