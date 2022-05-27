<html>
<body>

<?php
 // PHP
	$meu_nome = "marcelo soares";
	echo $meu_nome;
?>

<script>
	function valida(){
		var nome = document.f.nome.value;
		var nome2 = document.getElementById("nome");
		if(nome === ""){
			alert("nome em branco");
		}
	}
</script>

<!-- aqui e html -->
<form name="f">
	Nome <input type="text" name="nome" id="nome"/>
	</br>
	<input type="button" value="clique-me" onclick="valida()"/>
</form>

</body>
</html>
