<HTML>
<HEAD><TITLE>ฟอร์มเพิ่มแบบทดสอบ</TITLE></HEAD>
<BODY>
<h1>ฟอร์มเพิ่มแบบทดสอบ</h1>
<FORM METHOD=POST ACTION="add_test.php">
<TABLE>
<TR>
	<TD>คำถาม :</TD>
	<TD><TEXTAREA NAME="question" COLS="40" ROWS="2"></TEXTAREA></TD>
</TR>
<TR>
	<TD height="26">ตัวเลือก 1 :</TD>
	<TD><INPUT NAME="choice1" TYPE="text" size="30"></TD>
</TR>
<TR>
	<TD>ตัวเลือก 2 :</TD>
	<TD><INPUT NAME="choice2" TYPE="text" size="30"></TD>
</TR>
<TR>
	<TD>ตัวเลือก 3 :</TD>
	<TD><INPUT NAME="choice3" TYPE="text" size="30"></TD>
</TR>
<TR>
	<TD>ตัวเลือก 4 :</TD>
	<TD><INPUT NAME="choice4" TYPE="text" size="30"></TD>
</TR>
<TR>
	<TD>คำตอบที่ถูก :</TD>
	<TD>
		<SELECT NAME="answer">
		<OPTION VALUE="1">ตัวเลือก 1</OPTION>
		<OPTION VALUE="2">ตัวเลือก 2</OPTION>
		<OPTION VALUE="3">ตัวเลือก 3</OPTION>
		<OPTION VALUE="4">ตัวเลือก 4</OPTION>
		</SELECT>
	</TD>
</TR>
</TABLE>
<P><INPUT TYPE="submit" VALUE="Submit"><INPUT TYPE="reset" VALUE="Reset"></P>
</FORM>
</BODY>
</HTML>