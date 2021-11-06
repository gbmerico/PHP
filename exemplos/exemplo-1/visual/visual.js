var btnEntrar = document.querySelector("#entrar");
var btnCadastrar = document.querySelector("#cadastrar");

var body = document.querySelector("body");

btnEntrar.addEventListener("click", function () {
    body.className = "entrar-php";
});

btnCadastrar.addEventListener("click", function () {
    body.className = "cadastrar-php";
});