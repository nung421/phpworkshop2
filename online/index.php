<?
//  ��Ѻ��ا��ǹ��� 1
$page=$_GET[page];
if ($page=="") {
		$page=1;
}
$each=5;
?>
<HTML>
<HEAD>
	<TITLE>��������͹�Ź�</TITLE>
	<SCRIPT>
		function copy(onlinetext) {
			window.clipboardData.setData("Text" ,onlinetext)
		}
	</SCRIPT>
</HEAD>
<BODY>
<H2>��������͹�Ź�</H2>
- <A HREF="add.php">������������´</A> -  <A HREF="search.php">�������͹���</A> - 
<P>
  <TABLE BORDER="1">
  <TR BGCOLOR="#EFEFEF">
    <TD><DIV ALIGN="center"><B>����</B></DIV></TD>
    <TD><DIV ALIGN="center"><B>����</B></DIV></TD>
    <TD><DIV ALIGN="center"><B>��</B></DIV></TD>
    <TD><DIV ALIGN="center"><B>�йӵ��</B></DIV></TD>
    <TD><DIV ALIGN="center"><B>msn</B></DIV></TD>
    <TD><DIV ALIGN="center"><B>yahoo</B></DIV></TD>
    <TD><DIV ALIGN="center"><B>icq</B></DIV></TD>
    <TD><DIV ALIGN="center"><B>qq</B></DIV></TD>
    <TD><DIV ALIGN="center"><B>�ѧ��Ѵ</B></DIV></TD>
    <TD><DIV ALIGN="center"><B>�ʴ�</B></DIV></TD>
  </TR>
  <?
	include "connect.php";
	include "provincelist.php";

//  ��Ѻ��ا��ǹ��� 2
	$sql="select * from tb_online";
	$result=mysql_db_query($dbname,$sql);
	$total=mysql_num_rows($result);

	$totalpages=ceil($total/$each);
	$goto = ($page-1)*$each;

	$sql="select * from tb_online  order by id desc limit $goto,$each";	
	$result=mysql_db_query($dbname,$sql);

	while ($rs=mysql_fetch_array($result)) {
		$id=$rs[id];
		$fname=$rs[fname];
		$sex=$rs[sex];
		$province=$rs[province];
		$photo=$rs[photo];
		$msn=$rs[msn];
		$yahoo=$rs[yahoo];
		$icq=$rs[icq];
		$qq=$rs[qq];
		$suggest=$rs[suggest];
?>
  <TR>
    <TD><DIV ALIGN="center"><? printf("%05d",$id); ?> </DIV></TD>
    <TD><DIV ALIGN="center"><? echo "$fname"; ?> </DIV></TD>
    <TD><DIV ALIGN="center">
		<? 
		if ($sex=="M") {
			echo "���";
		} else { 
			echo "˭ԧ";
		 }
		?> </DIV></TD>
    <TD><? echo "$suggest"; ?></TD>
    <TD><DIV ALIGN="center">
		<?
		if ($msn<>"") { 
			echo " <A HREF=\"javascript:copy('$msn')\">
				<IMG SRC='msn.gif' BORDER='0' ALT='��ԡ���� Copy ����� $msn'></A>"; 
		} else {
			echo "-";
		}
		?>
		</DIV></TD>
    <TD><DIV ALIGN="center">
		<?
		if ($yahoo<>"") { 
			echo " <A HREF=\"javascript:copy('$yahoo')\">
			<IMG SRC='yahoo.gif' BORDER='0' ALT='��ԡ���� Copy ����� $yahoo'></A>"; 
		} else {
			echo "-";
		}
		?>
		</DIV>	</TD>
    <TD><DIV ALIGN="center">
		<?
		if ($icq<>"") { 
			echo " <A HREF=\"javascript:copy('$icq')\">
			<IMG SRC='icq.gif' BORDER='0' ALT='��ԡ���� Copy ���� $icq'></A>"; 
		} else {
			echo "-";
		}
		?>
		</DIV>	</TD>
    	<TD><DIV ALIGN="center">
		<?
		if ($qq<>"") { 
			echo " <A HREF=\"javascript:copy('$qq')\">
			<IMG SRC='qq.gif' BORDER='0' ALT='��ԡ���� Copy ���� $qq'></A>"; 
		} else {
			echo "-";
		}
		?>
		</DIV>	</TD>
    	<TD><DIV ALIGN="center"><? echo "$p[$province]"; ?> </DIV></TD>
	<TD><DIV ALIGN="center"><A HREF="view.php?id=<? echo $id; ?>">�ʴ�</A> 			</DIV></TD>
  </TR>
  <? }  ?>
</TABLE>
<BR>
<?
//  ��Ѻ��ا��ǹ��� 3
	if ($totalpages>1) {
		echo "<B>˹�� $page</B><BR>";
		for ($i=1;$i<=$totalpages;$i++) {
				echo "| <A HREF='index.php?page=$i'>$i</A> ";
		}
	}
?>			
</BODY>
</HTML>
