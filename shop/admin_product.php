<?
session_start();
if ($sess_adminid<>session_id()) { 
	header( "Location: admin.php"); exit(); 
}
include "connect.php";
$sql="select * from tb_product order by id_prd desc";
$result=mysql_db_query($dbname,$sql);
$number=mysql_num_rows($result);
$no=1;
?>
<HTML>
<HEAD><TITLE>��ҹ����͹�Ź� ����Ѻ�������к�</TITLE>
</HEAD>
<BODY>
<? 
	include "admin_menu.php"; 

	if ($number<>0) {
	echo "
	<P><strong>�ʴ��Թ���</strong></P>
	<TABLE BORDER=1>
		<TR BGCOLOR=#E8E8E8> 
			<TD><CENTER><B>�����Թ���</B></CENTER></TD>
			<TD><CENTER><B>�Թ���</B></CENTER></TD>
			<TD><CENTER><B>�������Թ���</B></CENTER></TD>
			<TD><CENTER><B>�Ҥ�</B></CENTER></TD>
			<TD><CENTER><B>[���]</B></CENTER></TD>
			<TD><CENTER><B>[ź]</B></CENTER></TD>
		</TR> ";

	while($rs=mysql_fetch_array($result)) {
		$id_prd=$rs[id_prd];
		$code_prd=sprintf("%05d",$id_prd);
		$name_prd=$rs[name_prd];
		$ref_id_type=$rs[ref_id_type];
		$price_prd=$rs[price_prd];
		$photo_prd=$rs[photo_prd];


		$sql2="select name_type from tb_type where id_type='$ref_id_type' ";
		$result2=mysql_db_query($dbname,$sql2);
		$rs2=mysql_fetch_array($result2);

		$name_type=$rs2[name_type];

		echo "
			<TR> 
			<TD>$code_prd</TD>
			<TD>$name_prd</TD>
			<TD>$name_type</TD>
			<TD>$price_prd</TD>
			<TD><A HREF=\"admin_product_edit.php?id_edit=$id_prd\">[���]</A></TD>
			<TD><A HREF=\"admin_product_delete.php?id_del=$id_prd&photo_del=$photo_prd\" 
				onclick=\"return confirm('�׹�ѹź�������Թ��� $name_prd �͡�ҡ�к�')\">[ź]</A></TD>
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