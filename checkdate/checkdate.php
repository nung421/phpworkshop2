<?
$day=$_POST[day];
$month=$_POST[month];
$year=$_POST[year];

if ($day=="" or $month=="" or $year=="") {
		echo "<H3>ERROR : กรุณากรอกข้อมูลให้ครบด้วยครับ </H3>";
		exit();
} 

if (!checkdate($month,$day,$year)) {
		echo "	<H3> $day - $month -$year <BR>";
		echo "	ERROR : วันที่คุณเลือก ไม่มีอยู่ในปฏิทินครับ</H3>";
		exit();
} 

echo "<H3> ผ่านการตรวจสอบวันที่เรียบร้อยแล้วครับ </H3> ";
?>