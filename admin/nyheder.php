<?php 
/*
// tjekker om der er logget ind
session_start();
if (!$_SESSION["loggedin"]){
	header ("Location:login.php");
	exit ();
	}
*/

// Load in the file system class
include 'processes/filesystem.class2.php';
$file = new FileSystem;
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="css/reset.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<title>Rediger Nyheder</title>
</head>

<body>
<div id="wrapper">
<header>
<div id="navigation">
	<ul>
    	<li><a href="admin.php"> Menukort</a></li>
        <li><a href="nyheder.php"> Nyheder</a></li>
    </ul>
</div>
</header>
	<section>
		<h1>Rediger Nyheder</h1>
		<p>Her redigeres i Nyheder på Peter Gift hjemmesiden. <!-- Punkterne gemmes enkeltvis--></p>
	</section>
	<main id="menupunkter">
		<form action="processes/process2.php" method="post">
			<section class="formfelt">
				<h2>Nyheder</h2>
				<h3>Nyheds titel</h3>
				<textarea class="nyhedtitel" name="titelnyhed"><?php
				// Læs menupunkt
				$filename = "includes/nyheder/nyhedstitel.html";
				echo($file->read($filename));
				?></textarea>
				<h3>Nyheden</h3>
				<textarea class="nyhedtekst" name="tekstnyhed" ><?php			
				// læs beskrivelse
				$filename = "includes/nyheder/nyhedstekst.html";
				echo($file->read($filename));
				?></textarea>
				
				</section>
			
			
			<button type="submit" class="button">Gem</button>
		</form>
	</main>
</div>
<?php
// Display success message
if(isset($_GET["success"])) {
	?>
<script>
    alert("Siden er blevet opdateret");
</script>
<?php
}
?>
</body>
</html>