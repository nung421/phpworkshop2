<?
session_start();
if ($sess_adminid<>session_id()) { 
	header( "Location: admin.php"); exit(); 
}

$name=$_POST[name];
$ref_id_type=$_POST[ref_id_type];
$detail=$_POST[detail];
$price=$_POST[price];

$fileupload=$_FILES['fileupload']['tmp_name'];
$fileupload_name=$_FILES['fileupload']['name'];
$fileupload_size=$_FILES['fileupload']['size'];
$fileupload_type=$_FILES['fileupload']['type'];

if ($name=="") {
	echo "<H3>ERROR : กรุณากรอก ชื่อสินค้า</H3>";
	exit();
} else if ($ref_id_type=="0") {
	echo "<H3>ERROR : กรุณาเลือก ประเภทสินค้า </H3>";
	exit();
} else if ($detail=="") {
	echo "<H3>ERROR : กรุณากรอก รายละเอียด </H3>";
	exit();
} else if ($price=="") {
	echo "<H3>ERROR : กรุณากรอก ราคาสินค้า </H3>";
	exit();
}

include "connect.php";
$sql="INSERT INTO tb_product values('','$name','$ref_id_type','$detail','$price','') ";
$result=mysql_db_query($dbname,$sql);

if ($fileupload) {

	$array_last=explode(".",$fileupload_name);
	$c=count($array_last)-1; 
	$lastname=strtolower($array_last[$c]) ;
	
	if ($lastname=="gif" or $lastname=="jpg" or $lastname=="jpeg") {

		$sql2="select max(id_prd) from tb_product ";
		$result2=mysql_db_query($dbname,$sql2);
		$row=mysql_fetch_row($result2);

		$photoname=$row[0].".".$lastname;
		copy($fileupload,"photo/".$photoname);

		$sql3="update tb_product set photo_prd='$photoname' where id_prd ='$row[0]' ";
		$result3=mysql_db_query($dbname,$sql3);

	} 
	unlink($fileupload);
} 

echo "<H3>เพิ่ม สินค้าเรียบร้อยแล้ว</H3>";
echo "[ <A HREF=admin_product.php>กลับหน้าหลัก</A> ] ";

mysql_close();
?>