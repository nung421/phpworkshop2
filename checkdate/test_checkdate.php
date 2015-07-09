<?
echo "<H3>ตรวจสอบวันที่ 31 เดือน 12 ปี 2006 </H3>";
if (checkdate(12, 31, 2006)) {	
	echo "YES<BR>";
} else {	
	echo "NO<BR>";
}

echo "<HR>";

echo "<H3>ตรวจสอบวันที่ 29 เดือน 2 ปี 2006 </H3>";
if (checkdate(2, 29, 2006)) {
	echo "YES<BR>";
} else {	
	echo "NO<BR>";
}
?>