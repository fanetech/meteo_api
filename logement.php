<?php
$response = file_get_contents("https://kimobile.yentech.io/items/logement");
$jsonClass = json_decode($response);
$maison = $jsonClass->data;
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

</head>

<body>
	<h3>Site des logements</h3>
	<?php
	foreach ($maison as $m) {
		echo "<b>" . $m->titre . "</b><br>";
		echo "<img width=180 src='https://kimobile.yentech.io/assets/" . $m->image . "'";
		echo "prix : " . $m->prix . "<br>";
		echo "superfice :" . $m->superficie . "<br>";
	}
	?>
</body>

</html>