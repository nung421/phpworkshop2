<HTML>
<HEAD><TITLE>�ʴ�Ẻ���ͺ������</TITLE></HEAD>
<BODY>
<h1>�ʴ�Ẻ���ͺ������</h1>
<TABLE BORDER=1>
  <TR bgcolor="#E9E9E9"> 
    <TD><B>���</B></TD>
    <TD><B>�Ӷ��</B></TD>
    <TD><B>���</B></TD>
    <TD><B>ź</B></TD>
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
		    <TD><a href='edit_test.php?id_test=$id'>���</a></TD>
		    <TD><a href='delete_test.php?id_test=$id' onclick=\"return confirm('�س��㨷���ź�Ӷ����͹���͡�ҡ�к� ?')\">ź</a></TD>
		  </TR>";
	$number++;
}
?>
</TABLE>
<a href="form_test.php"> ����Ẻ���ͺ </a>
</BODY>
</HTML>