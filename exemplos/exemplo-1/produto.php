<?php

include('./banco/conexao.php');

if (!isset($_SESSION)) {
    session_start();
}

?>

<html lang="en">

<body>
    <center>
        <table style="width: 100%; height: 100px;">
            <tr>
                <th>
                    <form method="POST" action="./cadastro.php">
                        <input class="campos" name="id" placeholder="ID" type="" size="5">
                        <input class="campos" name="nome" placeholder="Nome" type="">
                        <input class="campos" name="quantidade" placeholder="Quantidade" type="" size="10">
                        <input class="campos" name="desconto" placeholder="Desconto" type="" size="10">
                        <input class="campos" name="obs" placeholder="Observação" type="" size="25">

                        <input class="subcampos" type="submit" value="Cadastrar">
                    </form>
                </th>
            </tr>
        </table>


        <table border="1" style="width: 70%; height: 100px;">
            <tr>
                <th>
                    <strong>ID</strong>
                </th>
                <th>
                    <strong>NOME</strong>
                </th>
                <th>
                    <strong>QUANTIDADE</strong>
                </th>
                <th>
                    <strong>DESCONTO (%)</strong>
                </th>
                <th>
                    <strong>OBS</strong>
                </th>
            </tr>

            <?php
            $tabela = $_SESSION['menu'];

            $sqlprodutos = "SELECT * FROM $tabela";
            $sqlprodutosquery = $mysql->query($sqlprodutos);

            while ($produtos = $sqlprodutosquery->fetch_assoc()) {
                echo "
                                    <form method='POST' action='./cadastrado.php'>
                                        <tr>
                                            <th>
                                                <input class='campos' name='{$produtos['id']}' value='{$produtos['id']}' type='label' size='5'>                                                                                    
                                            </th>
                                            <th>
                                                <input class='campos' name='{$produtos['nome']}' value='{$produtos['nome']}' type='text'>                                                                                     
                                            </th>
                                            <th>
                                                <input class='campos' name='{$produtos['quantidade']}' value='{$produtos['quantidade']}' type='text' size='10'>                                                                                      
                                            </th>
                                            <th>
                                                <input class='campos' name='{$produtos['desconto']}' value='{$produtos['desconto']}' type='text' size='10'> %                                                                                       
                                            </th>
                                            <th>
                                                <input class='campos' name='{$produtos['obs']}' value='{$produtos['obs']}' type='text' size='25'>                                                                                  
                                            </th>
                                            <th> 
                                                <input class='subcampos' type='submit' value='Deletar'>                                                                                           
                                            </th>
                                            <th>
                                                <input class='subcampos' type='submit' value='Atualizar'>                                                                                     
                                            </th>
                                        </tr>
                                    </form>
                                     ";
            }
            ?>
        </table>
    </center>

</body>

<br>

<?php echo "<font color='red'>*LEMBRANDO! O ID É O ÚNICO CAMPO QUE NÃO PODE SER IGUAL</font>" ?>

</html>