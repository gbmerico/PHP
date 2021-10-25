<?php

include('./banco/conexao.php');

if (isset($_POST['id']) && !empty($_POST['id'])) {
    $id = $mysql->real_escape_string($_POST['id']);
    $senha = $mysql->real_escape_string($_POST['senha']);

    //consulta
    $sql_code = "SELECT id, senha, nome, data, sexo, email, YEAR(NOW())-YEAR(data) AS idade
                   FROM cadastro 
                  WHERE id = '$id' AND senha = '$senha' LIMIT 1";

    //bora rodar ela no banco, e, mostrar o erro se tiver
    $sql_query = $mysql->query($sql_code);

    //se ela retornar == 1, entao existe
    if (($sql_query->num_rows) == 1) {
        $usuario = $sql_query->fetch_assoc();

        //$_SESSION fica valida mesmo quando o usuario trocar de pagina
        if (!isset($_SESSION)) {
            session_start();
        }

        //variaveis globais, tipo isso 
        $_SESSION['id'] = $usuario['id'];
        $_SESSION['sexo'] = $usuario['sexo'];
        $_SESSION['nome'] = $usuario['nome'];
        $_SESSION['email'] = $usuario['email'];
        $_SESSION['idade'] = $usuario['idade'];

        //sempre que o usuario logar vai registrar
        $nome = $usuario['nome'];
        $sql_historico = "INSERT INTO historico (id, nome, data, hora) 
                               VALUES ('$id', '$nome', current_date(), current_time())";

        $sql_query2 = $mysql->query($sql_historico);

        //tela se for aceita
        header("Location: indexadministrador.php");
        
    } else {
        header("Location: index.php");
    }
}
