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

$query = "select id, nome, idade from pessoa 
            where idade > 40 && idade < 75 order by nome";
$resultado = mysqli_query($conn,$query)
        or die(mysqli_error($conn));

while($row = mysqli_fetch_array($resultado)){
    echo "Nome: <input type='text' value=" . $row['nome'] . "></br>";
   
    // echo $row["id"] . " - " . $row["nome"] 
   // . " - " . $row["idade"] . "</br>";
}

mysqli_close($conn);


?>

