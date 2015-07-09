<?
$id_test=$_GET[id_test];
include "connect.php";
$sql="select * from tb_test where id='$id_test' ";
$result=mysql_db_query("$dbname",$sql);
$r=mysql_fetch_array($result);
$id=$r[id];
$question=$r[question];
$choice1=$r[choice1];
$choice2=$r[choice2];
$choice3=$r[choice3];
$choice4=$r[choice4];
$answer=$r[answer];

?>
<HTML>
<HEAD><TITLE>ฟอร์มแก้ไขแบบทดสอบ</TITLE></HEAD>
<BODY>
<h1>ฟอร์มแก้ไขแบบทดสอบ</h1>
<FORM METHOD=POST ACTION="edit_test2.php">
<TABLE>
<TR>
	<TD>คำถาม :</TD>
	<TD><TEXTAREA NAME="question" COLS="40" ROWS="2"><?=$question?></TEXTAREA></TD>
</TR>
<TR>
	<TD height="26">ตัวเลือก 1 :</TD>
	<TD><INPUT NAME="choice1" TYPE="text" size="30" VALUE="<?=$choice1?>"></TD>
</TR>
<TR>
	<TD>ตัวเลือก 2 :</TD>
	<TD><INPUT NAME="choice2" TYPE="text" size="30" VALUE="<?=$choice2?>"></TD>
</TR>
<TR>
	<TD>ตัวเลือก 3 :</TD>
	<TD><INPUT NAME="choice3" TYPE="text" size="30" VALUE="<?=$choice3?>"></TD>
</TR>
<TR>
	<TD>ตัวเลือก 4 :</TD>
	<TD><INPUT NAME="choice4" TYPE="text" size="30" VALUE="<?=$choice4?>"></TD>
</TR>
<TR>
	<TD>คำตอบที่ถูก :</TD>
	<TD>
<?
if ($answer==1) { 	
	$s1="selected";
} else if ($answer==2) { 	
	$s2="selected";
} else if ($answer==3) { 	
	$s3="selected";
} else  { 	
	$s4="selected"; 
} 
?>
		<SELECT NAME="answer">
		<OPTION VALUE="1" <?=$s1?>>ตัวเลือก 1</OPTION>
		<OPTION VALUE="2" <?=$s2?>>ตัวเลือก 2</OPTION>
		<OPTION VALUE="3" <?=$s3?>>ตัวเลือก 3</OPTION>
		<OPTION VALUE="4" <?=$s4?>>ตัวเลือก 4</OPTION>
		</SELECT>
	</TD>
</TR>
</TABLE>
<P><INPUT TYPE="submit" VALUE="Submit"><INPUT TYPE="reset" VALUE="Reset"></P>
<INPUT TYPE="hidden" NAME="id_test" VALUE="<?=$id_test?>">
</FORM>
</BODY>
</HTML>