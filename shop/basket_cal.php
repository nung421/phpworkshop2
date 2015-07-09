<?
session_start();

if (count($prd_del)==0) {
	$prd_del=array();
}
for ($i=0;$i<count($sess_id);$i++) {
		if (!in_array($sess_id[$i],$prd_del)) {
			$temp_id[]=$sess_id[$i];
			$temp_name[]=$sess_name[$i];
			$temp_price[]=$sess_price[$i];
			$temp_num[]=$prd_num[$i];
		}
}
$sess_id=$temp_id;
$sess_name=$temp_name;
$sess_price=$temp_price;
$sess_num=$temp_num;

if ($calculate) {		
		header("Location: basket.php");
} else if ($complete) {
		header("Location: prd_order.php");
}
?>