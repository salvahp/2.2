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
<meta name="robots" content="noindex, nofollow">
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
		<h1>Rediger Menukort</h1>
		<p>Her redigeres i Menukortet på Peter Gift hjemmesiden. <!-- Punkterne gemmes enkeltvis--></p>
	</section>
	<main id="menupunkter">
		<form action="processes/process1.php" method="post">
			<section class="formfelt">
				<h2>Punkt 1</h2>
				<h3>Titel</h3>
				<textarea class="text" name="text1"><?php			
				// Læs menupunkt
				$filename = "includes/menukort/menukort_1.html";
				echo($file->read($filename));
				?>
				</textarea>
				<h3>Beskrivelse</h3>
				<textarea class="description" name="description1" ><?php			
				// læs beskrivelse
				$filename = "includes/menukort/menukort_1_beskrivelse.html";
				echo($file->read($filename));
			?>
</textarea>
				<h3>Pris</h3>
				<textarea class="price" name="price1"><?php			
				// læs pris
				$filename = "includes/menukort/menukort_1_pris.html";
				echo($file->read($filename));
			?>
</textarea>
				kr. </section>
			<section class="formfelt">
				<h2>Punkt 2</h2>
				<h3>Titel</h3>
				<textarea class="text" name="text2" ><?php			
				// Read file
				$filename = "includes/menukort/menukort_2.html";
				echo($file->read($filename));
			?>
</textarea>
				<h3>Beskrivelse</h3>
				<textarea class="description" name="description2" ><?php			
				// læs beskrivelse
				$filename = "includes/menukort/menukort_2_beskrivelse.html";
				echo($file->read($filename));
			?>
</textarea>
				<h3>Pris</h3>
				<textarea class="price" name="price2"><?php			
				// læs pris
				$filename = "includes/menukort/menukort_2_pris.html";
				echo($file->read($filename));
			?>
</textarea>
			</section>
			<section class="formfelt">
				<h2>Punkt 3</h2>
				<h3>Titel</h3>
				<textarea class="text" name="text3" ><?php			
				// Read file
				$filename = "includes/menukort/menukort_3.html";
				echo($file->read($filename));
			?>
</textarea>
				<h3>Beskrivelse</h3>
				<textarea class="description" name="description3" ><?php			
				// læs beskrivelse
				$filename = "includes/menukort/menukort_3_beskrivelse.html";
				echo($file->read($filename));
			?>
</textarea>
				<h3>Pris</h3>
				<textarea class="price" name="price3"><?php			
				// læs pris
				$filename = "includes/menukort/menukort_3_pris.html";
				echo($file->read($filename));
			?>
</textarea>
			</section>
			<section class="formfelt">
				<h2>Punkt 4</h2>
				<h3>Titel</h3>
				<textarea class="text" name="text4" ><?php			
				// Read file
				$filename = "includes/menukort/menukort_4.html";
				echo($file->read($filename));
			?>
</textarea>
				<h3>Beskrivelse</h3>
				<textarea class="description" name="description4" ><?php			
				// læs beskrivelse
				$filename = "includes/menukort/menukort_4_beskrivelse.html";
				echo($file->read($filename));
			?>
</textarea>
				<h3>Pris</h3>
				<textarea class="price" name="price4"><?php			
				// læs pris
				$filename = "includes/menukort/menukort_4_pris.html";
				echo($file->read($filename));
			?>
</textarea>
			</section>
			<section class="formfelt">
				<h2>Punkt 5</h2>
				<h3>Titel</h3>
				<textarea class="text" name="text5" ><?php			
				// Read file
				$filename = "includes/menukort/menukort_5.html";
				echo($file->read($filename));
			?>
</textarea>
				<h3>Beskrivelse</h3>
				<textarea class="description" name="description5" ><?php			
				// læs beskrivelse
				$filename = "includes/menukort/menukort_5_beskrivelse.html";
				echo($file->read($filename));
			?>
</textarea>
				<h3>Pris</h3>
				<textarea class="price" name="price5"><?php			
				// læs pris
				$filename = "includes/menukort/menukort_5_pris.html";
				echo($file->read($filename));
			?>
</textarea>
			</section>
			<section class="formfelt">
				<h2>Punkt 6</h2>
				<h3>Titel</h3>
				<textarea class="text" name="text6" ><?php			
				// Read file
				$filename = "includes/menukort/menukort_6.html";
				echo($file->read($filename));
			?>
</textarea>
				<h3>Beskrivelse</h3>
				<textarea class="description" name="description6" ><?php			
				// læs beskrivelse
				$filename = "includes/menukort/menukort_6_beskrivelse.html";
				echo($file->read($filename));
			?>
</textarea>
				<h3>Pris</h3>
				<textarea class="price" name="price6"><?php			
				// læs pris
				$filename = "includes/menukort/menukort_6_pris.html";
				echo($file->read($filename));
			?>
</textarea>
			</section>
			<section class="formfelt">
				<h2>Punkt 7</h2>
				<h3>Titel</h3>
				<textarea class="text" name="text7" ><?php			
				// Read file
				$filename = "includes/menukort/menukort_7.html";
				echo($file->read($filename));
			?>
</textarea>
				<h3>Beskrivelse</h3>
				<textarea class="description" name="description7" ><?php			
				// læs beskrivelse
				$filename = "includes/menukort/menukort_7_beskrivelse.html";
				echo($file->read($filename));
			?>
</textarea>
				<h3>Pris</h3>
				<textarea class="price" name="price7"><?php			
				// læs pris
				$filename = "includes/menukort/menukort_7_pris.html";
				echo($file->read($filename));
			?>
</textarea>
			</section>
			<section class="formfelt">
				<h2>Punkt 8</h2>
				<h3>Titel</h3>
				<textarea class="text" name="text8" ><?php			
				// Read file
				$filename = "includes/menukort/menukort_8.html";
				echo($file->read($filename));
			?>
</textarea>
				<h3>Beskrivelse</h3>
				<textarea class="description" name="description8" ><?php			
				// læs beskrivelse
				$filename = "includes/menukort/menukort_8_beskrivelse.html";
				echo($file->read($filename));
			?>
</textarea>
				<h3>Pris</h3>
				<textarea class="price" name="price8"><?php			
				// læs pris
				$filename = "includes/menukort/menukort_8_pris.html";
				echo($file->read($filename));
			?>
</textarea>
			</section>
			<section class="formfelt">
				<h2>Punkt 9</h2>
				<h3>Titel</h3>
				<textarea class="text" name="text9" ><?php			
				// Read file
				$filename = "includes/menukort/menukort_9.html";
				echo($file->read($filename));
			?>
</textarea>
				<h3>Beskrivelse</h3>
				<textarea class="description" name="description9" ><?php			
				// læs beskrivelse
				$filename = "includes/menukort/menukort_9_beskrivelse.html";
				echo($file->read($filename));
			?>
</textarea>
				<h3>Pris</h3>
				<textarea class="price" name="price9"><?php			
				// læs pris
				$filename = "includes/menukort/menukort_9_pris.html";
				echo($file->read($filename));
			?>
</textarea>
			</section>
			<section class="formfelt">
				<h2>Punkt 10</h2>
				<h3>Titel</h3>
				<textarea class="text" name="text10" ><?php			
				// Read file
				$filename = "includes/menukort/menukort_10.html";
				echo($file->read($filename));
			?>
</textarea>
				<h3>Beskrivelse</h3>
				<textarea class="description" name="description10" ><?php			
				// læs beskrivelse
				$filename = "includes/menukort/menukort_10_beskrivelse.html";
				echo($file->read($filename));
			?>
</textarea>
				<h3>Pris</h3>
				<textarea class="price" name="price10"><?php			
				// læs pris
				$filename = "includes/menukort/menukort_10_pris.html";
				echo($file->read($filename));
			?>
</textarea>
			</section>
			<section class="formfelt">
				<h2>Punkt 11</h2>
				<h3>Titel</h3>
				<textarea class="text" name="text11" ><?php			
				// Read file
				$filename = "includes/menukort/menukort_11.html";
				echo($file->read($filename));
			?>
</textarea>
				<h3>Beskrivelse</h3>
				<textarea class="description" name="description11" ><?php			
				// læs beskrivelse
				$filename = "includes/menukort/menukort_11_beskrivelse.html";
				echo($file->read($filename));
			?>
</textarea>
				<h3>Pris</h3>
				<textarea class="price" name="price11"><?php			
				// læs pris
				$filename = "includes/menukort/menukort_11_pris.html";
				echo($file->read($filename));
			?>
</textarea>
			</section>
			<section class="formfelt">
				<h2>Punkt 12</h2>
				<h3>Titel</h3>
				<textarea class="text" name="text12" ><?php			
				// Read file
				$filename = "includes/menukort/menukort_12.html";
				echo($file->read($filename));
			?>
</textarea>
				<h3>Beskrivelse</h3>
				<textarea class="description" name="description12" ><?php			
				// læs beskrivelse
				$filename = "includes/menukort/menukort_12_beskrivelse.html";
				echo($file->read($filename));
			?>
</textarea>
				<h3>Pris</h3>
				<textarea class="price" name="price12"><?php			
				// læs pris
				$filename = "includes/menukort/menukort_12_pris.html";
				echo($file->read($filename));
			?>
</textarea>
			</section>
			<section class="formfelt">
				<h2>Punkt 13</h2>
				<h3>Titel</h3>
				<textarea class="text" name="text13" ><?php			
				// Read file
				$filename = "includes/menukort/menukort_13.html";
				echo($file->read($filename));
			?>
</textarea>
				<h3>Beskrivelse</h3>
				<textarea class="description" name="description13" ><?php			
				// læs beskrivelse
				$filename = "includes/menukort/menukort_13_beskrivelse.html";
				echo($file->read($filename));
			?>
</textarea>
				<h3>Pris</h3>
				<textarea class="price" name="price13"><?php			
				// læs pris
				$filename = "includes/menukort/menukort_13_pris.html";
				echo($file->read($filename));
			?>
</textarea>
			</section>
			<section class="formfelt">
				<h2>Punkt 14</h2>
				<h3>Titel</h3>
				<textarea class="text" name="text14" ><?php			
				// Read file
				$filename = "includes/menukort/menukort_14.html";
				echo($file->read($filename));
			?>
</textarea>
				<h3>Beskrivelse</h3>
				<textarea class="description" name="description14" ><?php			
				// læs beskrivelse
				$filename = "includes/menukort/menukort_14_beskrivelse.html";
				echo($file->read($filename));
			?>
</textarea>
				<h3>Pris</h3>
				<textarea class="price" name="price14"><?php			
				// læs pris
				$filename = "includes/menukort/menukort_14_pris.html";
				echo($file->read($filename));
			?>
</textarea>
			</section>
			<section class="formfelt">
				<h2>Punkt 15</h2>
				<h3>Titel</h3>
				<textarea class="text" name="text15" ><?php			
				// Read file
				$filename = "includes/menukort/menukort_15.html";
				echo($file->read($filename));
			?>
</textarea>
				<h3>Beskrivelse</h3>
				<textarea class="description" name="description15" ><?php			
				// læs beskrivelse
				$filename = "includes/menukort/menukort_15_beskrivelse.html";
				echo($file->read($filename));
			?>
</textarea>
				<h3>Pris</h3>
				<textarea class="price" name="price15"><?php			
				// læs pris
				$filename = "includes/menukort/menukort_15_pris.html";
				echo($file->read($filename));
			?>
</textarea>
			</section>
			<section class="formfelt">
				<h2>Punkt 16</h2>
				<h3>Titel</h3>
				<textarea class="text" name="text16" ><?php			
				// Read file
				$filename = "includes/menukort/menukort_16.html";
				echo($file->read($filename));
			?>
</textarea>
				<h3>Beskrivelse</h3>
				<textarea class="description" name="description16" ><?php			
				// læs beskrivelse
				$filename = "includes/menukort/menukort_16_beskrivelse.html";
				echo($file->read($filename));
			?>
</textarea>
				<h3>Pris</h3>
				<textarea class="price" name="price16"><?php			
				// læs pris
				$filename = "includes/menukort/menukort_16_pris.html";
				echo($file->read($filename));
			?>
</textarea>
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