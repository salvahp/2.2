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
include 'processes/filesystem.class.php';
$file = new FileSystem;
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/reset.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<title>Rediger Menukort</title>
</head>

<body>
<div id="wrapper">
	<section>
		<h1>Rediger Menukort</h1>
		<p>Her redigeres i Menukortet på Peter Gift hjemmesiden. <!-- Punkterne gemmes enkeltvis--></p>
	</section>
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
	<main id="menupunkter">
		<section class="punkt">
			<h2>Punkt 1</h2>
			<form action="processes/process1.php" method="post">
				<textarea class="text" name="text" rows="2" cols="50"><?php			
				// Læs menupunkt
				$filename = "includes/menukort/menukort_1.html";
				echo($file->read($filename));
			?>
</textarea>
				<textarea class="description" name="description" rows="2" cols="50" ><?php			
				// læs beskrivelse
				$filename = "includes/menukort/menukort_1_beskrivelse.html";
				echo($file->read($filename));
			?>
</textarea>
				<textarea class="price" name="price" rows="2" cols="5" ><?php			
				// læs pris
				$filename = "includes/menukort/menukort_1_pris.html";
				echo($file->read($filename));
			?>
</textarea>
<!--				<button type="submit" class="button">Gem</button>
			</form>
		</section>
		<section class="punkt">
			<form action="processes/process2.php" method="post">-->
<h2>Punkt 2</h2>
				<textarea class="text" name="text2" rows="2" cols="50"><?php			
				// Read file
				$filename = "includes/menukort/menukort_2.html";
				echo($file->read($filename));
			?>
</textarea>
				<textarea class="description" name="description2" rows="2" cols="50" ><?php			
				// læs beskrivelse
				$filename = "includes/menukort/menukort_2_beskrivelse.html";
				echo($file->read($filename));
			?>
</textarea>
				<textarea class="price" name="price2" rows="2" cols="5" ><?php			
				// læs pris
				$filename = "includes/menukort/menukort_2_pris.html";
				echo($file->read($filename));
			?>
</textarea>
				<button type="submit" class="button">Gem</button>
			</form>
		</section>
		<section class="punkt">
			<form action="processes/process3.php" method="post">
				<h2>Punkt 3</h2>
				<textarea class="text" name="text" rows="2" cols="50"><?php			
				// Read file
				$filename = "includes/menukort/menukort_3.html";
				echo($file->read($filename));
			?>
</textarea>
				<textarea class="description" name="description" rows="2" cols="50" ><?php			
				// læs beskrivelse
				$filename = "includes/menukort/menukort_3_beskrivelse.html";
				echo($file->read($filename));
			?>
</textarea>
				<textarea class="price" name="price" rows="2" cols="5" ><?php			
				// læs pris
				$filename = "includes/menukort/menukort_3_pris.html";
				echo($file->read($filename));
			?>
</textarea>
				<button type="submit" class="button">Gem</button>
			</form>
		</section>
		<section class="punkt">
			<form action="processes/process4.php" method="post">
				<h2>Punkt 4</h2>
				<textarea class="text" name="text" rows="2" cols="50"><?php			
				// Read file
				$filename = "includes/menukort/menukort_4.html";
				echo($file->read($filename));
			?>
</textarea>
				<textarea class="description" name="description" rows="2" cols="50" ><?php			
				// læs beskrivelse
				$filename = "includes/menukort/menukort_4_beskrivelse.html";
				echo($file->read($filename));
			?>
</textarea>
				<textarea class="price" name="price" rows="2" cols="5" ><?php			
				// læs pris
				$filename = "includes/menukort/menukort_4_pris.html";
				echo($file->read($filename));
			?>
</textarea>
				<button type="submit" class="button">Gem</button>
			</form>
		</section>
		<section class="punkt">
			<form action="processes/process5.php" method="post">
				<h2>Punkt 5</h2>
				<textarea class="text" name="text" rows="2" cols="50"><?php			
				// Read file
				$filename = "includes/menukort/menukort_5.html";
				echo($file->read($filename));
			?>
</textarea>
				<textarea class="description" name="description" rows="2" cols="50" ><?php			
				// læs beskrivelse
				$filename = "includes/menukort/menukort_5_beskrivelse.html";
				echo($file->read($filename));
			?>
</textarea>
				<textarea class="price" name="price" rows="2" cols="5" ><?php			
				// læs pris
				$filename = "includes/menukort/menukort_5_pris.html";
				echo($file->read($filename));
			?>
</textarea>
				<button type="submit" class="button">Gem</button>
			</form>
		</section>
		<section class="punkt">
			<form action="processes/process6.php" method="post">
				<h2>Punkt 6</h2>
				<textarea class="text" name="text" rows="2" cols="50"><?php			
				// Read file
				$filename = "includes/menukort/menukort_6.html";
				echo($file->read($filename));
			?>
</textarea>
				<textarea class="description" name="description" rows="2" cols="50" ><?php			
				// læs beskrivelse
				$filename = "includes/menukort/menukort_6_beskrivelse.html";
				echo($file->read($filename));
			?>
</textarea>
				<textarea class="price" name="price" rows="2" cols="5" ><?php			
				// læs pris
				$filename = "includes/menukort/menukort_6_pris.html";
				echo($file->read($filename));
			?>
</textarea>
				<button type="submit" class="button">Gem</button>
			</form>
		</section>
		<section class="punkt">
			<form action="processes/process7.php" method="post">
				<h2>Punkt 7</h2>
				<textarea class="text" name="text" rows="2" cols="50"><?php			
				// Read file
				$filename = "includes/menukort/menukort_7.html";
				echo($file->read($filename));
			?>
</textarea>
				<textarea class="description" name="description" rows="2" cols="50" ><?php			
				// læs beskrivelse
				$filename = "includes/menukort/menukort_7_beskrivelse.html";
				echo($file->read($filename));
			?>
</textarea>
				<textarea class="price" name="price" rows="2" cols="5" ><?php			
				// læs pris
				$filename = "includes/menukort/menukort_7_pris.html";
				echo($file->read($filename));
			?>
</textarea>
				<button type="submit" class="button">Gem</button>
			</form>
		</section>
		<section class="punkt">
			<form action="processes/process8.php" method="post">
				<h2>Punkt 8</h2>
				<textarea class="text" name="text" rows="2" cols="50"><?php			
				// Read file
				$filename = "includes/menukort/menukort_8.html";
				echo($file->read($filename));
			?>
</textarea>
				<textarea class="description" name="description" rows="2" cols="50" ><?php			
				// læs beskrivelse
				$filename = "includes/menukort/menukort_8_beskrivelse.html";
				echo($file->read($filename));
			?>
</textarea>
				<textarea class="price" name="price" rows="2" cols="5" ><?php			
				// læs pris
				$filename = "includes/menukort/menukort_8_pris.html";
				echo($file->read($filename));
			?>
</textarea>
				<button type="submit" class="button">Gem</button>
			</form>
		</section>
		<section class="punkt">
			<form action="processes/process9.php" method="post">
				<h2>Punkt 9</h2>
				<textarea class="text" name="text" rows="2" cols="50"><?php			
				// Read file
				$filename = "includes/menukort/menukort_9.html";
				echo($file->read($filename));
			?>
</textarea>
				<textarea class="description" name="description" rows="2" cols="50" ><?php			
				// læs beskrivelse
				$filename = "includes/menukort/menukort_9_beskrivelse.html";
				echo($file->read($filename));
			?>
</textarea>
				<textarea class="price" name="price" rows="2" cols="5" ><?php			
				// læs pris
				$filename = "includes/menukort/menukort_9_pris.html";
				echo($file->read($filename));
			?>
</textarea>
				<button type="submit" class="button">Gem</button>
			</form>
		</section>
		<section class="punkt">
			<form action="processes/process10.php" method="post">
				<h2>Punkt 10</h2>
				<textarea class="text" name="text" rows="2" cols="50"><?php			
				// Read file
				$filename = "includes/menukort/menukort_10.html";
				echo($file->read($filename));
			?>
</textarea>
				<textarea class="description" name="description" rows="2" cols="50" ><?php			
				// læs beskrivelse
				$filename = "includes/menukort/menukort_10_beskrivelse.html";
				echo($file->read($filename));
			?>
</textarea>
				<textarea class="price" name="price" rows="2" cols="5" ><?php			
				// læs pris
				$filename = "includes/menukort/menukort_10_pris.html";
				echo($file->read($filename));
			?>
</textarea>
				<button type="submit" class="button">Gem</button>
			</form>
		</section>
		<section class="punkt">
			<form action="processes/process11.php" method="post">
				<h2>Punkt 11</h2>
				<textarea class="text" name="text" rows="2" cols="50"><?php			
				// Read file
				$filename = "includes/menukort/menukort_11.html";
				echo($file->read($filename));
			?>
</textarea>
				<textarea class="description" name="description" rows="2" cols="50" ><?php			
				// læs beskrivelse
				$filename = "includes/menukort/menukort_11_beskrivelse.html";
				echo($file->read($filename));
			?>
</textarea>
				<textarea class="price" name="price" rows="2" cols="5" ><?php			
				// læs pris
				$filename = "includes/menukort/menukort_11_pris.html";
				echo($file->read($filename));
			?>
</textarea>
				<button type="submit" class="button">Gem</button>
			</form>
		</section>
		<section class="punkt">
			<form action="processes/process12.php" method="post">
				<h2>Punkt 12</h2>
				<textarea class="text" name="text" rows="2" cols="50"><?php			
				// Read file
				$filename = "includes/menukort/menukort_12.html";
				echo($file->read($filename));
			?>
</textarea>
				<textarea class="description" name="description" rows="2" cols="50" ><?php			
				// læs beskrivelse
				$filename = "includes/menukort/menukort_12_beskrivelse.html";
				echo($file->read($filename));
			?>
</textarea>
				<textarea class="price" name="price" rows="2" cols="5" ><?php			
				// læs pris
				$filename = "includes/menukort/menukort_12_pris.html";
				echo($file->read($filename));
			?>
</textarea>
				<button type="submit" class="button">Gem</button>
			</form>
		</section>
		<section class="punkt">
			<form action="processes/process13.php" method="post">
				<h2>Punkt 13</h2>
				<textarea class="text" name="text" rows="2" cols="50"><?php			
				// Read file
				$filename = "includes/menukort/menukort_13.html";
				echo($file->read($filename));
			?>
</textarea>
				<textarea class="description" name="description" rows="2" cols="50" ><?php			
				// læs beskrivelse
				$filename = "includes/menukort/menukort_13_beskrivelse.html";
				echo($file->read($filename));
			?>
</textarea>
				<textarea class="price" name="price" rows="2" cols="5" ><?php			
				// læs pris
				$filename = "includes/menukort/menukort_13_pris.html";
				echo($file->read($filename));
			?>
</textarea>
				<button type="submit" class="button">Gem</button>
			</form>
		</section>
		<section class="punkt">
			<form action="processes/process14.php" method="post">
				<h2>Punkt 14</h2>
				<textarea class="text" name="text" rows="2" cols="50"><?php			
				// Read file
				$filename = "includes/menukort/menukort_14.html";
				echo($file->read($filename));
			?>
</textarea>
				<textarea class="description" name="description" rows="2" cols="50" ><?php			
				// læs beskrivelse
				$filename = "includes/menukort/menukort_14_beskrivelse.html";
				echo($file->read($filename));
			?>
</textarea>
				<textarea class="price" name="price" rows="2" cols="5" ><?php			
				// læs pris
				$filename = "includes/menukort/menukort_14_pris.html";
				echo($file->read($filename));
			?>
</textarea>
				<button type="submit" class="button">Gem</button>
			</form>
		</section>
		<section class="punkt">
			<form action="processes/process15.php" method="post">
				<h2>Punkt 15</h2>
				<textarea class="text" name="text" rows="2" cols="50"><?php			
				// Read file
				$filename = "includes/menukort/menukort_15.html";
				echo($file->read($filename));
			?>
</textarea>
				<textarea class="description" name="description" rows="2" cols="50" ><?php			
				// læs beskrivelse
				$filename = "includes/menukort/menukort_15_beskrivelse.html";
				echo($file->read($filename));
			?>
</textarea>
				<textarea class="price" name="price" rows="2" cols="5" ><?php			
				// læs pris
				$filename = "includes/menukort/menukort_15_pris.html";
				echo($file->read($filename));
			?>
</textarea>
				<button type="submit" class="button">Gem</button>
			</form>
		</section>
		<section class="punkt">
			<form action="processes/process16.php" method="post">
				<h2>Punkt 16</h2>
				<textarea class="text" name="text" rows="2" cols="50"><?php			
				// Read file
				$filename = "includes/menukort/menukort_16.html";
				echo($file->read($filename));
			?>
</textarea>
				<textarea class="description" name="description" rows="2" cols="50" ><?php			
				// læs beskrivelse
				$filename = "includes/menukort/menukort_16_beskrivelse.html";
				echo($file->read($filename));
			?>
</textarea>
				<textarea class="price" name="price" rows="2" cols="5" ><?php			
				// læs pris
				$filename = "includes/menukort/menukort_16_pris.html";
				echo($file->read($filename));
			?>
</textarea>
				<button type="submit" class="button">Gem</button>
			</form>
		</section>
	</main>
</div>
</body>
</html>