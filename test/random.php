<HTML>
<HEAD><TITLE>แบบทดสอบออนไลน์ (Random)</TITLE></HEAD>
<BODY>
<H1>แบบทดสอบออนไลน์ (Random)</H1>
<FORM METHOD=POST ACTION="random_check.php">
<?
$number=1;
include "connect.php";
$sql="SELECT * FROM tb_test ORDER BY RAND() LIMIT 0,5";
$result=mysql_db_query("$dbname",$sql);
while ($r=mysql_fetch_array($result)) { 	
	$id=$r[id];
	$question=$r[question];
	$choice1=$r[choice1];
	$choice2=$r[choice2];
	$choice3=$r[choice3];
	$choice4=$r[choice4];

	echo "<B>ข้อ $number. $question </B><BR>
	<INPUT TYPE='radio' NAME='select_$id' VALUE='1'> $choice1 <BR>
	<INPUT TYPE='radio' NAME='select_$id' VALUE='2'> $choice2 <BR>
	<INPUT TYPE='radio' NAME='select_$id' VALUE='3'> $choice3 <BR>
	<INPUT TYPE='radio' NAME='select_$id' VALUE='4'> $choice4 
	<INPUT TYPE='hidden' NAME='total_question[]' VALUE='$id'>
	<HR>	";
	$number++;
} 
?>
<INPUT TYPE="submit" VALUE="Submit"><INPUT TYPE="reset" VALUE="Reset">
</FORM>
</BODY>
</HTML>