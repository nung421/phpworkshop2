<?
$user=$_POST['user'];
$pass=$_POST['pass'];

if ($user=="admin" and $pass=="1234") {
	session_start();
	session_register("sess_adminid");
	$sess_adminid=session_id();
	header("Location: admin_home.php");
} else {
	echo "<H3>ERROR : Username หรือ Password ไม่ถูกต้อง</H3>";
} 
?>