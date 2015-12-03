<!DOCTYPE html>
<html>
<head>
	<title>New Project</title>
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<?php include('filesystem.class.php'); 
	$file = new FileSystem;
	

		// Read file
			$filename = "content/campaign.html";
			echo($file->read($filename));
		
		// Read file
			$filename = "content/news.html";
			echo($file->read($filename));
		
		// Read file
			$filename = "content/contact.html";
			echo($file->read($filename));
	
		// Read file
			$filename = "menukort/menukort_1.html";
			echo($file->read($filename));
	
	?>








<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> 
<script src="js/script.js"></script>
</body>
</html>