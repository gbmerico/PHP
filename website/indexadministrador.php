<?php

include('./visual/visual.php');
include('./banco/conexao.php');

if (!isset($_SESSION)) {
    session_start();
}

//se a pessoa n estiver logado
if (!isset($_SESSION['id'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Administrator</title>
</head>

<body>

    <table border="1" style="width: 100%; height: 20%;">
        <tr>
            <th>
                <table style="width: 100%; height: 15%;">
                    <tr>
                        <th>
                            <section>
                                <div>
                                    <form>
                                        <label class="campos" for="fname">Nome: <?php echo $_SESSION['nome']; ?></label>
                                        <label class="campos" for="fname">Idade: <?php echo $_SESSION['idade']; ?></label>
                                        <label class="campos" for="fname">Sexo: <?php if ($_SESSION['sexo'] == 'M') {echo 'Homem';} else {echo 'Mulher';} ?></label>
                                        <label class="campos" for="fname">IP: <?php include('./php/ip.php'); ?></label>
                                    </form>
                                </div>
                            </section>
                        </th>
                    </tr>
                </table>


                <table border="1" style="width: 100%; height: 10%;">
                    <tr>
                        <th style="width: 10%;">
                            <form>
                                <br>
                                <select name="menu">
                                    <?php
                                    $sqlmenu = "SELECT * FROM menu";
                                    $sqlmenuquery = $mysql->query($sqlmenu);

                                    while ($menu = $sqlmenuquery->fetch_assoc()) {
                                        echo "<option name='{$menu['nome']}'>" . $menu['nome'] . "</option>";

                                        $_SESSION['menu'] = $menu['nome'];
                                    }
                                    ?>
                                </select>
                                <input class="subcampos" type="submit" value="Recarregar">
                            </form>
                        </th>
                        <th style="width: 80%;">
                            <h1>
                                <strong>
                                    <?php
                                    switch ($_SESSION['menu']) {
                                        case 'produto':
                                            echo 'Produtos';
                                            break;
                                    }
                                    ?>
                                </strong>

                            </h1>
                        </th>
                        <th style="width: 10%;">
                            <section>
                                <div>
                                    <form method="POST" action="./indexverificar.php">
                                        <br>
                                        <input class="campos" type="submit" value="Sair">
                                    </form>
                                </div>
                            </section>
                        </th>
                    </tr>
                </table>

            </th>
        </tr>
    </table>


    <table style="width: 100%; height: 80%;">
        <tr>
            <th>
                <?php
                switch ($_SESSION['menu']) {
                    case 'produto':
                        include('./produto.php');
                        break;
                }
                ?>
            </th>
        </tr>
    </table>

</body>

</html>