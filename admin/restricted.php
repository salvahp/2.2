<?php 
session_start();
if (!$_SESSION["loggedin"]){
	header ("Location:login.php");
	exit ();
	}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Velkommen!</title>
</head>

<body>
	<h1>Velkommen</h1>
	<p>Du har nu adgang til den lukkede side</p>
</body>

</html>
