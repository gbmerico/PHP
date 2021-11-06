<?php

if (!isset($_SESSION)) {
    session_start();
}

include('./banco/conexao.php');

if (isset($_POST['id']) && !empty($_POST['id']) && !empty($_POST['nome']) && !empty($_POST['quantidade']) && !empty($_POST['desconto'])) {
    $id = $mysql->real_escape_string($_POST['id']);
    $nome = $mysql->real_escape_string($_POST['nome']);
    $quantidade = $mysql->real_escape_string($_POST['quantidade']);
    $desconto = $mysql->real_escape_string($_POST['desconto']);
    $obs = $mysql->real_escape_string($_POST['obs']);

    $sql_code = "INSERT INTO produto 
                      VALUES ('$id', '$nome', '$quantidade', '$desconto', '$obs');
                ";

    $sqlprodutocadastro = $mysql->query($sql_code);
}

header("Location: indexadministrador.php");
