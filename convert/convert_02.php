<?
$number="265,421.25";
$textnum=array("ศูนย์","หนึ่ง","สอง","สาม","สี่","ห้า","หก","เจ็ด","แปด","เก้า");
$text="";

echo "<H2>$number</H2>";
$number = str_replace(",","",$number);
$number=number_format($number,2,'.','');
$total=explode(".",$number);

if ($total[0]==0) {
	$text.=$textnum[0];
} else if($total[0]==1) {
	$text.=$textnum[1];
} else {
	for($i=0;$i<count($total);$i++) {
		$number=$total[$i];
		if ($number>=1000000) {
			$result=$number%1000000;
			$x=($number-$result)/1000000;
			$text.="$textnum[$x]ล้าน";
			$number=$result;
		}  
		if ($number>=100000) {
			$result=$number%100000;
			$x=($number-$result)/100000;
			$text.="$textnum[$x]แสน";
			$number=$result;
		} 
		if ($number>=10000) {
			$result=$number%10000;
			$x=($number-$result)/10000;
			$text.="$textnum[$x]หมื่น";
			$number=$result;
		} 
		if ($number>=1000) {
			$result=$number%1000;
			$x=($number-$result)/1000;
			$text.="$textnum[$x]พัน";
			$number=$result;
		} 
		if ($number>=100) {
			$result=$number%100;
			$x=($number-$result)/100;
			$text.="$textnum[$x]ร้อย";
			$number=$result;
		} 
		if ($number>=10) {
			$result=$number%10;
			$x=($number-$result)/10;
			if ($x==1) {
				$text.="สิบ";
			} else if ($x==2) {
				$text.="ยี่สิบ";
			} else {
				$text.="$textnum[$x]สิบ";
			}
			$number=$result;
		}
		if ($number==0) {
			$text.="";
		} else if ($number==1) {
			$text.="เอ็ด";
		} else {
			$text.="$textnum[$number]";
		}
		if ($i==0) {
			$text.="บาท ";
		} else if ($i==1 and $total[1]<>"00") {
			$text.="สตางค์ ";
		}
	} // end for
} // end if
echo "<H2>$text</H2>";
?>
