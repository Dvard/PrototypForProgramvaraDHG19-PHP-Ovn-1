<?php
$school = 'Practicum';
$number = 3;
$decimal = 5.1;
$website = '<a href="https://prakticum.fi">webbsida</a>'
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>PHP-Övning 1</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		<p>>Skola: <?php echo $school?></p>
		<p>Multiplakation: <?php echo $number * $decimal?></p>
		<p>Website: <?php echo $website?></p>
	</body>
</html>
