<?
$title=$_POST['title'];
$id_edit=$_POST['id_edit'];

if ($title=="") {	
	echo "<H3>ERROR : ��سҡ�͡��Ǣ���ٻ�Ҿ���¤�Ѻ..</H3>"; 
	exit();
} 
include "connect.php";
$sql="update tb_title set name_title='$title' where id_title='$id_edit' ";
$result=mysql_db_query($dbname,$sql);
if ($result){
	echo "<H3>��� ��Ǣ���ٻ�Ҿ���º��������</H3>";
	echo "<A HREF='admin.php'> ��Ѻ˹����ѡ </A>";
}else{
		echo "<H3>ERROR : �������ö�����Ǣ���ٻ�Ҿ��</H3>"; 
}
mysql_close();
?>