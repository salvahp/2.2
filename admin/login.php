<?php 
session_start();
?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Peter Gift CMS</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/login.css">
</head>


<body>
<h1>Login</h1>

<section class="info">
	<h2> Brugeroplysninger </h2>
	
    <form method="post" action="check.php">
<p>Brugeravn:</p> <input name="username" type="text">
<p>password:</p> <input name="password" type="password"> <br/>
	<input type="submit" value="Login" >
	</form>
</section>
<?php echo $_SESSION["loggedin"];
?>

</body>
</html>
