<HTML>
<HEAD><TITLE> ��Ǩ�ͺ�ѹ���</TITLE></HEAD>
<BODY>
<FORM METHOD=POST ACTION="checkdate.php">
<H2> �����������ҧ��� 2 ���͡ �ѹ ��͹ �� </H2>
��س����͡
<SELECT NAME="day">
		<OPTION VALUE=""> �ѹ��� </OPTION>
<?
	for ($i=1;$i<=31;$i++) {
			echo "<OPTION VALUE='$i'>$i</OPTION>";
	}
?>
</SELECT>
<SELECT NAME="month">
		<OPTION VALUE=""> ��͹ </OPTION>
<?
	$thai_m=array("","���Ҥ�","����Ҿѹ��","�չҤ�","����¹","����Ҥ�","�Զع�¹","�á�Ҥ�",
"�ԧ�Ҥ�","�ѹ��¹","���Ҥ�","��Ȩԡ�¹","�ѹ�Ҥ�");
	for ($i=1;$i<=12;$i++) {
			echo "<OPTION VALUE='$i'>$thai_m[$i]</OPTION>";
	}
?>
</SELECT>
<SELECT NAME="year">
		<OPTION VALUE=""> �� </OPTION>
<?
	for ($i=2006;$i<=2010;$i++) {
			$y=$i+543;
			echo "<OPTION VALUE='$i'>$y</OPTION>";
	}
?>
</SELECT>
<P>
<INPUT TYPE="submit" VALUE="Submit">
<INPUT TYPE="reset" VALUE="Reset">
</FORM>
</BODY>
</HTML>
