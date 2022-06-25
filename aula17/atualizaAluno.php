<?php

$id_aluno = $_POST["id_aluno"];
$nova_idade_aluno = $_POST["nova_idade_aluno"];
$operacao = $_POST["operacao"];

$server_name = "localhost";
$data_base = "aula_pw";
$user = "root";
$pwd = "";

$conn = mysqli_connect($server_name,$user,
                        $pwd,$data_base);
                        
if(!$conn){
    die("conexao com o banco de dados falhou" .
                    mysqli_connect_error());
}

$sql = "update aluno set idade = " . $nova_idade_aluno .
                    " where id = "  . $id_aluno;

if(mysqli_query($conn,$sql)){
    echo "sucesso na atualização do aluno";
}else{
    echo "ERROR na atualização do aluno";
}                    

mysqli_close($conn);

?>