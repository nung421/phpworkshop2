<?
$newtype[1]="���ǻ�Ъ�����ѹ��";
$newtype[]="����ͺ��";
$newtype[]="�����Ѻ��Ѥçҹ ";
$newtype[]="���ǻ�СǴ�Ҥ�";

function displaydate($x) {
	$date_m=array("�.�.","�.�.","��.�.","��.�.","�.�.","��.�.","�.�.","�.�.","�.�.","�.�.","�.�.","�.�.");

	$date_array=explode("-",$x);
	$y=$date_array[0]+543;
	$m=$date_array[1]-1;
	$d=$date_array[2];

	$m=$date_m[$m];

	$displaydate="$d $m $y";
	return $displaydate;
} 
?>