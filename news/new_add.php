<?
session_start();
if ($_SESSION[sess_userid]<>session_id()) { 
	header( "Location: admin.php"); exit(); 
}
include "function.php";
?>
<HTML>
<HEAD><TITLE>���������������</TITLE></HEAD>
<BODY>
<H2>���������������</H2>
<FORM ACTION="new_add2.php" METHOD="POST" ENCTYPE="multipart/form-data">
  <TABLE>
    <TR> 
      <TD><B>��Ǣ�͢��� : </B></TD>
      <TD><INPUT NAME="title" TYPE="text" SIZE="50"> *</TD>
    </TR>
    <TR> 
      <TD><B>������ : </B></TD>
     <TD>
			<SELECT NAME="type">
			<OPTION VALUE="0">-- ���͡ -- </OPTION>
			<?
			for ($i=1;$i<=count($newtype);$i++) {
				echo "<OPTION VALUE='$i'>$newtype[$i]</OPTION>";
			}
			?> 
			 </SELECT> *
	 </TD>
    </TR>
    <TR> 
      <TD VALIGN="top"><B>������ :</B></TD>
      <TD><TEXTAREA NAME="detail" COLS="55" ROWS="8"></TEXTAREA>*</TD>
    </TR>
    <TR> 
      <TD VALIGN="top"><B>�ٻ�Ҿ :</B></TD>
      <TD><INPUT NAME="photo" TYPE="file" ></TD>
    </TR>
    <TR> 
      <TD>&nbsp;</TD>
      <TD><INPUT TYPE="Submit" VALUE="Submit"> <INPUT TYPE="Reset" VALUE="Reset"> </TD>
    </TR>
  </TABLE>
</FORM>
[ <A HREF="new_main.php">��Ѻ˹����ѡ</A> ] 
</BODY>
</HTML>