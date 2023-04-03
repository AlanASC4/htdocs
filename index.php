<?php
//start a session
session_start();
?>

<!DOCTYPE html>
<html>
<body>

<?php
//set session variables
	$_SESSION["myuniversity"] = "Rutgers";
	$_SESSION["status"] = "Junior";
	echo "Session variables set, Welcome to PHP Programming";	
?>

</body>
</html>
