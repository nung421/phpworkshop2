<?
$c_name=$_POST[c_name];
$c_detail=$_POST[c_detail];

$filename="rude.txt";
$fp=fopen($filename,"r");
$data=fread($fp,filesize($filename));
fclose($fp);

$rudeword=explode("\n",trim($data));

$replace="<FONT COLOR='RED'>***</FONT>";
for($i=0;$i<count($rudeword);$i++) {
	$c_detail=str_replace(trim($rudeword[$i]),$replace,$c_detail);
}
echo "ขื่อ - สกุล : $c_name <BR>";
echo "ข้อความ : $c_detail <BR>";
?>