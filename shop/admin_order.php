<?
session_start();
if ($sess_adminid<>session_id()) { 
	header( "Location: admin.php"); exit(); 
}
	include "connect.php";
	$sql="select * from tb_order ";
	$result=mysql_db_query($dbname,$sql);
	$number=mysql_num_rows($result);
	$no=1;
?>
<HTML>
<HEAD><TITLE>��ҹ����͹�Ź� ����Ѻ�������к�</TITLE></HEAD>
<BODY>
<? 
	include "admin_menu.php"; 

	if ($number<>0) {
	echo "
	<P><B>���觫����Թ���</B></P>
	<TABLE BORDER=1>
		<TR BGCOLOR=#E8E8E8> 
			<TD><CENTER><B>����</B></CENTER></TD>
			<TD><CENTER><B>���� - ʡ�</B></CENTER></TD>
			<TD><CENTER><B>����Դ���</B></CENTER></TD>
			<TD><CENTER><B>�Ҥ����</B></CENTER></TD>
			<TD><CENTER><B>[ź]</B></CENTER></TD>
		</TR> ";
	while($rs=mysql_fetch_array($result)) {
		$id_order=$rs[id_order];
		$code_order=sprintf("%05d",$id_order);
		$name_order=$rs[name_order];
		$tel_order=$rs[tel_order];
		$total_order=$rs[total_order];
		echo "
			<TR> 
			<TD><A HREF=\"admin_order_view.php?id_order=$id_order\" TARGET=\"_blank\">$code_order</A></TD>
			<TD>$name_order</TD>
			<TD>$tel_order</TD>
			<TD><CENTER>$total_order</CENTER></TD>
			<TD><A HREF=\"admin_order_delete.php?id_order=$id_order\"
				onclick=\"return confirm('�׹�ѹź���觫����Թ���  $code_order �͡�ҡ�к�')\">[ź]</A></TD>
			</TR>
		</TR>";
		$no++;
	}
	echo "</TABLE>";
	mysql_close();
	} 
?>
</BODY>
</HTML>