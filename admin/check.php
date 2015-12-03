<?php 
session_start();

	if ($_POST["password"] == "admin") {
		$_SESSION["loggedin"] = "admin";
		header("Location:restricted.php");
	} 
	else {
		echo "Forkert brugernavn eller password!";
	}

?>

