
function valida(){
		var valorNome = document.f.nome.value;
		var valorPreco = document.f.preco.value;
		
		if(valorNome == ""){
			alert("Por favor, digite o campo nome.");
			return false;
		}
		
		if(valorPreco == ""){
			alert("Por favor, digite o campo preco.");
			return false;
		}
		
		return true;
		
}	

function bemVindoUsuario(){
	alert("Ola, seja bem vindo, Pedro.");
}