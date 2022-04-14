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

	</form>



</body>



</html>