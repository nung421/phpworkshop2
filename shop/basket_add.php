<?
session_start();
$id_prd=$_GET[id_prd];

session_register("sess_id");
session_register("sess_name");
session_register("sess_price");
session_register("sess_num");

if (count($sess_id)=="0") {
	$check=1;
} else  if (!in_array($id_prd, $sess_id)) {
	$check=1;
}

if ($check==1) {
	include "connect.php";
	$sql="select * from tb_product where id_prd='$id_prd' ";
	$result=mysql_db_query($dbname,$sql);
	$rs=mysql_fetch_array($result);

	$sess_id[]=$rs[id_prd];
	$sess_name[]=$rs[name_prd];
	$sess_price[]=$rs[price_prd];
	$sess_num[]=1;

}
header("Location: basket.php");
?>