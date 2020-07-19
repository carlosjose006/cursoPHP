<style>
	.estilo{
		border: solid #000003 2px;
		color: aqua;
		width: 25%;
		
		
		
	}
	
	
</style>


<?php
	
		
		function calcular($operaciones){
			
			global $numero1,$numero2;
			
			switch($operaciones){
				
			case "Suma":
				$result=$numero1+$numero2;
				echo "<h4 class='estilo'>El resultado de la suma es: $result</h4?>";
				break;
				
				case "Resta":
				$result=$numero1-$numero2;
				echo "El resultado de la resta es: $result";
				break;
				
				case "Multiplicación":
				$result=$numero1*$numero2;
				echo "El resultado de la multiplicacion es: $result";
				break;
				
				case "División":
				$result=$numero1/$numero2;
				echo "El resultado de la division es: $result";
				break;
				
				case "Módulo":
				$result=$numero1%$numero2;
				echo "El resultado de la suma es: $result";
				break;
					case "Incremento":
				$numero1++;
				echo "El resultado del incremento es: $numero1";
				break;
					case "Decremento":
				$numero1--;
				echo "El resultado del decremento es: $numero1";
				break;
			}
			
			
		}
		
		
	
	
	
	?>