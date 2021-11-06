<?php

if(!isset($_SESSION)){
    session_start();
}

include("conexao.php");

$id = addslashes($_POST['id']); 
$nome = addslashes($_POST['name']); 
$senha = addslashes($_POST['password']); 
$data = addslashes($_POST['date']); 
$sexo = addslashes($_POST['sexo']);

if(isset($_POST['cadastro_id']) && !empty($id) && !empty($nome) && !empty($senha) && !empty($data) && !empty($sexo)){

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
        
        //sempre que o usuario logar vai registrar
        $sql_update = "UPDATE cadastro
                          SET cadastro_id = '$id', senha = '$nome', nome = '$senha', data = '$data', sexo = '$sexo'
                        WHERE cadastro_id = '$id'";

        $sql_query = $mysql->query($sql_update);

        header("Location: administrator.php");

    }
}

?>