<?
$fname=$_POST[fname];
$sex=$_POST[sex];
$province=$_POST[province];

$fileupload=$_FILES['fileupload']['tmp_name'];
$fileupload_name=$_FILES['fileupload']['name'];
$fileupload_size=$_FILES['fileupload']['size'];
$fileupload_type=$_FILES['fileupload']['type'];

$msn=$_POST[msn];
$yahoo=$_POST[yahoo];
$icq=$_POST[icq];
$qq=$_POST[qq];
$suggest=$_POST[suggest];

if ($fname=="") {
	echo "<H3> ERROR : ��سҡ�͡ ���� </H3>";
	exit;
}

if($province=="0") {
	echo "<H3> ERROR : ��س����͡ �ѧ��Ѵ </H3>";
	exit;
}

if ($msn=="" AND $yahoo=="" AND $icq=="" AND $qq=="") {
	echo "<H3> ERROR : ��سҡ�͡�������������͹�Ź� ���ҧ���� 1 ����� </H3>";
	exit;
}

include "function.php";

if ($msn<>"" AND !checkemail($msn)) {
	echo "<H3> ERROR : �ٻẺ����� MSN �ͧ��ҹ���١��ͧ </H3>";
	exit;
}

if ($yahoo<>"" AND !checkemail($yahoo)) {
	echo "<H3> ERROR : �ٻẺ����� YAHOO �ͧ��ҹ���١��ͧ </H3>";
	exit;
}

$ip = $_SERVER['REMOTE_ADDR']; 
$now = date("Y-m-d H:i:s");

include "connect.php";
$sql="insert into tb_online values(NULL,'$fname','$sex','$province','','$msn','$yahoo','$icq','$qq','$suggest','$ip','$now')";
$result=mysql_db_query($dbname,$sql);

if ($fileupload) {

	$array_last=explode(".",$fileupload_name);
	$c=count($array_last)-1; 
	$lastname=strtolower($array_last[$c]) ;
	
	if ($lastname=="gif" or $lastname=="jpg" or $lastname=="jpeg") {

		$sql2="select max(id) from tb_online ";
		$result2=mysql_db_query($dbname,$sql2);
		$row=mysql_fetch_row($result2);

		$photoname=$row[0].".".$lastname;

		copy($fileupload,"photo/".$photoname);

		$sql3="update tb_online set photo='$photoname' where id ='$row[0]' ";
		$result3=mysql_db_query($dbname,$sql3);

	} 
	unlink($fileupload);
} 

echo "<H3> �ѹ�֡���������º�������� </H3>";
echo "<A HREF='index.php'> ��Ѻ�˹���á</A> ";

?>