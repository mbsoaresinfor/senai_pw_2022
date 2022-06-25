<?php

$nome_pessoa = $_POST["nome_pessoa"];
$idade_pessoa = $_POST["idade_pessoa"];

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

$sql = "insert into pessoa (nome,idade) 
                    values ('$nome_pessoa',$idade_pessoa)";

if(mysqli_query($conn,$sql)){
    echo "sucesso na criação do pessoa";
}else{
    echo "ERROR na criação do pessoa";
}                    

//header("Location: listardb.php");
mysqli_close($conn);


?>