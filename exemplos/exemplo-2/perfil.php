<?php 

if(!isset($_SESSION)){
    session_start();
}

$id = $_SESSION['cadastro_id'];
$nome = $_SESSION['nome'];
$senha = $_SESSION['senha'];
$data = $_SESSION['data'];
$sexo = $_SESSION['sexo'];

?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
    </head>
        
    <body>  
        <table style="width: 100%; height: 100px;">
            <tr>
                <th>
                        
                    <section>
                        <div class="content">  
                            <form method="POST" action="./updatecadastro.php">
                                <label class="field1" name="id">ID: <?php echo $id ?></label>
                                <input class="field1" name="name" value='<?php echo $nome ?>' type="">
                                <input class="field1" name="password" value='<?php echo $senha ?>' type="text">
                                <input class="field1" name="date" value='<?php echo $data ?>' type="text">
                                <input class="field1" name="sexo" value='<?php echo $sexo ?>' type="text">
                                <input class="field1" value="Atualizar" type="submit">
                            </form>
                        </div> 
                    </section>
                </th>
            </tr>
        </table>     
    </body>

</html>

<style>
    body{font-family: Arial, Helvetica, sans-serif;}

    /* <section class="content"> */
    .content{display: inline; 
                justify-content: center;}

    /* <div class="send_email"> */
    .perfil{width: 100%; 
                max-width: 200px;}
                

    /* <form class="form" method="POST" action="./email.php"> */
    .form{display: flex; 
            flex-direction: column-reverse;}

   /* <input class="field" ... */
   .field1{padding: 10px; 
            margin-bottom: 10px; 
                border: 2px solid #ddd; 
                    border-radius: 5px; 
                        font-family: Arial, Helvetica, sans-serif; 
                            font-size: 12px;}
</style>