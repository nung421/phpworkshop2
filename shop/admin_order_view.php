<?
$id_order=$_GET[id_order];

include "connect.php";
$sql="select * from tb_order where id_order='$id_order' ";
$result=mysql_db_query($dbname,$sql);
$rs=mysql_fetch_array($result);
$id_order=$rs[id_order];
$code_order=sprintf("%05d",$id_order);
$name_order=$rs[name_order];
$email_order=$rs[email_order];
$tel_order=$rs[tel_order];
$address_order=$rs[address_order];
$date_order=$rs[date_order];
$total_order=$rs[total_order];
?>
<HTML>
<HEAD><TITLE>ร้านค้าออนไลน์</TITLE></HEAD>
<BODY>
<P><H3>ใบสั่งซื้อสินค้า</H3></P>
<TABLE WIDTH="400" BORDER="0" CELLSPACING="1" CELLPADDING="0">
	<TR>
		<TD WIDTH="101">รหัส  : </TD>
		<TD><?=$code_order?></TD>
	</TR>
	<TR>
		<TD WIDTH="101">ชื่อ - สกุล : </TD>
		<TD><?=$name_order?></TD>
	</TR>
	<TR>
		<TD>อีเมล : </TD>
		<TD><?=$email_order?></TD>
	</TR>
	<TR>
		<TD>เบอร์ติดต่อ :</TD>
		<TD><?=$tel_order?></TD>
	</TR>
	<TR>
		<TD>ที่อยู่</TD>
		<TD><?=$address_order?></TD>
	</TR>
	<TR>
		<TD>สั่งซื้อเมื่อ</TD>
		<TD><?=$date_order?></TD>
	</TR>
</TABLE><BR>
<TABLE WIDTH="600"  BORDER="1">
	<TR BGCOLOR="#E8E8E8">
		<TD WIDTH="8%"><div align="center"><B>รหัสสินค้า</B></div></TD>
		<TD WIDTH="60%"><div align="center"><B>ชื่อสินค้า</B></div></TD>
		<TD WIDTH="10%"><div align="center"><B>จำนวน</B></div></TD>
		<TD WIDTH="10%"><div align="center"><B>ราคา</B></div></TD>
		<TD WIDTH="12%"><div align="center"><B>รวม</B></div></TD>
	</TR>
	<?
		$sql="
			SELECT ref_id_prd,name_prd,number,price 
			FROM tb_product, tb_order_detail
			WHERE id_prd = ref_id_prd and ref_id_order='$id_order' ";

		$result=mysql_db_query($dbname,$sql);
		while ($rs=mysql_fetch_array($result)) {
			$ref_id_prd=$rs[ref_id_prd];
			$code=sprintf("%05d",$ref_id_prd);
			$name_prd=$rs[name_prd];
			$number=$rs[number];
			$price=$rs[price];
			$total_unit=$number*$price;
			$total=$total+$total_unit;
			echo "
				<TR>
					<TD>$code</TD>
					<TD>&nbsp;$name_prd</TD>
					<TD><CENTER>$number</CENTER></TD>
					<TD><CENTER>$price</CENTER></TD>
					<TD><CENTER>$total_unit</CENTER></TD>
				 </TR>";
		}
	?>
</TABLE><BR>
<? echo "จำนวนเงินทั้งหมด $total บาท"; ?><BR>
</BODY>
</HTML>
