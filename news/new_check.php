<?
$user=$_POST[user];
$pass=$_POST[pass];

if ($user=="admin" and $pass=="1234") {
	session_start();
	$_SESSION[sess_userid]=session_id();
	header("Location: new_main.php");
} else {
	echo "<h3>ERROR : Username ���� Password ���١��ͧ</h3>";
	exit();
} 
?>