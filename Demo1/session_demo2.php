<?php
//start a session
session_start();
?>

<!DOCTYPE html>
<html>
<body>

<?php
//access previously set session variables
	echo "My University is ".$_SESSION["myuniversity"] ." ";
	echo "and I am a ".$_SESSION["status"] .".<br>";
	echo "Session variables called, Welcome to PHP Programming.<br>";	
?>

<?php
//change session variable(s)
	$_SESSION["myuniversity"] = "Princeton";
	print_r($_SESSION);
?>

</body>
</html>
