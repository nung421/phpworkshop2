<?
session_start();
?>
<HTML>
<HEAD><TITLE>��ҹ����͹�Ź�</TITLE></HEAD>
<BODY>
<H2>:: ��ҹ����͹�Ź�  ::</H2>
<P> 
[ <A HREF="index.php">˹���á</A> ] 
[ <A HREF="basket.php">�ٵС����Թ���</A> ] 
</P>
<TABLE WIDTH="770" BORDER="0">
  <TR>
    <TD WIDTH="174" HEIGHT="200" VALIGN="top" BGCOLOR="#EAEAEA">
	<CENTER><B>�������Թ���</B></CENTER>    
	<?
	include "connect.php";
	include "type_list.php";
	?>
    </TD>
    <TD WIDTH="580" VALIGN="top">
<?
	if (count($sess_id)==0) {
			echo "�ѧ����Թ�������㹵С��Ҥ�Ѻ <BR>";
	} else {
?> 
	<FORM METHOD="post" ACTION="basket_cal.php">
	<TABLE WIDTH="100%"  BORDER="1">
          <TR BGCOLOR="#E8E8E8">
            <TD WIDTH="6%"><CENTER><B>ź</B></CENTER></TD>
            <TD WIDTH="60%"><CENTER><B>�����Թ���</B></CENTER></TD>
            <TD WIDTH="12%"><CENTER><B>�ӹǹ</B></CENTER></TD>
            <TD WIDTH="10%"><CENTER><B>�Ҥ�</B></CENTER></TD>
            <TD WIDTH="12%"><CENTER><B>���</B></CENTER></TD>
          </TR>
			<?
				for ($i=0;$i<count($sess_id);$i++) {
					$total_unit=$sess_num[$i]*$sess_price[$i];
					$total=$total+$total_unit;
					echo "
				          <TR>
								<TD><CENTER>
									<INPUT TYPE='checkbox' NAME='prd_del[]' VALUE='$sess_id[$i]'>
								</CENTER></TD>
								<TD>$sess_name[$i]</TD>
								<TD><CENTER>
									<INPUT TYPE='text' NAME='prd_num[]' VALUE='$sess_num[$i]' SIZE='4' >
								</CENTER></TD>
								<TD><CENTER>$sess_price[$i]</CENTER></TD>
								<TD><CENTER>$total_unit</CENTER></TD>
						 </TR>";
				}
			?>
        </TABLE>
        <P ALIGN="right">				
		<? echo "�ӹǹ�Թ������ $total �ҷ"; ?><BR><BR>
          <INPUT TYPE="submit" NAME="calculate" VALUE="�ӹǳ����">
          <INPUT TYPE="submit" NAME="complete" VALUE="��觫����Թ���">
        </P>
      </FORM>
<? 
	} 
?>
</TD>
  </TR>
</TABLE>
</BODY>
</HTML>