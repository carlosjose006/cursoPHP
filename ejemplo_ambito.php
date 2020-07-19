<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	
	<?php
	
	function dame_nombre (){
		//Variable de ambito local
		// Con global podemos convertirla en global
		global $nombre;
		$nombre="El nombre es $nombre";
	}
	// Variable de ambito global
	$nombre="Carlos";

	
	
	dame_nombre();	
	echo $nombre;
	
	
	?>
</body>
</html>