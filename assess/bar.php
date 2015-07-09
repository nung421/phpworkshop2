<?
$ch=$_GET[ch];
$field="q".$ch;
$count5=0;
$count4=0;
$count3=0;
$count2=0;
$count1=0;

include "connect.php";
$sql="select $field from tb_assess";
$result=mysql_db_query($dbname,$sql);
$sum=mysql_num_rows($result);
while ($r=mysql_fetch_array($result)) {
	$ques=$r[$field];

	if($ques==5) 	$count5=$count5+1;
	if($ques==4) 	$count4=$count4+1;
	if($ques==3) 	$count3=$count3+1;
	if($ques==2) 	$count2=$count2+1;
	if($ques==1) 	$count1=$count1+1;
}

$p5=round((($count5*100)/$sum),2);
$p4=round((($count4*100)/$sum),2);
$p3=round((($count3*100)/$sum),2);
$p2=round((($count2*100)/$sum),2);
$p1=round((($count1*100)/$sum),2);

$w5=$p5*5;
$w4=$p4*5;
$w3=$p3*5;
$w2=$p2*5;
$w1=$p1*5;

include "question.php";
?>
<HTML>
<HEAD><TITLE>กราฟแท่งแสดงความพึงพอใจในแต่ละข้อ</TITLE></HEAD>
<BODY>
<H2>กราฟแท่งแสดงความพึงพอใจในแต่ละข้อ</H2>
<?
echo "<B>ข้อที่ $ch : $q[$ch] </B> <BR>"; 
echo "จำนวนผู้ตอบแบบประเมิน $sum คน <BR>";
?><P>
<TABLE BORDER="0" CELLPADDING="0" CELLSPACING="1" BGCOLOR="#CCCCCC">
	<TR ALIGN="center" BGCOLOR="#EFEFEF">
    <TD><B>ค่า</B></TD>
    <TD><B>จำนวน</B></TD>
    <TD><B>%</B></TD>
    <TD><B>กราฟแท่ง</B></TD>
  </TR>
	<TR BGCOLOR="#FFFFFF">
    <TD ALIGN="center">5</TD>
    <TD ALIGN="center"><?=$count5?></TD>
    <TD ALIGN="center"><?=$p5?></TD>
    <TD><IMG SRC="bar.gif" WIDTH="<?=$w5?>" HEIGHT="12"></TD>
  </TR>
	<TR BGCOLOR="#FFFFFF">
    <TD ALIGN="center">4</TD>
    <TD ALIGN="center"><?=$count4?></TD>
    <TD ALIGN="center"><?=$p4?></TD>
    <TD><IMG SRC="bar.gif" WIDTH="<?=$w4?>" HEIGHT="12"></TD>
  </TR>
	<TR BGCOLOR="#FFFFFF">
    <TD ALIGN="center">3</TD>
    <TD ALIGN="center"><?=$count3?></TD>
    <TD ALIGN="center"><?=$p3?></TD>
    <TD><IMG SRC="bar.gif" WIDTH="<?=$w3?>" HEIGHT="12"></TD>
  </TR>
	<TR BGCOLOR="#FFFFFF">
    <TD ALIGN="center">2</TD>
    <TD ALIGN="center"><?=$count2?></TD>
    <TD ALIGN="center"><?=$p2?></TD>
    <TD><IMG SRC="bar.gif" WIDTH="<?=$w2?>" HEIGHT="12"></TD>
  </TR>
	<TR BGCOLOR="#FFFFFF">
    <TD ALIGN="center">1</TD>
    <TD ALIGN="center"><?=$count1?></TD>
    <TD ALIGN="center"><?=$p1?></TD>
    <TD><IMG SRC="bar.gif" WIDTH="<?=$w1?>" HEIGHT="12"></TD>
  </TR>
</TABLE>
</BODY>
</HTML>