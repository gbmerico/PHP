<?php ?>

<style>

    @import url('https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap');

    /* resetar o css inicial da pagina */
    * {
        margin: 0;

        padding: 0;

        box-sizing: border-box;
    }

    /* vai conter as duas partes da tela inicial */
    .container {
        /* tela/ display flexivel */
        display: flex;

        /* justificar tudo ao centro */
        justify-content: center;

        /* alinhar itens */
        align-items: center;

        /* altura 'vh' altura do view port */
        height: 100vh;

        /* cor de fundo da pagina */
        background-color: whitesmoke;
    }

    /* vai conter algo */
    .content {
        /* vai tornar relativo ao meio */
        position: relative;

        /* tela/ display flexivel */
        display: flex;

        /* é um estilo de borda */
        border-radius: 15px;

        /* cor de funda */
        background-color: white;

        /* altura */
        height: 50%;

        /* largura */
        width: 50%;

        /* vai criar um espaço entre as divs e centralizar os itens*/
        justify-content: space-between;;

        /* alinhar itens */
        align-items: center;
    }

        .primeiro {
            /* display 'none' vai priorizar mostrando apenas o conteudo */
            position: absolute;
            display: flex;
        }

            .primeiro .primeira-coluna {
                order: 2;
                z-index: -1;
            }

            .primeiro .segunda-coluna {
                order: 1;
                z-index: -1;
            }

        .segundo {
            /* tela/ display flexivel */
            display: flex;
        }

    .content::before {
        content: "";

        /* vai tornar absoluto a toda div */
        position: absolute;

        /* cor de fundo dessa div */
        background-color: turquoise;

        /* altura */
        height: 100%;

        /* largura */
        width: 40%;

        /* vai lançar todos os itens a frente */
        z-index: 1;

        /* bordas da coluna direita */
        border-top-left-radius: 15px;
        border-top-right-radius: 15px;
        border-bottom-left-radius: 15px;
        border-bottom-right-radius: 15px;

        left: 0;
    }

    .primeira-coluna { 
        /* tela/ display flexivel */
        display: flex;

        /* pequeno ajuste nas colunas para centralizar */
        width: 40%;

        /* vai lançar todos os itens a frente */
        z-index: 10;

        /* flex para que direçao? */
        flex-direction: column;

        /* alinhar itens */
        align-items: center;
    }

    .segunda-coluna {
        /* tela/ display flexivel */
        display: flex;

        /* pequeno ajuste nas colunas para centralizar */
        width: 60%;

        /* vai lançar todos os itens a frente */
        z-index: 10;

        /* flex para que direçao? */
        flex-direction: column;

        /* alinhar itens */
        align-items: center;
    }


    .form {
        /* tela/ display flexivel */
        display: flex;

        /* flex para que direçao? */
        flex-direction: column;

        /* largura */
        width: 45%;
    }

        .form input {
            /* altura */
            height: 45px;

            /* nao ter borda */
            border: none;

            /* cor de fundo */
            background-color: whitesmoke;

            /* espaço entre os input */
            margin: 8px;

            /* é um estilo de borda */
            border-radius: 15px;
        }

        .form select{
             /* altura */
            height: 45px;

            /* nao ter borda */
            border: none;

            /* cor de fundo */
            background-color: whitesmoke;

            /* espaço entre os input */
            margin: 8px;

            /* é um estilo de borda */
            border-radius: 15px;           
        }

    body {
        /* fonte da pagina toda */
        font-family: Arial, Helvetica, sans-serif;
    }

    .title {
        /* cor do titulo */
        color: white;

        /* fonte do titulo */
        font-family: 'Permanent Marker', cursive;

        /* espesura do titulo */
        font-weight: bold;

        /* pega o titulo e coloca em caixa alta, um pouco a cima */
        text-transform: capitalize;
    }

        .title-entrar {
            /* cor do titulo */
            color: turquoise;
        }

        .title-cadastrar {
            /* cor do titulo */
            color: turquoise;
        }

    .descripiton{
        /* tamanho da fonte */
        font-size: 14px;

        /* distancia entre as linhas */
        line-height: 40px;

        /* cor da descriçao */
        color: white;
    }

    .ahref {
        /* tamanho da fonte */
        font-size: 14px;

        /* distancia entre as linhas */
        line-height: 40px;

        /* cor da descriçao */
        color: black;

        /* para alinhar o bnt com o resto */
        align-self: center;
    }

    .btn {
        /* é um estilo de borda */
        border-radius: 15px;

        /* letra maiscula */
        text-transform: uppercase;

        /* tamanho da letra */
        font-size: 10px;

        /* 10px para cima e baixo, 50px para direita e esquerda */
        padding: 10px 10px;

        /* borda transparente */
        background-color: transparent;

        /* tamanho e cor da borda */
        border: 1px solid black;

        /* cursor em cima do bnt */
        cursor: pointer;

        /* espesura do titulo */
        font-weight: bold;

        /* largura */
        width: 150px;

        /* para alinhar o bnt com o resto */
        align-self: center;

        /* serve para tirar a borda
        border-width: 0px; */
    }

        .btn-entrar{
            /* borda transparente */
            background-color: turquoise;

            transition: background-color 0.5s;
        }

            /* quando eu passar o mouse em cima do bnt */
            .btn-entrar:hover {
                background-color: white;
                color: black;
            }

        .btn-cadastrar{
            /* borda transparente */
            background-color: turquoise;

            transition: background-color 0.5s;
        }

            /* quando eu passar o mouse em cima do bnt */
            .btn-cadastrar:hover {
                background-color: white;
                color: black;
            }

        .btn-resto {
            background-color: white;
            color: black;

            transition: background-color 0.5s;
        }

            /* quando eu passar o mouse em cima do bnt */
            .btn-resto:hover {
                background-color: turquoise;
                color: black;
            }

    .cadastrar-php .primeiro .primeira-coluna,
    .cadastrar-php .primeiro .segunda-coluna {
        z-index: 11;
    }

    .cadastrar-php .segundo .primeira-coluna,
    .cadastrar-php .segundo .segunda-coluna {
        z-index: -1;
    }

    .cadastrar-php .content::before {
        left: 60%;
    }

    .entra-php .primeiro .primeira-coluna,
    .entra-php .primeiro .segunda-coluna {
        z-index: -1;
    }

    .entra-php .segundo .primeira-coluna,
    .entra-php .segundo .segunda-coluna {
        z-index: 11;
    }

    .entra-php .content::before {
        left: 0%;
    }

</style>