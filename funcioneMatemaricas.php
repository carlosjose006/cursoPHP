<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	
	<?php
	
	$num1=rand(1,100);
	
	echo "El numero aleatorio es $num1 <br>";
	
	$num2=pow(2,2);
	
	echo "La potencia es $num2<br>";

	$num3= sqrt(9);
	echo "La raiz cuadrada es $num3<br>";
	
	$num4= round(2,6);
	
	echo "El redondeo es $num4";
	
	$var="5";
	// conversion explicita
	$var2=(int)$var;
	
	
	
	?>
</body>
</html>