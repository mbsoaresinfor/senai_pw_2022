<html>
<body>

<?php
	$meu_nome = "marcelo soares";
	$minha_cidade = "Porto Alegre";

	mostraNomeCidade($meu_nome,$minha_cidade);
	
	function mostraNomeCidade($nome,$cidade){
		for($i=0; $i < 10; $i++){
			echo "Meu nome é: " . $nome;
			echo "</br>";
			echo "Minha cidade:" . $cidade;
			echo "</br>----</br>";
		}
	}

?>

</body>
</html>
