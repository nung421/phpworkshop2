<?
session_start();
if ($_SESSION[sess_userid]<>session_id()) { 
	header( "Location: admin.php"); exit(); 
}
$id_edit=$_GET[id_edit];

include "function.php";
include "connect.php";
$sql="select * from tb_new where id_new='$id_edit'";
$result=mysql_db_query($dbname,$sql);
$r=mysql_fetch_array($result);
	$id_new=$r[id_new];
	$title_new=$r[title_new];
	$type_new=$r[type_new];
	$detail_new=$r[detail_new];
	$photo_new=$r[photo_new];
?>
<HTML>
<HEAD><TITLE>��䢢������</TITLE></HEAD>
<BODY>
<H2>��䢢������</H2>
<FORM ACTION="new_edit2.php" METHOD="POST" ENCTYPE="multipart/form-data">
  <TABLE>
    <TR> 
      <TD><B>��Ǣ�͢��� : </B></TD>
      <TD><INPUT NAME="title" TYPE="text" SIZE="50" VALUE="<?=$title_new?>"> *</TD>
    </TR>
    <TR> 
      <TD><B>������ : </B></TD>
     <TD>
			<SELECT NAME="type">
			<OPTION VALUE="0">-- ���͡ -- </OPTION>
			<?
			for ($i=1;$i<=count($newtype);$i++) {
				if ($type_new==$i) {
					echo "<OPTION VALUE='$i' SELECTED>$newtype[$i]</OPTION>";
				} else {
					echo "<OPTION VALUE='$i' >$newtype[$i]</OPTION>";
				}
			}
			?> 
			 </SELECT> *
	 </TD>
    </TR>
    <TR> 
      <TD VALIGN="top"><B>������ :</B></TD>
      <TD><TEXTAREA NAME="detail" COLS="55" ROWS="8"><?=$detail_new?></TEXTAREA>*</TD>
    </TR>
    <TR> 
      <TD VALIGN="top"><B>�ٻ�Ҿ :</B></TD>
      <TD>
	  <?
		if ($photo_new) {
		   echo "<INPUT TYPE='checkbox' NAME='chkdel' VALUE='1'> ź�ٻ�Ҿ ";
		   echo "<A HREF='photo/$photo_new' TARGET='_blank'> �ʴ��ٻ�Ҿ </A><BR>"; 
		} else {
			echo "<INPUT NAME='photo' TYPE='file' ><BR>";
		}
	  ?>
	  </TD>
    </TR>
    <TR> 
      <TD>
				<INPUT TYPE="hidden" NAME='id_edit' VALUE="<?=$id_edit?>">
	          <INPUT NAME="photo_del" TYPE="hidden"  VALUE="<?=$photo_new?>">
	  </TD>
      <TD><INPUT TYPE="Submit" VALUE="Submit"> 
	  <INPUT TYPE="Reset" VALUE="Reset"> </TD>
    </TR>
  </TABLE>
</FORM>
[ <A HREF="new_main.php">��Ѻ˹����ѡ</A> ] 
</BODY>
</HTML>