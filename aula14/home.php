<?php
session_start();

if(isset($_SESSION["login"] )){
    echo "Home do Usuário";
}else{
    echo "Esta ação não é permitida";
}

?>

