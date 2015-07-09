<?
$message="This is a book.";
$search="book";
$replace="pen";

echo "<H1>$message</H1>";

$new_message=str_replace($search,$replace,$message);

echo "<H1>$new_message </H1>";
?>