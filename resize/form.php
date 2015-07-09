<HTML>
<HEAD><TITLE>ฟอร์ม Upload และ Resize รูปภาพ</TITLE></HEAD>
<BODY>
<FORM METHOD="POST" ACTION="upload_resize.php" ENCTYPE="multipart/form-data">
<H2>ฟอร์ม Upload และ Resize รูปภาพ</H2>
	<INPUT TYPE="hidden" name="MAX_FILE_SIZE" value="1000000">
	<INPUT TYPE="file" NAME="fileupload"><P>
	<INPUT TYPE="submit" VALUE="Submit">
	<INPUT TYPE="reset" VALUE="Reset">
</FORM>
</BODY>
</HTML>