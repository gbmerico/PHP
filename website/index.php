<?php include('./visual/visual.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Entrar</title>

    <script src="https://kit.fontawesome.com/68170e5167.js" crossorigin="anonymous"></script>
</head>

<body class="entrar-php">
    <!-- tela inicial -->
    <div class="container">
        <!-- coluna 1 -->
        <div class="content primeiro">
            <!-- tela entrar -->
            <div class="primeira-coluna">
                <h1 class="title">Bem vindo!</h1>
                <p class="descripiton">Vamos conectar?</p>

                <button class="btn btn-resto" id="entrar">Entrar</button>
            </div>
            <!-- tela criar -->
            <div class="segunda-coluna">
                <h1 class="title">Criar conta</h1>
                <form class="form" action="">
                    <!-- id -->
                    <input type="text" name="id" placeholder=" ID">
                    <!-- senha -->
                    <input type="password" name="senha" placeholder=" Senha">
                    <!-- nome -->
                    <input type="text" name="nome" placeholder=" Nome completo">
                    <!-- data -->
                    <input type="date" name="data" placeholder=" Data nascimento">
                    <!-- sexo -->
                    <select><option name="homem">Homem</option> <option name="mulher">Mulher</option></select>
                    <!-- email -->
                    <input type="email" name="email" placeholder=" E-mail">

                    <button class="btn btn-cadastrar">Cadastrar <i class="fas fa-hand-point-left"></i></button>
                </form>
            </div>
        </div>

        <!-- coluna 2 -->
        <div class="content segundo">
            <!-- tela entrar -->
            <div class="primeira-coluna">
                <h1 class="title">Bem vindo!</h1>
                <p class="descripiton">Você não tem conta?</p>

                <button class="btn btn-resto" id="cadastrar">Cadastrar</button>
            </div>
            <!-- tela criar -->
            <div class="segunda-coluna">
                <h1 class="title title-entrar">Entrar</h1>

                <form class="form" action="./indexconfirmar.php">
                    <!-- id -->
                    <input type="text" name="id" placeholder=" ID">
                    <!-- senha -->
                    <input type="password" name="senha" placeholder=" Senha">
                    <!-- esqueceu senha -->
                    <a href="#" class="ahref">Esqueceu sua senha?</a>

                    <button class="btn btn-entrar"><i class="fas fa-hand-point-right"></i> Entrar</button>
                </form>
            </div>
        </div>
    </div>

    <script src="./visual/visual.js"></script>  
</body>

</html>