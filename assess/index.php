<HTML>
<HEAD><TITLE>�к������Թ�͹�Ź�</TITLE></HEAD>
<BODY>
<H2>�����Ẻ�����Թ˹ѧ���</H2>
<FORM METHOD="POST" ACTION="save.php">
<TABLE>
<TR>
	<TD><IMG SRC="phpworkshop.jpg"></TD>
	<TD VALIGN="top">
		<B>���ҧ Web Application ���ҧ����Ҫվ<BR>
		���� PHP ��Ѻ Workshop</B>
	</TD>
</TR>
</TABLE>
<TABLE BORDER="0" CELLPADDING="0" CELLSPACING="1" BGCOLOR="#CCCCCC">
	<TR ALIGN="center" BGCOLOR="#EFEFEF">
    <TD><B>���</B></TD>
    <TD><B>��������´</B></TD>
    <TD><B>�ҡ����ش<BR>5</B></TD>
    <TD><B>�ҡ<BR>4</B></TD>
    <TD><B>�ҹ��ҧ<BR>3</B></TD>
    <TD><B>����<BR>2</B></TD>
    <TD><B>���·���ش<BR>1</B></TD>
  </TR>
<?
	include "question.php";
	for ($i=1;$i<=10;$i++) {
?>
  <TR BGCOLOR="#FFFFFF">
    <TD ALIGN="center"><?=$i?></TD>
    <TD>	&nbsp;<?=$q[$i]?> </TD>
    <TD ALIGN="center">
		<INPUT TYPE="radio" NAME="<? echo "ch".$i; ?>" VALUE="5">
	</TD>
    <TD ALIGN="center">
        <INPUT TYPE="radio" NAME="<? echo "ch".$i; ?>" VALUE="4">
    </TD>
    <TD ALIGN="center">
        <INPUT TYPE="radio" NAME="<? echo "ch".$i; ?>"  VALUE="3" CHECKED>
    </TD>
    <TD ALIGN="center">
        <INPUT TYPE="radio" NAME="<? echo "ch".$i; ?>" VALUE="2">
    </TD>
    <TD ALIGN="center">
        <INPUT TYPE="radio" NAME="<? echo "ch".$i; ?>" VALUE="1">
    </TD>
  </TR>
 <? 
	}
?>
</TABLE><BR>
<INPUT TYPE="submit" VALUE="Submit">
<INPUT TYPE="reset" VALUE="Reset">
</FORM>
</BODY>
</HTML>