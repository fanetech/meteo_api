<?php
$vileParameter = htmlspecialchars($_GET["ville"]);
if (!empty($vileParameter)) {
	$ville = $vileParameter;
} else {
	$ville = "ouagadougou";
}



$response = file_get_contents("https://api.openweathermap.org/data/2.5/weather?q=$ville&appid=2c535bd87aa39bea37646ae68183d573");
$jsonClass = json_decode($response);
$name = $jsonClass->name;
$min = $jsonClass->main->temp_min;
$max = $jsonClass->main->temp_max;
$temperature = $jsonClass->main->temp;
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
	<link rel="stylesheet" href="styles.css">
	<title>Document</title>
</head>

<body>

	<form class="form" action="/traitement.php" method="get">
		<h3 class="card-header header">
			Vous voulez savoir la meteo de quelle ville
		</h3>
		<div class="form-row align-items-center">
			<div class="col-auto">
				<label class="sr-only" for="inlineFormInput">Ville</label>
				<input type="text" name="ville" class="form-control mb-2" id="inlineFormInput" placeholder="Ville">
			</div>
			<div class="col-auto">
				<button type="submit" class="btn btn-primary mb-2">Voir</button>
			</div>
		</div>
		<div class="card" style="width: 18rem;">
			<div class="card-body">
				<h5 class="card-title">Nom de ville</h5>
				<h6 class="card-subtitle mb-2 text-muted"><?php echo $name ?></h6>
				<p class="card-text">il fait <?php echo $temperature ?> °C </p>
				<p class="card-text">Temps minimun <?php echo $min ?> °C </p>
				<p class="card-text">Temps maximun <?php echo $max ?> °C </p>
			</div>
		</div>

	</form>



</body>



</html>