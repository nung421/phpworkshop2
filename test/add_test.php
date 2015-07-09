<?
$question=$_POST['question'];
$choice1=$_POST['choice1'];
$choice2=$_POST['choice2'];
$choice3=$_POST['choice3'];
$choice4=$_POST['choice4'];
$answer=$_POST['answer'];

if ($question=="" or $choice1=="" or $choice2=="" or $choice3=="" or $choice4=="" or $answer=="") {
	echo "<h2>Error : กรุณากรอกแบบทดสอบให้ครบครับ</h2>";
	exit;
}

include "connect.php";
$sql="insert into tb_test values('','$question','$choice1','$choice2','$choice3','$choice4','$answer') ";
mysql_db_query($dbname,$sql);

echo "<h2><a href='admin.php'>บันทึกแบบทดสอบเรียบร้อยแล้ว</a></h2>";

mysql_close();
?>