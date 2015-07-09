<?
	session_start();
	unset( $_SESSION['sess_userid']);
	session_destroy();
	header('Location: admin.php');
?>