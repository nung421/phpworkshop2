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
  <?
	if (count($sess_id)==0) {
			echo "�ѧ����Թ�������㹵�С��Ҥ�Ѻ <BR>";
	} else {
?>
</P>
<FORM  METHOD="post" ACTION="prd_order2.php">
  <P><H3>���觫����Թ���</H3></P>
  <TABLE WIDTH="400" BORDER="0" CELLSPACING="1" CELLPADDING="0">
    <TR>
      <TD WIDTH="101">���� - ʡ�� : </TD>
      <TD><INPUT TYPE="text" NAME="name" SIZE="40">
        * </TD>
    </TR>
    <TR>
      <TD>����� : </TD>
      <TD><INPUT TYPE="text" NAME="email">
      </TD>
    </TR>
    <TR>
      <TD>����Դ��� :</TD>
      <TD><INPUT TYPE="text" NAME="tel">
      </TD>
    </TR>
    <TR>
      <TD>�������</TD>
      <TD><TEXTAREA NAME="address" COLS="40" ROWS="4"></TEXTAREA>* </TD>
    </TR>
  </TABLE><BR>
  <TABLE WIDTH="600"  BORDER="1">
          <TR BGCOLOR="#E8E8E8">
            <TD WIDTH="6%"><CENTER><B>����<BR>�Թ���</B></CENTER></TD>
            <TD WIDTH="60%"><CENTER><B>�����Թ���</B></CENTER></TD>
            <TD WIDTH="12%"><CENTER><B>�ӹǹ</B></CENTER></TD>
            <TD WIDTH="10%"><CENTER><B>�Ҥ�</B></CENTER></TD>
            <TD WIDTH="12%"><CENTER><B>���</B></CENTER></TD>
          </TR>
    <?
				for ($i=0;$i<count($sess_id);$i++) {
					$total_unit=$sess_num[$i]*$sess_price[$i];
					$total=$total+$total_unit;
					$code=sprintf("%05d",$sess_id[$i]);
					echo "
				          <TR>
								<TD>$code</TD>
								<TD>&nbsp;$sess_name[$i]</TD>
								<TD><CENTER>$sess_num[$i]</CENTER></TD>
								<TD><CENTER>$sess_price[$i]</CENTER></TD>
								<TD><CENTER>$total_unit</CENTER></TD>
						 </TR>";
				}
			?>
  </TABLE><BR>
	<? echo "�ӹǹ�Թ������ $total �ҷ"; ?>
      <BR><BR>
      <INPUT TYPE="submit"  VALUE="Submit">
      <INPUT TYPE="reset"  VALUE="Reset">
      <INPUT  TYPE="hidden" NAME="total_order" VALUE="<?=$total?>">
  </P>
</FORM>
<? 
	} 
?>
</BODY>
</HTML>