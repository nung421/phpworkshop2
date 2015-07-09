<?
echo "<H2>XML Guestbook</H2>";
$file="data.xml";
function startElement($parser, $name, $attrs) { 
	switch ($name) {
		case "NAME":
			echo "<B>ชื่อ : </B>";
			break;
		case "EMAIL":
			echo "<B>อีเมล : </B>";
			break;
		case "DATE":
			echo "<B>บันทึกเมื่อ : </B>";
			break;
		case "MESSAGE":
			echo "<B>ข้อความ : </B>";
			break;
	}
} 
function characterData($parser, $data) { 
		echo "$data";
} 
function endElement($parser, $name) { 
	   echo "<BR>";
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
