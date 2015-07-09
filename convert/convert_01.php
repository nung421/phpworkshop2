<?
$number=25421;
echo "<H2>$number</H2>";

$textnum=array("ศูนย์","หนึ่ง","สอง","สาม","สี่","ห้า","หก","เจ็ด","แปด","เก้า");

if ($number>=10000) {
	$result=$number%10000;
	echo "$result<BR>";
	$x=($number-$result)/10000;
	echo "$x<BR>";
	echo "<H2>$textnum[$x]หมื่น</H2>";
}
?>
