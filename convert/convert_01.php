<?
$number=25421;
echo "<H2>$number</H2>";

$textnum=array("�ٹ��","˹��","�ͧ","���","���","���","ˡ","��","Ỵ","���");

if ($number>=10000) {
	$result=$number%10000;
	echo "$result<BR>";
	$x=($number-$result)/10000;
	echo "$x<BR>";
	echo "<H2>$textnum[$x]����</H2>";
}
?>
