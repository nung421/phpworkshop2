<?
header("Content-Type: text/xml; charset=tis-620");
$phpversion = phpversion();

echo "<?xml version=\"1.0\" encoding=\"tis-620\"?>
<rss version=\"2.0\">
    <channel>
      <title>ระบบจัดการข่าวสาร (News)</title>
      <link>http://206.26.56.226/news </link>
      <description>ให้บริการข่าวสาร</description>
	  <webMaster> nung421@hotmail.com</webMaster>
	  <generator>PHP/$phpversion</generator>
	  <image>
			<url>http://206.26.56.226/news/newrss.jpg</url>
			<title>ระบบจัดการข่าวสาร (News)</title> 
			<link>http://206.26.56.226/news/</link> 
	  </image>";

include "function.php";
include "connect.php";
$sql="select * from tb_new order by id_new desc limit 0,10 ";
$result=mysql_db_query($dbname,$sql);
while($r=mysql_fetch_array($result)) {
	$id_new=$r[id_new];
	$title_new=$r[title_new];
	$date_new=displaydate($r[date_new]);
	$time_new=$r[time_new];
	echo "<item>
				<title>$title_new</title>
				<link>http://206.26.56.226/news/view.php?id_view=$id_new</link>
				<pubDate>$date_new $time_new</pubDate>
			</item>";
}
echo "</channel></rss>";
?>