<HTML>
<HEAD><TITLE> ตรวจสอบวันที่</TITLE></HEAD>
<BODY>
<FORM METHOD=POST ACTION="checkdate.php">
<H2> ฟอร์มตัวอย่างที่ 2 เลือก วัน เดือน ปี </H2>
กรุณาเลือก
<SELECT NAME="day">
		<OPTION VALUE=""> วันที่ </OPTION>
<?
	for ($i=1;$i<=31;$i++) {
			echo "<OPTION VALUE='$i'>$i</OPTION>";
	}
?>
</SELECT>
<SELECT NAME="month">
		<OPTION VALUE=""> เดือน </OPTION>
<?
	$thai_m=array("","มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฏาคม",
"สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม");
	for ($i=1;$i<=12;$i++) {
			echo "<OPTION VALUE='$i'>$thai_m[$i]</OPTION>";
	}
?>
</SELECT>
<SELECT NAME="year">
		<OPTION VALUE=""> ปี </OPTION>
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
