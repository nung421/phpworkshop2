<?
$correct=0;
$total=0;
include "connect.php";
$sql="select id,answer from tb_test order by id";
$result=mysql_db_query("$dbname",$sql);
$total=mysql_num_rows($result);
while ($r=mysql_fetch_array($result)) { 	
	$id=$r[id];
	$answer=$r[answer];

	$select="select_".$id;
	if (${$select}==$answer) {
		$correct++;
	}
} 
echo "<h2>ถูกต้องทั้งหมด $correct ข้อ <BR>แบบทดสอบทั้งหมด $total ข้อ</h2>";
?>