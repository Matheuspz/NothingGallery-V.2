function pagarCartao() {
    document.getElementById("metodoPag").style.display = "none";
    document.getElementById("metodoPag2").style.display = "none";
    document.getElementById("metodoPag3").style.display = "none";
    document.getElementById("formC").style.display = "flex";
    document.getElementById("btnVoltar").style.display = "block";
    document.getElementById('titulo').innerHTML = "Cartão";
    document.getElementById('titulo').style.width = "15vmin";
}
function pagVoltar() {
    document.getElementById("metodoPag").style.display = "flex";
    document.getElementById("metodoPag2").style.display = "flex";
    document.getElementById("metodoPag3").style.display = "flex";
    document.getElementById("formC").style.display = "none";
    document.getElementById("comprarPix").style.display = "none";
    document.getElementById("btnVoltar").style.display = "none";
    document.getElementById('titulo').innerHTML = "Selecione a forma de pagamento";
    document.getElementById('titulo').style.width = "";
}
function pagarPix() {
    document.getElementById("metodoPag").style.display = "none";
    document.getElementById("metodoPag2").style.display = "none";
    document.getElementById("metodoPag3").style.display = "none";
    document.getElementById("comprarPix").style.display = "flex";
    document.getElementById("btnVoltar").style.display = "block";
    document.getElementById('titulo').innerHTML = "Pix";
    document.getElementById('titulo').style.width = "10vmin";
}
function finalizarPix() {
    document.getElementById("comprarPix").style.display = "none";
    document.getElementById("btnVoltar").style.display = "none";
    document.getElementById('titulo').innerHTML = "Leia QRCODE da chave Pix";
    document.getElementById('qrcode').style.display = "flex"
    document.getElementById('titulo').style.width = "";
}

function Validar() {
    let regexNumC = /^.{13,16}$/gm;
    let regexNome = /^[a-z]+\ [a-z]+$/gm;
}

function finalizarPix(event) {

    event.preventDefault();

    let enderecoPix = document.forms["formPix"]["enderecoPix"].value;
    let regexEnd1 = /^[a-z]+\ [0-9]+$/;

    let vreA = regexEnd1.test(enderecoPix); 

    if( vreA == false ) {
        document.getElementById("error").style.display = "block";
        return false;
    } else {
        document.getElementById("comprarPix").style.display = "none";
        document.getElementById("btnVoltar").style.display = "none";
        document.getElementById('titulo').innerHTML = "Leia QRCODE da chave Pix";
        document.getElementById('qrcode').style.display = "flex"
        document.getElementById('titulo').style.width = "";

        return true;
    }


}