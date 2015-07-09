<?
session_start();
$user=$_POST['user'];
$pass=$_POST['pass'];
$code=$_POST['code'];

if ($user=="admin" and $pass=="1234") {
	
	if ($code==$_SESSION['verify_value']) {
		echo "<H3>ท่านผ่านการตรวจสอบเรียบร้อยแล้ว :) </H3>"; 
	} else {
		echo "<H3>ERROR : ท่านกรอก Code ไม่ตรงกับที่กำหนดไว้ </H3>";
	}

} else {
	echo "<H3>ERROR : Username หรือ Password ไม่ถูกต้อง </H3>";
}
unset($_SESSION['verify_value']);
session_destroy();
?>