<HTML>
<HEAD><TITLE>ชุมชนคนออนไลน์</TITLE></HEAD>
<BODY>
<H2>สมัครเข้าร่วมชุมชนคนออนไลน์</H2>
<FORM METHOD="POST" ACTION="add2.php" ENCTYPE="multipart/form-data">
<TABLE>
<TR>
	<TD>ชื่อ : </TD>
	<TD><INPUT TYPE="text" NAME="fname" SIZE="25"> *</TD>
</TR>
<TR>
	<TD>เพศ : </TD>
	<TD>	
		<INPUT TYPE="radio" NAME="sex" VALUE="M" CHECKED> ชาย
		<INPUT TYPE="radio" NAME="sex" VALUE="F"> หญิง
	</TD>
</TR>
<TR>
	<TD>จังหวัด  : </TD>
	<TD>
		<SELECT NAME="province">
		<OPTION VALUE='0'> ----- เลือก ----- </OPTION>
		<?
		include "provincelist.php";
		for ($i=1;$i<=count($p);$i++) {
			echo "<OPTION VALUE='$i'> $p[$i] </OPTION>";
		}
		?>
		</SELECT> *
	</TD>
</TR>
<TR>
	<TD>รูปภาพ : </TD>
	<TD>	
		<INPUT TYPE="file" NAME="fileupload">
		<INPUT TYPE="hidden" name="MAX_FILE_SIZE" value="100000">
	</TD>
</TR>
<TR>
	<TD>MSN : </TD>
	<TD><INPUT TYPE="text" NAME="msn" SIZE="25"></TD>
</TR>
<TR>
	<TD>YAHOO : </TD>
	<TD><INPUT TYPE="text" NAME="yahoo" SIZE="25"></TD>
</TR>
<TR>
	<TD>ICQ : </TD>
	<TD><INPUT TYPE="text" NAME="icq" SIZE="25"></TD>
</TR>
<TR>
	<TD>QQ : </TD>
	<TD><INPUT TYPE="text" NAME="qq" SIZE="25"></TD>
</TR>
<TR>
	<TD>แนะนำตัว : </TD>
	<TD><TEXTAREA NAME="suggest" ROWS="3" COLS="40"></TEXTAREA></TD>
</TR>
<TR>
	<TD>&nbsp;</TD>
	<TD>
		<INPUT TYPE="submit" VALUE="Submit">
		<INPUT TYPE="reset" VALUE="Reset">
	</TD>
</TR>
</TABLE>
</FORM>
</BODY>
</HTML>