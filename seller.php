<!DOCTYPE html>
<?php
session_start();
$email = $_SESSION['email'];

?>
<html>
<head>
	<title>Seller Section</title>
</head>
<body>
	<h1>WELCOME</h1>
	<?php
		//require_once("DBconnect.php");
		echo "<h2>".$email."</h2>";	
	?>
	<footer>
		<p><b>Wanna logout? Do so <a href="logout.php">here</a></b></p>
	</footer>

</body>
</html>