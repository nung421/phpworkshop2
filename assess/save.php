<?
$ch1=$_POST['ch1'];	
$ch2=$_POST['ch2'];
$ch3=$_POST['ch3'];	
$ch4=$_POST['ch4'];
$ch5=$_POST['ch5'];	
$ch6=$_POST['ch6'];
$ch7=$_POST['ch7'];	
$ch8=$_POST['ch8'];
$ch9=$_POST['ch9'];	
$ch10=$_POST['ch10'];
$ip = $_SERVER['REMOTE_ADDR']; 
$now = date("Y-m-d H:i:s");

include "connect.php";
$sql="insert into tb_assess values('','$ch1','$ch2','$ch3','$ch4','$ch5','$ch6','$ch7','$ch8','$ch9','$ch10','$ip','$now')";
$result=mysql_db_query($dbname,$sql);
if (!$result) {
	echo "ไม่สามารถบันทึกข้อมูลได้";
	exit;
}
echo "<H3>ขอบคุณครับที่ช่วยตอบแบบประเมิน </H3>";
?>