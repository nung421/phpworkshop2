<?
$id_prd=$_GET[id_prd];
?>
<HTML>
<HEAD><TITLE>��ҹ����͹�Ź�</TITLE></HEAD>
<BODY>
<H2>:: ��ҹ����͹�Ź�  ::</H2>
<P> 
[ <A HREF="index.php">˹���á</A> ] 
[ <A HREF="basket.php">�ٵС����Թ���</A> ] 
</P>
<TABLE WIDTH="770" BORDER="0">
  <TR>
    <TD WIDTH="174" HEIGHT="200" VALIGN="top" BGCOLOR="#EAEAEA">
	<CENTER><B>�������Թ���</B></CENTER>    
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
							<B>�����Թ��� :</B> $code <BR>
							<B>�����Թ��� : </B>$name_prd <BR>
							<B>�Ҥ� : </B>$price_prd �ҷ<BR><BR>
							<B>��������´ :</B> <BR>
							$detail_prd <BR><BR>

							[ <A HREF='basket_add.php?id_prd=$id_prd'>��Ժ���С��� </A>] 
							</TD>
					</TR>";
?>      
      </TABLE>
	</TD>
  </TR>
</TABLE>
</BODY>
</HTML>