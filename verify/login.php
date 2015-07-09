<HTML>
<HEAD><TITLE>ฟอร์ม Login</TITLE></HEAD>
<BODY>
<H1>:: ฟอร์ม Login ::</H1>
<FORM METHOD=POST ACTION="check.php">
<TABLE>
<TR>
	<TD>Username :</TD>
	<TD><INPUT TYPE="text" NAME="user"></TD>
</TR>
<TR>
	<TD>Password :</TD>
	<TD> <INPUT TYPE="password" NAME="pass"></TD>
</TR>
<TR>
	<TD >Code :</TD>
	<TD ><INPUT TYPE="text" NAME="code" SIZE="5">
	  <IMG SRC="verify-image-bg.php" ALIGN="absmiddle" ></TD>
</TR>
<TR>
  <TD >&nbsp;</TD>
  <TD ><INPUT NAME="submit" TYPE="submit" VALUE="Submit">
		<INPUT NAME="reset" TYPE="reset" VALUE="Reset"></TD>
</TR>
</TABLE>
</FORM>
</BODY>
</HTML>