function validarUpd(event) {
    event.preventDefault();

    let regexEmail = /^[a-z0-9]+@[a-z]+\.[a-z]{2,3}$/gm; 
    let regexSenha = /^.{8,20}$/gm;

    let nome = document.forms["formUpd"]["nomeUpd"].value;
    let sobrenome = document.forms["formUpd"]["sobrenomeUpd"].value;
    let email = document.forms["formUpd"]["emailUpd"].value;
    let senha = document.forms["formUpd"]["senhaUpd"].value;

    let errorUpd = document.getElementById("errorUpd");
    let cNome = document.getElementById("nomeUpd");
    let cSobrenome = document.getElementById("sobrenomeUpd");
    let cEmail = document.getElementById("emailUpd");
    let cSenha = document.getElementById("senhaUpd");

    let isValid = true;

    // Resetar as cores de fundo
    cSobrenome.style.backgroundColor = "#4b4b4b";
    cNome.style.backgroundColor = "#4b4b4b";
    cEmail.style.backgroundColor = "#4b4b4b";
    cSenha.style.backgroundColor = "#4b4b4b";

    /* Nome */
    if (nome == "") {
        cNome.style.backgroundColor = "#ff9d9d";
        cNome.style.color = "#000000"
        isValid = false;
    }

    /* Sobrenome */
    if (sobrenome == "") {
        cSobrenome.style.backgroundColor = "#ff9d9d";
        cSobrenome.style.color = "#000000"
        isValid = false;
    }

    /* Email */
    let emailVerify = regexEmail.test(email);

    if (emailVerify == false ) {
        cEmail.style.backgroundColor = "#ff9d9d";
        cEmail.style.color = "#000000"
        isValid = false;
    } 


    /* Senha */ 
    let senhaVerity = regexSenha.test(senha);
    if (senhaVerity == false) {
        cSenha.style.backgroundColor = "#ff9d9d";
        cSenha.style.color = "#000000"
        isValid = false;
    }

    if (isValid) {
        // Todas as validações passaram
        errorUpd.style.opacity = 0;
        document.forms["formUpd"].submit(); // Enviar o formulário
    } else {
        // Pelo menos uma validação falhou
        errorUpd.style.opacity = 1;
        errorUpd.innerHTML = "Por favor, corrija os campos inválidos.";
    }
}