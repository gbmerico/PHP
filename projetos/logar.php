<?php

include("conexao.php");

if(isset($_POST['cadastro_id']) && !empty($_POST['cadastro_id'])){

    $cadastro_id = $mysql->real_escape_string($_POST['cadastro_id']);
    $senha = $mysql->real_escape_string($_POST['senha']);

    //consulta
    $sql_code = "SELECT cadastro_id, senha, nome, data, sexo, YEAR(NOW())-YEAR(data) AS idade
                   FROM cadastro 
                  WHERE cadastro_id = '$cadastro_id' AND senha = '$senha' LIMIT 1";

    //bora rodar ela no banco, e, mostrar o erro se tiver
    $sql_query = $mysql->query($sql_code);

    //se ela retornar == 1, entao existe
    if(($sql_query->num_rows) == 1){
        $usuario = $sql_query->fetch_assoc();

        //$_SESSION fica valida mesmo quando o usuario trocar de pagina
        if(!isset($_SESSION)){
            session_start();
        }

        $_SESSION['cadastro_id'] = $usuario['cadastro_id'];
        $_SESSION['senha'] = $usuario['senha'];
        $_SESSION['nome'] = $usuario['nome'];
        $_SESSION['data'] = $usuario['data'];
        $_SESSION['sexo'] = $usuario['sexo'];
        $_SESSION['idade'] = $usuario['idade'];

        //sempre que o usuario logar vai registrar
        $nome = $usuario['nome'];
        $sql_historico = "INSERT INTO historico (historico_id, nome, data, hora) 
                               VALUES ('$cadastro_id', '$nome', current_date(), current_time())";

        $sql_query2 = $mysql->query($sql_historico);

        header("Location: administrator.php");

    }else{
        header("Location: logar.html");
    }
}

?>

