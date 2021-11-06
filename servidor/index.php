
<?php 

//visual index
include('./visual/visual.php');

//funçoes gerais
include('./biblioteca/functions.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome!</title>

    <script src="https://kit.fontawesome.com/68170e5167.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>

<body class="body body-background" onload="initTime();">
    <!-- tela inicial -->

    <div class="container">
        <!-- colunas --> 

        <div class="menu">

            <!-- horas -->
            <span id="timer" class="timer">00:00:00</span>
        </div>

        <div class="content">
            
            <!-- tela criar -->
            <div class="primeira-coluna">  

                <form class="form" action="#">
                    <button class="btn btn-animation btn-icon"><i class="fas fa-envelope"></i></button>
                </form>   
            </div>

            <!-- tela entrar -->
            <div class="segunda-coluna">

                <form class="form" action="#">
                    <label>
                        <!-- id -->
                        <i class="fas fa-address-card"><input type="text" name="id" placeholder=" ID"></i>
                        
                        <!-- senha -->
                        <i class="fas fa-lock"><input type="password" name="senha" placeholder=" Senha"></i>                                               
                    </label>

                    <button class="btn btn-animation"><i class="fas fa-hand-point-right"></i> Entrar</button>                                    
                </form>
            </div>
        </div>
    </div>
    
</body>

<!-- Ass. Gabriel A. Lima -->