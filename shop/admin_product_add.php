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
<FORM ACTION="admin_product_add2.php" METHOD="post" ENCTYPE="multipart/form-data">
  <P><B>�����Թ�������</B></P>
  <TABLE WIDTH="400" BORDER="0" CELLSPACING="1" CELLPADDING="0">
    <TR>
      <TD WIDTH="101">�����Թ���</TD>
      <TD><INPUT TYPE="text" NAME="name" SIZE="40">* </TD>
    </TR>
    <TR>
      <TD>�������Թ���</TD>
      <TD>
	  <SELECT NAME="ref_id_type">
	  <OPTION VALUE="0">���͡�������Թ���</OPTION>
	  <?
		 include "connect.php";
		$sql="select * from tb_type";
		$result=mysql_db_query($dbname,$sql);
	  	while($rs=mysql_fetch_array($result)) {
			$id_type=$rs[id_type];
			$name_type=$rs[name_type];
			echo "<OPTION VALUE='$id_type'>$name_type</OPTION>";
		}
	  ?>
      </SELECT>
	  *</TD>
    </TR>
    <TR>
      <TD>��������´</TD>
      <TD><TEXTAREA NAME="detail" COLS="40" ROWS="4"></TEXTAREA> * </TD>
    </TR>
    <TR>
      <TD>�Ҥ�</TD>
      <TD><INPUT TYPE="text" NAME="price" SIZE="10"> 
        �ҷ * </TD>
    </TR>
    <TR>
      <TD>�ٻ�Ҿ</TD>
      <TD><INPUT  TYPE="file" NAME="fileupload">		
	  <INPUT TYPE="hidden" NAME="MAX_FILE_SIZE" VALUE="100000"></TD>
    </TR>
      <TD>&nbsp;</TD>
      <TD><INPUT TYPE="submit" NAME="Submit" VALUE="Submit">
        <INPUT TYPE="reset" NAME="Submit2" VALUE="Reset"></TD>
    </TR>
  </TABLE>
</FORM>
</BODY>
</HTML>