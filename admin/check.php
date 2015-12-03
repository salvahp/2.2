<?php 
session_start();

	if ($_POST["password"] == "admin") {
		$_SESSION["loggedin"] = "admin";
		header("Location:admin.php");
	} 
	else {
		echo "Forkert brugernavn eller password!";
	}

?>

