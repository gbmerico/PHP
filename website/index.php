<?php

include('./visual/visual.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Entrar</title>
</head>

<body>
    <table style="width: 100%; height: 100%;">
        <tr>
            <th>
                <section>
                    <div>

                        <center>
                            <table style="width: 10%; height: 10%;">
                                <tr>
                                    <th>
                                        <h3>Administrator</h3>

                                        <form method="POST" action="./indexconfirmar.php">
                                            <input class="campos" name="id" placeholder="ID" type="text">
                                            <br>
                                            <input class="campos" name="senha" placeholder="Senha" type="password">
                                            <br>
                                            <input class="campos" type="submit" value="Entrar">
                                        </form>
                                    </th>
                                </tr>
                            </table>
                        </center>

                    </div>
                </section>
            </th>
        </tr>
    </table>
</body>

</html>