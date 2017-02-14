<?php
error_reporting(E_ALL);
	ini_set("display_errors", 1);
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Some title</title>
	</head>

	<body>
		<header>
			<a href="#">Home</a>
		</header>

		<?php 
			require_once("routes.php");
		?>

	</body>
</html>