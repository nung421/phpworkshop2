<?
$id_prd=$_GET[id_prd];
?>
<HTML>
<HEAD><TITLE>ร้านค้าออนไลน์</TITLE></HEAD>
<BODY>
<H2>:: ร้านค้าออนไลน์  ::</H2>
<P> 
[ <A HREF="index.php">หน้าแรก</A> ] 
[ <A HREF="basket.php">ดูตะกร้าสินค้า</A> ] 
</P>
<TABLE WIDTH="770" BORDER="0">
  <TR>
    <TD WIDTH="174" HEIGHT="200" VALIGN="top" BGCOLOR="#EAEAEA">
	<CENTER><B>ประเภทสินค้า</B></CENTER>    
<?
	include "connect.php";
	include "type_list.php";
?>
    <P>&nbsp;</P></TD>
    <TD WIDTH="580" VALIGN="top"><div align="center">
      <TABLE WIDTH="100%"  BORDER="0" cellspacing="4">
<?
	$sql="select * from tb_product where id_prd='$id_prd' ";
	$result=mysql_db_query($dbname,$sql);
	$rs=mysql_fetch_array($result);
		$id_prd=$rs[id_prd];
		$code=sprintf("%05d",$id_prd);
		$name_prd=$rs[name_prd];
		$detail_prd=$rs[detail_prd];
		$ref_id_type=$rs[ref_id_type];
		$price_prd=$rs[price_prd];
		$photo_prd=$rs[photo_prd];

		if ($photo_prd=="") {
			$photo_prd="temp.jpg";
		}
		echo "
					<TR>
						<TD WIDTH='20%' VALIGN='top'> 
							<IMG SRC='photo/$photo_prd'>
						</TD>
						<TD WIDTH='80%' VALIGN='top'> 
							<B>รหัสสินค้า :</B> $code <BR>
							<B>ชื่อสินค้า : </B>$name_prd <BR>
							<B>ราคา : </B>$price_prd บาท<BR><BR>
							<B>รายละเอียด :</B> <BR>
							$detail_prd <BR><BR>

							[ <A HREF='basket_add.php?id_prd=$id_prd'>หยิบใส่ตะกร้า </A>] 
							</TD>
					</TR>";
?>      
      </TABLE>
	</TD>
  </TR>
</TABLE>
</BODY>
</HTML>