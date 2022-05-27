<html>
<body>

<?php
	echo "Isto é PHP :) ";		
	echo "<br>Outro teste :) ";	
	
	$nome = "marcelo";
	$idade = 90;

	echo $nome . "</br>" . ($idade + (5+6));
	echo $nome;
	echo "</br>";
	echo $idade;
	
	if($idade > 18){
			echo "e maior de idade";
	}else{
			echo "e maior de idade";
	}
	
	 
	echo "<table border='1'>";
	for($i = 0; $i < 10; $i++){
		echo "<tr><td>" . $i . "</td></tr>";
	}
	echo "</table>";
		
	// chamando, usando a funcao
	echo somar(5,6);
	$resultado_soma = somar(5,6);
		echo "</br>";
	echo $resultado_soma;

	// declaracao de funcao
	function somar($var1, $var2){
		$somador = $var1 + $var2;
		return $somador;
	}	 

?>

</body>
</html>
