<?
$id=$_GET[id];

include "connect.php";
$sql="select * from tb_online  where id='$id' ";
$result=mysql_db_query($dbname,$sql);
$rs=mysql_fetch_array($result);
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
<HTML>
<HEAD><TITLE> ��������͹�Ź�</TITLE></HEAD>
<BODY>
<H2>�ʴ���������´�ͧ�س <? echo "$fname"; ?></H2>
<TABLE>
<TR>
	<TD>���� : </TD>
	<TD><? echo "$fname"; ?></TD>
</TR>
<TR>
	<TD>�� : </TD>
	<TD>			
			<? 
				if ($sex=="M") {
					echo "���";
				 } else { 
					 echo "˭ԧ";
				 }
			?>
	</TD>
</TR>
<TR>
	<TD>�ѧ��Ѵ  : </TD>
	<TD>
		<?
			include "provincelist.php";
			echo "$p[$province]";
		?>
	</TD>
</TR>
<TR>
	<TD>�ٻ�Ҿ : </TD>
	<TD>
	<?
			if ($photo=="") {
					echo " - ";
			}else {
					echo "<IMG SRC='photo/$photo'>";
			}
	?>
	</TD>
</TR>
<TR>
	<TD>����� <IMG SRC='msn.gif'> : </TD>
	<TD><? echo "$msn"; ?></TD>
</TR>
<TR>
	<TD>����� <IMG SRC='yahoo.gif'>: </TD>
	<TD><? echo "$yahoo"; ?></TD>
</TR>
<TR>
	<TD>���� <IMG SRC='icq.gif'> : </TD>
	<TD><? echo "$icq"; ?></TD>
</TR>
<TR>
	<TD>���� <IMG SRC='qq.gif'>: </TD>
	<TD><? echo "$qq"; ?></TD>
</TR>
<TR>
	<TD>�йӵ�� : </TD>
	<TD><? echo "$suggest"; ?></TD>
</TR>
</TABLE>
<A HREF="index.php"> << Back </A>
</BODY>
</HTML>