<?
$id_del=$_GET['id_del'];
$id_title=$_GET['id_title'];
$name_del=$_GET['name_del'];

include "connect.php";
$sql="delete from tb_photo where id_photo=$id_del";
mysql_db_query($dbname,$sql);

if (file_exists("images_large/$name_del")){
	unlink("images_large/$name_del");
}
if (file_exists("images_small/$name_del")){
	unlink("images_small/$name_del");
}

echo "<H3>ź �ٻ�Ҿ �͡�ҡ�к����º��������</H3>";
echo "<A HREF='admin_photo.php?id_title=$id_title'>��ԡ���͡�Ѻ</A>";
mysql_close();
?>