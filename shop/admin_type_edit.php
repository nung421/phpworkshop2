<?
session_start();
if ($sess_adminid<>session_id()) { 
	header( "Location: admin.php"); exit(); 
}
$id_edit=$_GET[id_edit];

include "connect.php";
$sql="select * from tb_type where id_type='$id_edit'";
$result=mysql_db_query($dbname,$sql);
$rs=mysql_fetch_array($result);

$id_type=$rs[id_type];
$name_type=$rs[name_type];
?>
<HTML>
<HEAD><TITLE>ร้านค้าออนไลน์ สำหรับผู้ดูแลระบบ</TITLE>
</HEAD>
<BODY>
<?  include "admin_menu.php"; ?>
<FORM NAME="form1" METHOD="post" ACTION="admin_type_edit2.php">
แก้ไขประเภทสินค้า 
	<INPUT TYPE="text" NAME="name" VALUE="<?=$name_type?>">
	<INPUT TYPE="submit" NAME="Submit" VALUE="Submit">
	<INPUT NAME="id_edit" TYPE="hidden" VALUE="<?=$id_edit?>">	 
</FORM>
</BODY>
</HTML>