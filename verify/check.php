<?
session_start();
$user=$_POST['user'];
$pass=$_POST['pass'];
$code=$_POST['code'];

if ($user=="admin" and $pass=="1234") {
	
	if ($code==$_SESSION['verify_value']) {
		echo "<H3>��ҹ��ҹ��õ�Ǩ�ͺ���º�������� :) </H3>"; 
	} else {
		echo "<H3>ERROR : ��ҹ��͡ Code ���ç�Ѻ����˹���� </H3>";
	}

} else {
	echo "<H3>ERROR : Username ���� Password ���١��ͧ </H3>";
}
unset($_SESSION['verify_value']);
session_destroy();
?>