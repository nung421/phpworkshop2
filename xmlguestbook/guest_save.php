<?
$name=$_POST['name'];
$email=$_POST['email'];
$messages=$_POST['messages'];

$name=htmlspecialchars(trim($name));
$email=htmlspecialchars(trim($email));
$messages=htmlspecialchars(trim($messages));

if ($name=="" OR $messages=="") {
	echo "<H3><A HREF='guest_form.html'>ERROR : ��سҡ�͡���������ú���¤�Ѻ</A></H3>";
	exit();
}

$today=date("Y-m-d H:i:s"); 

$filename="data.xml";
$contents = file($filename);
$lines = "";
for ($i=2; $i<count($contents); $i++) {
	$lines .= $contents[$i];
}

$head="<?xml version=\"1.0\"  encoding=\"tis-620\"?>\n";
$head.="<guestbook>\n";

$data = "<item>\n";
$data.="<name>$name</name>\n";
$data.="<email>$email</email>\n";
$data.="<date>$today</date>\n";
$data.="<message>$messages</message>\n";
$data.="</item>\n";

$fp = fopen($filename,'w');
fwrite ($fp, $head.$data.$lines);
fclose ($fp);

echo "<h3>�����Ţͧ��ҹ�١�ѹ�֡���º�������Ǥ�Ѻ</h3>";
echo "<A HREF='guest_view.php'>��ԡ������ҹ��ش������</A>";
?>