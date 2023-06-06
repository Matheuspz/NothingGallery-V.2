senha = document.getElementById("senha");
con_senha = document.getElementById("con_senha");
error = document.getElementById("error");


if (con_senha.value != senha.value) {
    error.style.opacity = 0;
}