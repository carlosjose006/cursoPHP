<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	<?php
	
	function incrementarVariable(){
		
		  static $contador=0;
		$contador++;
		
		echo "$contador <br>";
	}
	
	incrementarVariable();
	incrementarVariable();
	incrementarVariable();
	incrementarVariable();
	
	?>
</body>
</html>