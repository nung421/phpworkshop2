<HTML>
<HEAD><TITLE>แสดงแบบทดสอบทั้งหมด</TITLE></HEAD>
<BODY>
<h1>แสดงแบบทดสอบทั้งหมด</h1>
<TABLE BORDER=1>
  <TR bgcolor="#E9E9E9"> 
    <TD><B>ข้อ</B></TD>
    <TD><B>คำถาม</B></TD>
    <TD><B>แก้ไข</B></TD>
    <TD><B>ลบ</B></TD>
  </TR>
  <?
include "connect.php";
$number=1;
$sql="select id,question from tb_test order by id";
$result=mysql_db_query("$dbname",$sql);
while ($r=mysql_fetch_array($result)) {
	$id=$r[id];
	$question=$r[question];

	echo "<TR> 
		    <TD>$number</TD>
		    <TD>$question</TD>
		    <TD><a href='edit_test.php?id_test=$id'>แก้ไข</a></TD>
		    <TD><a href='delete_test.php?id_test=$id' onclick=\"return confirm('คุณแน่ใจที่จะลบคำถามข้อนี้ออกจากระบบ ?')\">ลบ</a></TD>
		  </TR>";
	$number++;
}
?>
</TABLE>
<a href="form_test.php"> เพิ่มแบบทดสอบ </a>
</BODY>
</HTML>