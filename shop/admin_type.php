<?
session_start();
if ($sess_adminid<>session_id()) { 
	header( "Location: admin.php"); exit(); 
}
include "connect.php";
$sql="select * from tb_type";
$result=mysql_db_query($dbname,$sql);
$number=mysql_num_rows($result);
$no=1;
?>
<HTML>
<HEAD><TITLE>��ҹ����͹�Ź� ����Ѻ�������к�</TITLE>
</HEAD>
<BODY>
<?  include "admin_menu.php"; ?>
<FORM  METHOD="post" ACTION="admin_type_add.php">
�����������Թ������� 
  <INPUT TYPE="text" NAME="name">
  <INPUT TYPE="submit" NAME="Submit" VALUE="Submit">
</FORM>
<?
	if ($number<>0) {
		echo "
			<P><B>�ʴ��������Թ���</B></P>
			<TABLE BORDER='1'>
				<TR BGCOLOR='#E8E8E8'> 
				 <TD><CENTER><B>�ӴѺ</B></CENTER></TD>
				<TD><CENTER><B>�������Թ���</B></CENTER></TD>
				<TD><CENTER><B>[���]</B></CENTER></TD>
				<TD><CENTER><B>[ź]</B></CENTER></TD>
		</TR>";
		while($rs=mysql_fetch_array($result)) {
			$id_type=$rs[id_type];
			$name_type=$rs[name_type];

			echo "
				<TR> 
					<TD><CENTER>$no</CENTER></TD>
					<TD>$name_type</TD>
					<TD><A HREF=\"admin_type_edit.php?id_edit=$id_type\">[���]</A></TD>
					<TD><A HREF=\"admin_type_delete.php?id_del=$id_type\" 
					onclick=\" return confirm('�׹�ѹź�������Թ��� $name_type �͡�ҡ�к�')\">[ź]</A></TD>
				</TR>";
			$no++;
		}
		echo "</TABLE>";	
		mysql_close();
	} 
?>
</BODY>
</HTML>