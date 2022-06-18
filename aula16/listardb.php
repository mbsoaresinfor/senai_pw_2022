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

$query = "select nome, idade from aluno";
$query = mysqli_query($conn,$query)
        or die(mysqli_error($conn));

while($row = mysqli_fetch_array($query)){
    echo $row["nome"] . " - " . $row["idade"] . "</br>";
}

mysqli_close($conn);

?>