<!DOCTYPE html>
<html>
<head>
	<title>New Project</title>
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<?php include('processes/filesystem.class.php'); 
	$file = new FileSystem;
	

		// Read file
			$filename = "includes/menukort/menukort_9.html";
			echo($file->read($filename));
	
		// Read file
			$filename = "includes/menukort/menukort_10.html";
			echo($file->read($filename));
	
	?>








<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> 
<script src="js/script.js"></script>
</body>
</html>