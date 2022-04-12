<?php
$response = file_get_contents("https://api.openweathermap.org/data/2.5/weather?q=BOROMO&appid=2c535bd87aa39bea37646ae68183d573");
$jsonClass = json_decode($response);
var_dump($jsonClass);
$temperature = $jsonClass->main->temp;
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
	<h3>Bienvenue sur la meteo</h3>
	<h4>La température du jour de Boromo est: <?php echo $temperature ?> °C</h4>

</body>

</html>