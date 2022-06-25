<?php

$id_aluno = $_POST["id_aluno"];


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

$sql = "delete from aluno where id = " . $id_aluno;

if(mysqli_query($conn,$sql)){
    echo "sucesso na remoção do aluno";
}else{
    echo "ERROR na remoção do aluno";
}                    

mysqli_close($conn);

?>