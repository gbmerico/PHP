
<style>

    /* resetar o css inicial da pagina */
    * {
    margin: 0;

    padding: 0;

    box-sizing: border-box;
    }

    /* fonte */
    @import url('https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap');

    .body {
        /* fonte da pagina toda */
        font-family: 'Permanent Marker', cursive;
    }

        .body-background {
            /* imagem do background */
            background-image: url('./visual/imagens/background-1.jpg');

            /* para n repetir */
            background-repeat: no-repeat;

            /* tamanho */
            background-size: cover;

            /* posiçao */
            background-position: center center;
        }

    .menu {
        /* vai tornar relativo ao meio */
        position: relative;

        /* tela/ display flexivel */
        display: flex;

        /* altura */
        height: 91%;

        /* largura */
        width: 100%;

        /* vai criar um espaço entre as divs e centralizar os itens*/
        justify-content: space-around;

        /* alinhar itens */
        align-items: center;

        /* cor do background */
        background-color: transparent;    
    }  

        .timer{
            /* tamanho da fonte */
            font-size: 60px;

            /* desaparecido */
            opacity: 0.6;
        } 

    .container {
        /* tela/ display flexivel */
        display:flex;

        /* justificar tudo ao centro */
        justify-content:right;

        /* alinhar itens */
        align-items:flex-end;

        /* altura 'vh' altura do view port */
        height: 100vh;

        /* flex para que direçao? */
        flex-direction:column;
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
        height: 9%;

        /* largura */
        width: 100%;

        /* vai criar um espaço entre as divs e centralizar os itens*/
        justify-content: space-evenly;

        /* alinhar itens */
        align-items: center;

        /* tamanho e cor da borda */
        border: 0px solid black;

        /* tamanho especifico da borda */
        border-top-left-radius: 15px;
        border-top-right-radius: 15px;
        border-bottom-left-radius: 0px;
        border-bottom-right-radius: 0px;

        /* cor do background */
        background-color: powderblue;
    }

    .descripiton{
        /* tamanho da fonte */
        font-size: 15px;

        /* distancia entre as linhas */
        line-height: 50px;

        /* cor da descriçao */
        color: black;

        /* espaço */
        margin: 5px;
    }

    .primeira-coluna { 
        /* tela/ display flexivel */
        display: flex;

        /* vai lançar todos os itens a frente */
        z-index: 1;

        /* flex para que direçao? */
        flex-direction: row;

        /* alinhar itens */
        align-items: center;  

        /* nesse caso, estou definindo a distancia entra a primeira e a segunda */
        width: 50%;
    }

    .segunda-coluna {
        /* tela/ display flexivel */
        display: flex;

        /* vai lançar todos os itens a frente */
        z-index: 1;

        /* flex para que direçao? */
        flex-direction: row;

        /* alinhar itens */
        align-items: center;           
    } 

    .form {
        /* tela/ display flexivel */
        display: flex;

        /* flex para que direçao? */
        flex-direction: row;

        /* largura */
        width: 100%;
    }    
        .form input {
            /* altura */
            height: 35px;

            /* nao ter borda */
            border: none;

            /* cor de fundo */
            background-color: whitesmoke;

            /* espaço entre os input */
            margin: 5px;

            /* é um estilo de borda */
            border-radius: 15px;
            }

        .btn {
            /* é um estilo de borda */
            border-radius: 45px;

            /* letra maiscula */
            text-transform: uppercase;

            /* tamanho da letra */
            font-size: 9px;

            /* 10px para cima e baixo, 10px para direita e esquerda */
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
            width: 100px;

            /* para alinhar o bnt com o resto */
            align-self: center;

            /* serve para tirar a borda
            border-width: 0px; */

        }  

        .btn-icon{
            /* cor da borda */
            background-color: white;

            /* valocidade */
            transition: background-color 0.5s;

            /* é um estilo de borda */
            border-radius: 45px;

            /* largura */
            width: 40px;

            /* tamanho da letra */
            font-size: 15px;
        } 


        .btn-animation{
            /* cor da borda */
            background-color: white;

            /* valocidade */
            transition: background-color 0.5s;
        } 

            /* quando eu passar o mouse em cima do bnt */
            .btn-animation:hover {
                /* cor da borda */
                background-color: skyblue;

                /* cor do texto */
                color: black;
            }   
</style>