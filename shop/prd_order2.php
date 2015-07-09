<?
session_start();
$name=$_POST[name];
$email=$_POST[email];
$tel=$_POST[tel];
$address=$_POST[address];
$total_order=$_POST[total_order];

if ($name=="") {
	echo "<H3>ERROR : กรุณากรอก ชื่อ - สกุล</H3>";
	exit();
} else if ($address=="") {
	echo "<H3>ERROR : กรุณากรอก ที่อยู่ </H3>";
	exit();
}

$datenow=date("Y-m-d");

include "connect.php";
$sql="insert into tb_order values('','$name','$email','$tel','$address','$total_order','$datenow') ";
mysql_db_query($dbname,$sql);

$sql2="select max(id_order) from tb_order ";
$result2=mysql_db_query($dbname,$sql2);
$row=mysql_fetch_row($result2);

for ($i=0;$i<count($sess_id);$i++) {
		$sql3="insert into tb_order_detail values('$row[0]','$sess_id[$i]','$sess_num[$i]','$sess_price[$i]') ";
		mysql_db_query($dbname,$sql3);
}

session_unregister("sess_id");
session_unregister("sess_name");
session_unregister("sess_price");
session_unregister("sess_num");

echo "<H3> รายการสั่งซื้อสินค้าของท่านถูกบันทึกเรียบร้อยแล้ว <BR> ทางเราจะรีบจัดส่งสินค้าในทันที</H3> ";

mysql_close();
?>