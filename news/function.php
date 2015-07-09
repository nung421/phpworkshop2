<?
$newtype[1]="ข่าวประชาสัมพันธ์";
$newtype[]="ข่าวอบรม";
$newtype[]="ข่าวรับสมัครงาน ";
$newtype[]="ข่าวประกวดราคา";

function displaydate($x) {
	$date_m=array("ม.ค.","ก.พ.","มี.ค.","เม.ย.","พ.ค.","มิ.ย.","ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค.");

	$date_array=explode("-",$x);
	$y=$date_array[0]+543;
	$m=$date_array[1]-1;
	$d=$date_array[2];

	$m=$date_m[$m];

	$displaydate="$d $m $y";
	return $displaydate;
} 
?>