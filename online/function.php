<?
function checkemail($checkemail) { 
	if(ereg( "^[^@ ]+@([a-zA-Z0-9\-]+\.)+([a-zA-Z0-9\-]{2}
		|net|com|gov|mil|org|edu|int)$",$checkemail) )  {
		return true; 
	} else {
		return false; 
	}
} 
?>