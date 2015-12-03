<?php
// Load in the file system class
include 'filesystem.class.php';
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
<input type="text">
<textarea name="" id="" cols="30" rows="10"></textarea>
<body>
<section>
	<h1>Rediger Menukort</h1>
	<p>Her redigeres i Menukortet på Peter Gift hjemmesiden. <!-- Punkterne gemmes enkeltvis--></p>
</section>
<?php
// Display success message
if(isset($_GET["success"])) {
	?>
<h2 class="success">Menukortet er gemt!</h2>
<?php
}
?>
<main>
<section>
	<form action="process1.php" method="post">
		<h2>Punkt. 1</h2>
		<textarea class="text" name="text">
			<?php			
				// Read file
				$filename = "menukort/menukort_1.html";
				echo($file->read($filename));
			?>
		</textarea>		
		<button type="submit" class="button">Gem</button>
	</form>
	<form action="process1.php" method="post">
		<h2>Punkt. 2</h2>
		<textarea class="text" name="text">
			<?php			
				// Read file
				$filename = "menukort/menukort_2.html";
				echo($file->read($filename));
			?>
		</textarea>		
		<button type="submit" class="button">Gem</button>
	</form>
		<form action="process1.php" method="post">
		<h2>Punkt. 3</h2>
		<textarea class="text" name="text">
			<?php			
				// Read file
				$filename = "menukort/menukort_3.html";
				echo($file->read($filename));
			?>
		</textarea>		
		<button type="submit" class="button">Gem</button>
	</form>
		<form action="process1.php" method="post">
		<h2>Punkt. 4</h2>
		<textarea class="text" name="text">
			<?php			
				// Read file
				$filename = "menukort/menukort_4.html";
				echo($file->read($filename));
			?>
		</textarea>		
		<button type="submit" class="button">Gem</button>
	</form>
		<form action="process1.php" method="post">
		<h2>Punkt. 5</h2>
		<textarea class="text" name="text">
			<?php			
				// Read file
				$filename = "menukort/menukort_5.html";
				echo($file->read($filename));
			?>
		</textarea>		
		<button type="submit" class="button">Gem</button>
	</form>
		<form action="process1.php" method="post">
		<h2>Punkt. 6</h2>
		<textarea class="text" name="text">
			<?php			
				// Read file
				$filename = "menukort/menukort_6.html";
				echo($file->read($filename));
			?>
		</textarea>		
		<button type="submit" class="button">Gem</button>
	</form>
		<form action="process1.php" method="post">
		<h2>Punkt. 7</h2>
		<textarea class="text" name="text">
			<?php			
				// Read file
				$filename = "menukort/menukort_7.html";
				echo($file->read($filename));
			?>
		</textarea>		
		<button type="submit" class="button">Gem</button>
	</form>
		<form action="process1.php" method="post">
		<h2>Punkt. 8</h2>
		<textarea class="text" name="text">
			<?php			
				// Read file
				$filename = "menukort/menukort_8.html";
				echo($file->read($filename));
			?>
		</textarea>		
		<button type="submit" class="button">Gem</button>
	</form>
		<form action="process1.php" method="post">
		<h2>Punkt. 9</h2>
		<textarea class="text" name="text">
			<?php			
				// Read file
				$filename = "menukort/menukort_9.html";
				echo($file->read($filename));
			?>
		</textarea>		
		<button type="submit" class="button">Gem</button>
	</form>
		<form action="process1.php" method="post">
		<h2>Punkt. 10</h2>
		<textarea class="text" name="text">
			<?php			
				// Read file
				$filename = "menukort/menukort_10.html";
				echo($file->read($filename));
			?>
		</textarea>		
		<button type="submit" class="button">Gem</button>
	</form>
	
	

</section>
</body>
</html>