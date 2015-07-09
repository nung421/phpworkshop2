<?
session_start();
if ($sess_adminid<>session_id()) { 
	header( "Location: admin.php"); exit(); 
}
?>
<HTML>
<HEAD><TITLE>ร้านค้าออนไลน์ สำหรับผู้ดูแลระบบ</TITLE></HEAD>
<BODY>
<?  include "admin_menu.php"; ?>
<BR>
<H3>ยินดีต้อนรับผู้ดูแลระบบร้านสินค้าออนไลน์</H3>
</BODY>
</HTML>