<?
$title=$_POST['title'];

if ($title=="") {	
	echo "<H3>ERROR : ��سҡ�͡��Ǣ���ٻ�Ҿ���¤�Ѻ..</H3>"; 
	exit();
} 
include "connect.php";
$sql="insert into tb_title values(null,'$title')";
$result=mysql_db_query($dbname,$sql);
if ($result){
	echo "<H3>������Ǣ���ٻ�Ҿ���º��������</H3>";
	echo "<A HREF='admin.php'> ��Ѻ˹����ѡ </A>";
}else{
		echo "<H3>ERROR : �������ö������Ǣ���ٻ�Ҿ��</H3>"; 
}
mysql_close();
?>