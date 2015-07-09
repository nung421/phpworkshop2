<HTML>
<HEAD><TITLE>ระดมพลคนออนไลน์ </TITLE></HEAD>
<BODY>
<H2>ฟอร์มค้นหาเพื่อนคุย</H2>
<FORM METHOD="POST" ACTION="search2.php" >
<TABLE WIDTH="350" BGCOLOR="#F8F8F8">
<TR>
	<TD>เพศ : </TD>
	<TD>	
				<INPUT TYPE="radio" NAME="sex" VALUE="*" CHECKED> ทุกเพศ
				<INPUT TYPE="radio" NAME="sex" VALUE="M" > ชาย
				<INPUT TYPE="radio" NAME="sex" VALUE="F"> หญิง
	</TD>
</TR>
<TR>
	<TD>จังหวัด  : </TD>
	<TD>
		<SELECT NAME="province">
		<OPTION VALUE='*'> ----- ทุกจังหวัด ----- </OPTION>
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
	<TD>โปรแกรม : </TD>
	<TD>	
		<SELECT NAME="tools">
				<OPTION VALUE="*">ทุกโปรแกรม</OPTION>
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
