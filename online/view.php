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
<HEAD><TITLE> ชุมชนคนออนไลน์</TITLE></HEAD>
<BODY>
<H2>แสดงรายละเอียดของคุณ <? echo "$fname"; ?></H2>
<TABLE>
<TR>
	<TD>ชื่อ : </TD>
	<TD><? echo "$fname"; ?></TD>
</TR>
<TR>
	<TD>เพศ : </TD>
	<TD>			
			<? 
				if ($sex=="M") {
					echo "ชาย";
				 } else { 
					 echo "หญิง";
				 }
			?>
	</TD>
</TR>
<TR>
	<TD>จังหวัด  : </TD>
	<TD>
		<?
			include "provincelist.php";
			echo "$p[$province]";
		?>
	</TD>
</TR>
<TR>
	<TD>รูปภาพ : </TD>
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
	<TD>อีเมล <IMG SRC='msn.gif'> : </TD>
	<TD><? echo "$msn"; ?></TD>
</TR>
<TR>
	<TD>อีเมล <IMG SRC='yahoo.gif'>: </TD>
	<TD><? echo "$yahoo"; ?></TD>
</TR>
<TR>
	<TD>เบอร์ <IMG SRC='icq.gif'> : </TD>
	<TD><? echo "$icq"; ?></TD>
</TR>
<TR>
	<TD>เบอร์ <IMG SRC='qq.gif'>: </TD>
	<TD><? echo "$qq"; ?></TD>
</TR>
<TR>
	<TD>แนะนำตัว : </TD>
	<TD><? echo "$suggest"; ?></TD>
</TR>
</TABLE>
<A HREF="index.php"> << Back </A>
</BODY>
</HTML>