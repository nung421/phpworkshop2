<?
session_start();
if ($sess_adminid<>session_id()) { 
	header( "Location: admin.php"); exit(); 
}
?>
<HTML>
<HEAD><TITLE>��ҹ����͹�Ź� ����Ѻ�������к�</TITLE></HEAD>
<BODY>
<?  include "admin_menu.php"; ?>
<BR>
<H3>�Թ�յ�͹�Ѻ�������к���ҹ�Թ����͹�Ź�</H3>
</BODY>
</HTML>