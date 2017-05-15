<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="js/jquery.js"></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/custom.css ">
	<title>
		Chave de Identificação
	</title>
</head>
<body>
	<div class="container">
			<h1 class="center text-center">
				Identificação de Famílias de Angiospermas através de chave de identificação
			</h1>
			<hr>
		<div id="flowers">
			<h2 class="text-center">
				Selecione o tipo de flor:
			</h2>
			<div id="aclamideas_monoclamideas" class="flowers center text-center">
				<input type="hidden" value="aclamideas_monoclamideas">
				Aclamídeas ou Monoclamídeas
			</div>
			<div id="dialipetalas" class="flowers center text-center">
				<input type="hidden" value="dialipetalas">
				Diclamideas Dialipétalas
			</div>
			<div id="gamopetalas" class="flowers center text-center">
				<input type="hidden" value="gamopetalas">
				Diclamideas Gamopétalas
			</div>
		</div>
		<div id="steps">
			<h2 class="text-center">
				Selecione a caracteristica
			</h2>
			<table class="table">
				<thead>
					<tr id="actual_step">
					</tr>
				</thead>
				<tbody id="step" class="step">
				</tbody>
			</table>
		</div>
		<div id="family" class="center text-center">
			<h3>
				Familia encontrada:
			</h3>
			<div id="family_found">
			</div>
		</div>
	</div>
</body>
<script type="text/javascript" src="js/custom.js"></script>
</html>