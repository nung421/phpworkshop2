<?
$correct=0;
$total=count($total_question);
include "connect.php";
$sql="select id,answer from tb_test order by id";
$result=mysql_db_query("$dbname",$sql);
while ($r=mysql_fetch_array($result)) { 	
	$id=$r[id];
	$answer=$r[answer];

	if (in_array($id, $total_question)) {
		$select="select_".$id;
		if (${$select}==$answer) {
			$correct++;
		}
	}
} 
echo "<h2>�١��ͧ������ $correct ��� <BR>Ẻ���ͺ������ $total ���</h2>";
?>