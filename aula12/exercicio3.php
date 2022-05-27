<html>
<body>

<?php
	$meu_nome = "marcelo soares";
	$minha_idade = 90;

	validaDados($meu_nome,$minha_idade);
	
	function validaDados($nome,$idade){
		if($nome == ""){
			echo "Preencha seu nome";
		}else if($idade < 0 || $idade > 120){
			echo "Prencha a idade com um valor valido, entre 0 a 120";
		}else{
			echo "<script>alert('sucesso'); </script>";
		}
	}

?>

</body>
</html>
