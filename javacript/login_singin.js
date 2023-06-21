



function cValidar() {
    let regexEmail = /^[a-z0-9]+@[a-z]+\.[a-z]{2,3}$/gm; 
    let regexSenha = /^.{8,20}$/gm;

    let cNameF = document.forms["cadastroForm"]["cadastroNome"].value;
    let cSobrenomeF = document.forms["cadastroForm"]["cadastroSobrenome"].value;
    let cEmailF = document.forms["cadastroForm"]["cadastroEmail"].value;
    let cSenhaF = document.forms["cadastroForm"]["cadastroSenha"].value;/*
    let cSenhaConF = document.forms["cadastroForm"]["cadastroConfSenha"].value;*/

    let cErro = document.getElementById("error");
    let cNome = document.getElementById("cadastroNome");
    let cSobrenome = document.getElementById("cadastroSobrenome");
    let cEmail = document.getElementById("cadastroEmail");
    let cSenha = document.getElementById("cadastroSenha");/*
    let cConfSenha = document.getElementById("cadastroConfSenha");*/

    cSobrenome.style.backgroundColor = "#ffffff";
    cNome.style.backgroundColor = "#ffffff";
    cEmail.style.backgroundColor = "#ffffff";
    cSenha.style.backgroundColor = "#ffffff";

    /* Nome */
    if (cNameF == "") {

        cNome.style.backgroundColor = "#ff9d9d";
        
        cErro.style.opacity = 1;
        cErro.innerHTML = "Nome inválido";

        return false;
    } 

    /* Sobrenome */
    if (cSobrenomeF == "") {
        cSobrenome.style.backgroundColor = "#ff9d9d";
        
        cErro.style.opacity = 1;
        cErro.innerHTML = "Sobrenome inválido";

        return false;
    } 

    /* Email */
    let emailVerify = regexEmail.test(cEmailF);
    if (emailVerify == false) {
        cEmail.style.backgroundColor = "#ff9d9d";
        
        cErro.style.opacity = 1;
        cErro.innerHTML = "Email inválido";

        return false;
    }
/*
    let senhaVerity = regexSenha.test(cSenhaF);
    if (senhaVerity == false) {
        cSenha.style.backgroundColor = "#ff9d9d";
        
        cErro.style.opacity = 1;
        cErro.innerHTML = "Senha deve conter no minimo 8 digitos";

        return false;
    }*/
}