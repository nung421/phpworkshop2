<HTML>
<HEAD><TITLE>�д��Ť��͹�Ź� </TITLE></HEAD>
<BODY>
<H2>������������͹���</H2>
<FORM METHOD="POST" ACTION="search2.php" >
<TABLE WIDTH="350" BGCOLOR="#F8F8F8">
<TR>
	<TD>�� : </TD>
	<TD>	
				<INPUT TYPE="radio" NAME="sex" VALUE="*" CHECKED> �ء��
				<INPUT TYPE="radio" NAME="sex" VALUE="M" > ���
				<INPUT TYPE="radio" NAME="sex" VALUE="F"> ˭ԧ
	</TD>
</TR>
<TR>
	<TD>�ѧ��Ѵ  : </TD>
	<TD>
		<SELECT NAME="province">
		<OPTION VALUE='*'> ----- �ء�ѧ��Ѵ ----- </OPTION>
		<?
		include "provincelist.php";
		for ($i=1;$i<=count($p);$i++) {
			echo "<OPTION VALUE='$i'> $p[$i] </OPTION>";
		}
		?>
		</SELECT>
	</TD>
</TR>
<TR>
	<TD>����� : </TD>
	<TD>	
		<SELECT NAME="tools">
				<OPTION VALUE="*">�ء�����</OPTION>
				<OPTION VALUE="msn">MSN</OPTION>
				<OPTION VALUE="yahoo">YAHOO </OPTION>
				<OPTION VALUE="icq">ICQ</OPTION>
				<OPTION VALUE="qq">QQ</OPTION>
		</SELECT>
	</TD>
</TR>
<TR>
	<TD>&nbsp;</TD>
	<TD><INPUT TYPE="submit" VALUE="Submit">
			<INPUT TYPE="reset" VALUE="Reset"></TD>
</TR>
</TABLE>
</FORM>
</BODY>
</HTML>
