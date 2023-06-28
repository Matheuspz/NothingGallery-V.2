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
    let labelC = document.getElementById("labelC");

    let numCart = document.forms["formC"]["numCart"].value;
    let nomeCart = document.forms["formC"]["nomeCart"].value;
    let vencC = document.forms["formC"]["vencC"].value;
    let codsegC = document.forms["formC"]["codsegC"].value;
    let enderecoC = document.forms["formC"]["enderecoC"].value;

    let regexNumC = /^.{13,16}$/;
    let regexNome = /^[a-z]+\ [a-z]+$/;
    let regexVenc = /^\d{4}\/\d{2}$/;
    let regexCodSeg = /^\d{3}$/;
    let regexEndereco = /^[a-z]+\ [0-9]+$/;

    let vrnum = regexNumC.test(numCart);
    let vrn = regexNome.test(nomeCart);
    let vrv = regexVenc.test(vencC);
    let vrcs = regexCodSeg.test(codsegC);
    let vre = regexEndereco.test(enderecoC);

    if( vrnum == false ) {
        labelC.innerHTML = "Numero Inválido";
        labelC.style.display = "block"
        return false;
    } else if(vrn == false) {
        labelC.innerHTML = "Nome Inválido";
        labelC.style.display = "block"        
        return false;
    } else if(vrv == false) {
        labelC.innerHTML = "Validade Inválida";
        labelC.style.display = "block"
        return false;
    } else if(vrcs == false) {
        labelC.innerHTML = "Codigo de Segurança Inválido";
        labelC.style.display = "block"
        return false;
    } else if(vre == false) {
        labelC.innerHTML = "Endereço Inválido";
        labelC.style.display = "block"
        return false;
    }

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