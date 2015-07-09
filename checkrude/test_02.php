<?
$messages="Hello World of PHP";
$search= array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
$replace="*";

echo "<H1>$messages</H1>";

$new_messages= str_replace($search,$replace, $messages);

echo "<H1>$new_messages</H1>";
?>