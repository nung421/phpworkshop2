<?
$sex=$_POST[sex];
$province=$_POST[province];
$tools=$_POST[tools];

if ($sex=="*" AND $province=="*" AND $tools=="*")  {
	echo "<H3>ERROR : กรุณาเลือกเพศ หรือ จังหวัด หรือ โปรแกรม</H3>";
	exit();
}

?>
<HTML>
<HEAD>
	<TITLE> ชุมชนคนออนไลน์</TITLE>
	<SCRIPT>
			function copy(onlinetext) {
					this.window.clipboardData.setData("Text" ,onlinetext)
			}
	</SCRIPT>
</HEAD>
<BODY>
<H2>ผลการค้นหาข้อมูล</H2>

- <A HREF="add.php">เพิ่มรายละเอียด</A> -  <A HREF="search.php">ค้นหาเพื่อนคุย</A> - 
<P>

  <TABLE BORDER="1">
  <TR BGCOLOR="#EFEFEF">
    <TD><DIV ALIGN="center"><B>รหัส</B></DIV></TD>
    <TD><DIV ALIGN="center"><B>ชื่อ</B></DIV></TD>
    <TD><DIV ALIGN="center"><B>เพศ</B></DIV></TD>
    <TD><DIV ALIGN="center"><B>แนะนำตัว</B></DIV></TD>
    <TD><DIV ALIGN="center"><B>msn</B></DIV></TD>
    <TD><DIV ALIGN="center"><B>yahoo</B></DIV></TD>
    <TD><DIV ALIGN="center"><B>icq</B></DIV></TD>
    <TD><DIV ALIGN="center"><B>qq</B></DIV></TD>
    <TD><DIV ALIGN="center"><B>จังหวัด</B></DIV></TD>
    <TD><DIV ALIGN="center"><B>แสดง</B></DIV></TD>
  </TR>
  <?
	include "connect.php";
	include "provincelist.php";

	$sql="select * from tb_online where";
	$check=0;

	if  ($sex<>"*") {
		$sql.=" sex='$sex' ";
		$check=1;
	} 

	if ($province<>"*") {
		if ($check==1) {
			$sql.=" AND province='$province' ";
		} else {
			$sql.=" province='$province' ";
		}
		$check=1;
	}

	if ($tools<>"*") {
		if ($check==1) {
			$sql.=" AND $tools<>'' ";
		} else {
			$sql.=" $tools<>'' ";
		}
		$check=1;
	}
		
	$sql.="order by id desc";
	//echo "$sql<BR>";
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
					echo "ชาย";
				 } else { 
					 echo "หญิง";
				 }
			?> </DIV></TD>
    <TD><? echo "$suggest"; ?> </TD>
    <TD><DIV ALIGN="center">
			<?
					if ($msn<>"") { 
							echo " <A HREF=\"javascript:copy('$msn')\">
										<IMG SRC='msn.gif' BORDER='0' ALT='คลิกเพื่อ Copy อีเมล $msn'></A>"; 
					} else {
							echo "-";
					}
			?>
			</DIV></TD>
    <TD><DIV ALIGN="center">
			<?
					if ($yahoo<>"") { 
							echo " <A HREF=\"javascript:copy('$yahoo')\">
										<IMG SRC='yahoo.gif' BORDER='0' ALT='คลิกเพื่อ Copy อีเมล $yahoo'></A>"; 
					} else {
							echo "-";
					}
			?>
			</DIV>	</TD>
    <TD><DIV ALIGN="center">
			<?
					if ($icq<>"") { 
							echo " <A HREF=\"javascript:copy('$icq')\">
										<IMG SRC='icq.gif' BORDER='0' ALT='คลิกเพื่อ Copy เบอร์ $icq'></A>"; 
					} else {
							echo "-";
					}
			?>
			</DIV>	</TD>
    <TD><DIV ALIGN="center">
			<?
					if ($qq<>"") { 
							echo " <A HREF=\"javascript:copy('$qq')\">
										<IMG SRC='qq.gif' BORDER='0' ALT='คลิกเพื่อ Copy เบอร์ $qq'></A>"; 
					} else {
							echo "-";
					}
			?>
			</DIV>	</TD>
    <TD><DIV ALIGN="center"><? echo "$p[$province]"; ?> </DIV></TD>
	<TD><DIV ALIGN="center"><A HREF="view.php?id=<? echo $id; ?>">แสดง</A> </DIV></TD>
  </TR>
  <? }  ?>
</TABLE>
</BODY>
</HTML>