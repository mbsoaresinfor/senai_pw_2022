<?php
if(isset($_POST["login"]) 
&& isset( $_POST["senha"])){

    $nome = $_POST["login"];
    $senha = $_POST["senha"];

    if($nome == "marcelo" && $senha == "123"){
    echo "seja bem vindo " . $nome;
    session_start();
    $_SESSION["login"] = $nome;
    header("Location: home.php");
    }
    else{
    echo "Usuário ou senha invalida";
    }
}else{
    echo "parametros post invalido";
}
?>