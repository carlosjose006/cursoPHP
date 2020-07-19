<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
	<style>
		.resaltar{ color: #9B3435; font-weight:bold;
		}
	
	</style>
</head>

<body>
	
	<?php
	// Formas de manipular String
	
	echo "<p class=\"resaltar\">Este es un ejemplo de frases</p>";
	echo "<p class='resaltar'>Este es un ejemplo de frases</p>";
	echo '<p class="resaltar">Este es un ejemplo de frases</p>';
	
	$variable1="casa";
	$variable2='CASA';
	
	// devuelve el valor 1 si no son iguales y el 0 si son iguales
	//$resltado=strcmp($variable1,$variable2);
	// devuelve un 0 si son iguales
	$resltado=strcasecmp($variable1,$variable2);
	
	echo $resltado;
	
	
	?>
</body>
</html>