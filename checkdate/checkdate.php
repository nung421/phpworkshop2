<?
$day=$_POST[day];
$month=$_POST[month];
$year=$_POST[year];

if ($day=="" or $month=="" or $year=="") {
		echo "<H3>ERROR : ��سҡ�͡���������ú���¤�Ѻ </H3>";
		exit();
} 

if (!checkdate($month,$day,$year)) {
		echo "	<H3> $day - $month -$year <BR>";
		echo "	ERROR : �ѹ���س���͡ ���������㹻�ԷԹ��Ѻ</H3>";
		exit();
} 

echo "<H3> ��ҹ��õ�Ǩ�ͺ�ѹ������º�������Ǥ�Ѻ </H3> ";
?>