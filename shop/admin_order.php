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
<HEAD><TITLE>ร้านค้าออนไลน์ สำหรับผู้ดูแลระบบ</TITLE></HEAD>
<BODY>
<? 
	include "admin_menu.php"; 

	if ($number<>0) {
	echo "
	<P><B>ใบสั่งซื้อสินค้า</B></P>
	<TABLE BORDER=1>
		<TR BGCOLOR=#E8E8E8> 
			<TD><CENTER><B>รหัส</B></CENTER></TD>
			<TD><CENTER><B>ชื่อ - สกล</B></CENTER></TD>
			<TD><CENTER><B>เบอร์ติดต่อ</B></CENTER></TD>
			<TD><CENTER><B>ราคารวม</B></CENTER></TD>
			<TD><CENTER><B>[ลบ]</B></CENTER></TD>
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
				onclick=\"return confirm('ยืนยันลบใบสั่งซื้อสินค้า  $code_order ออกจากระบบ')\">[ลบ]</A></TD>
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