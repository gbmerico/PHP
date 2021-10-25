<?php

// conexao
$hostname = "127.0.0.1:8081";
$user = "gabriel";
$password = "@gabriel_@";

//bancos
$bd = "adm_administrator_cadastro";

$mysql = new mysqli($hostname, $user, $password, $bd);

//se acontecer algum erro ela mostrará o número do erro e o própio erro
if($mysql->connect_errno){
    echo "ERRO! CONNECT FROM MYSQL: ".$mysql->connect_errno.$mysql->connect_error;
}

?>