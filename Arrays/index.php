<!DOCTYPE html>
<html lang="en">
<head>
	<title>Arrays</title>
</head>
<body>
	<?php
		$cars = array("Volvo", "BMW", "Toyota");
		echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";

		//Length of an Array
		echo count($cars);

		//Loop through
		$arrlength = count($cars);
		for($x = 0; $x < $arrlength; $x++){
			echo $cars[$x];
			echo "<br>";
		}

		//Sort
		sort($cars);
		//Sort in decending order
		rsort($cars);
	?>
</body>
</html>