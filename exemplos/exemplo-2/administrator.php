<?php 

//para iniciar as variaveis do logar.php
if(!isset($_SESSION)){
    session_start();
}

//se a pessoa n estiver logado
if(!isset($_SESSION['cadastro_id'])){
    header("Location: logar.html");  
}

?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>ADMINISTRATOR</title>
    </head>
        
    <body>
        <table style="width: 100%; height: 50px;">
            <tr>
                <th>
                    <section>
                        <div class="administrador">  
                            <form method="POST" action="./logar.html">
                                <label class="field" for="fname">Nome: <?php echo $_SESSION['nome']; ?></label>
                                <label class="field" for="fname">Idade: <?php echo $_SESSION['idade']; ?></label>
                                <label class="field" for="fname">Sexo: <?php if($_SESSION['sexo'] == 'M'){echo 'Homem';}else{echo 'Mulher';} ?></label>
                                <label class="field" for="fname">IP: <?php include('ip.php'); ?></label>
                            </form>
                        </div> 
                    </section>
                </th>
            </tr>
        </table>

        <table style="width: 100%; height: 510px;">
            <tr>
                <th>
                    1
                </th>
            </tr>
        </table>

        <table style="width: 100%; height: 100px;">
            <tr>
                <th>
                    <section>
                        <div class="administrador"> 
                            <?php include('perfil.php'); ?>
                        </div> 
                    </section>
                </th>
                <th>
                    <section>
                        <div class="administrador"> 
                            <form method="POST" action="./protect.php">
                                <input class="field" type="submit" value="Sair">
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

    /* <div class="administrador"> */
    .administrador{display:flex; 
                    justify-content: center;}

    /* <form class="form" method="POST" action="./email.php"> */
    .form{display: flex; 
            flex-direction: column;}

   /* <input class="field" ... */
   .field{padding: 10px; 
            margin-bottom: 15px; 
                border: 1px solid #ddd; 
                    border-radius: 5px; 
                        font-family: Arial, Helvetica, sans-serif; 
                            font-size: 13px;}

    table, td, td {
        border: 1px solid black;
            font-family: Arial, Helvetica, sans-serif;
    }

    .field{padding: 10px; 
            margin-bottom: 10px; 
                border: 1px solid #ddd; 
                    border-radius: 5px; 
                        font-family: Arial, Helvetica, sans-serif; 
                            font-size: 12px;}
</style>