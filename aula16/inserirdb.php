<?php

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

$sql = "insert into aluno (nome,idade) 
                    values ('teste1',15)";

if(mysqli_query($conn,$sql)){
    echo "sucesso na criação do usuário";
}else{
    echo "ERROR na criação do usuário";
}                    

mysqli_close($conn);

?>