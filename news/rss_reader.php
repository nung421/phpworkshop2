<?
$file = "http://localhost/news/rss_feed.php"; 
$rss = array(); 
$tag = ""; 
$main = ""; 
$count = 0; 

function startElement($parser, $name, $attrs) { 
       global $rss, $tag, $main; 
       switch($name) { 
           case "RSS": 
           case "CHANNEL": 
               $main = "CHANNEL"; 
               break; 
           case "ITEM": 
               $main = "ITEM"; 
               break;  
			case "IMAGE": 
               $main = "IMAGE"; 
               break; 
           default: 
               $tag = $name; 
            break; 
       } 
} 

function characterData($parser, $data) { 
    global $rss, $tag, $main, $count; 
    if ($tag != "") { 
        switch($main) { 
            case "CHANNEL": 
				$rss[$tag] = $data;
                break; 
            case "IMAGE": 
				$rss[$main][$tag] .= $data; 
                break; 
            case "ITEM": 
                $rss[$main][$count][$tag] .= $data; 
                break; 
        } 
    } 
} 
function endElement($parser, $name) { 
       global $rss, $tag, $count,$main; 
       $tag = ""; 
	   switch($name) {
		   case "ITEM":
			    $count++;
				break;
			case "IMAGE":
				$main="CHANNEL";
				break;
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

//print_r($rss);

$title=$rss["TITLE"]; 
$link=$rss["LINK"];
$description=$rss["DESCRIPTION"];
echo "<H2> <A HREF='$link' TARGET='_blank'>$title</A> </H2> $description ";

$image_url=$rss["IMAGE"]["URL"];
$image_title=$rss["IMAGE"]["TITLE"];
$image_link=$rss["IMAGE"]["LINK"];
if ($image_url !="") {
	echo "<A HREF='$link' TARGET='_blank'><IMG SRC='$image_url' ALT='$title' BORDER=0></A>";
}
echo "<UL>";
for ($i=0;$i<count($rss["ITEM"]);$i++) {
	$title=$rss["ITEM"][$i]["TITLE"];
	$link=$rss["ITEM"][$i]["LINK"];
	$description=$rss["ITEM"][$i]["DESCRIPTION"];
	$pubDate=$rss["ITEM"][$i]["PUBDATE"];

	echo "<LI>";
	echo "<A HREF='$link' TARGET='_blank'> $title </A><BR>";
	if ($description != "") { echo " $description<BR>"; }
	if ($pubDate !="" ) { echo " <FONT SIZE='2'>$pubDate</FONT>"; }
	echo "<BR></LI>";
}
echo "</UL>";
?>