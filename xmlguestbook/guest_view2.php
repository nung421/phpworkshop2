<HTML>
<HEAD><TITLE> XML Guestbook </TITLE>
</HEAD>
<BODY>
<?
echo "<H2>XML Guestbook</H2>";
$file="data.xml";
function startElement($parser, $name, $attrs) { 
	switch ($name) {
		case "ITEM":
			echo "<TABLE  WIDTH=70% BORDER=1>";
			break;
		case "NAME":
			echo "<TR><TD WIDTH=25% BGCOLOR=#EEEEEE><B>ชื่อ : </B></TD><TD>";
			break;
		case "EMAIL":
			echo "<TR><TD WIDTH=25% BGCOLOR=#EEEEEE><B>อีเมล : </B></TD><TD>";
			break;
		case "DATE":
			echo "<TR><TD WIDTH=25% BGCOLOR=#EEEEEE><B>บันทึกเมื่อ : </B></TD><TD>";
			break;
		case "MESSAGE":
			echo "<TR><TD WIDTH=25% BGCOLOR=#EEEEEE><B>ข้อความ : </B></TD><TD>";
			break;
	}
} 
function characterData($parser, $data) { 
	echo "$data";
} 
function endElement($parser, $name) { 
	switch($name) {
		case "ITEM":
			echo "</TABLE> <BR>";
			break;
		default :
			echo "</TD></TR>";
	}
} 
$xml_parser = xml_parser_create(); 
xml_set_element_handler($xml_parser, "startElement", "endElement"); 
xml_set_character_data_handler($xml_parser, "characterData"); 
if (!($fp = fopen($file, "r"))) { 
    die("could not open XML input"); 
} 

while ($data = fread($fp, 4096)) { 
    if (!xml_parse($xml_parser, $data, feof($fp))) { 
        die(sprintf("XML error: %s at line %d", 
                    xml_error_string(xml_get_error_code($xml_parser)), 
                    xml_get_current_line_number($xml_parser))); 
    } 
} 
xml_parser_free($xml_parser); 

echo "<H4><A HREF='guest_form.html'>คลิกเพื่อเขียนสมุดเยี่ยม</A></H4>";
?>
</BODY>
</HTML>