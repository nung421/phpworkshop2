<?
$question=$_POST['question'];
$choice1=$_POST['choice1'];
$choice2=$_POST['choice2'];
$choice3=$_POST['choice3'];
$choice4=$_POST['choice4'];
$answer=$_POST['answer'];
$id_test=$_POST['id_test'];

if ($question=="" or $choice1=="" or $choice2=="" or $choice3=="" or $choice4=="" or $answer=="") {
	echo "<h2>Error : กรุณากรอกแบบทดสอบให้ครบครับ</h2>";
	exit;
}

include "connect.php";
$sql="update tb_test set 
			question='$question',
			choice1='$choice1',
			choice2='$choice2',
			choice3='$choice3',
			choice4='$choice4',
			answer='$answer' where id='$id_test' ";
mysql_db_query($dbname,$sql);

echo "<h2><a href='admin.php'>แก้ไขแบบทดสอบเรียบร้อยแล้ว</a></h2>";
?>