

var x = 1;

document.getElementById('qtd').innerHTML = x;

function aumentar() {
  document.getElementById('qtd').innerHTML = ++x;
}

function diminuir() {
    if(x != 1){
        document.getElementById('qtd').innerHTML = --x;
    }
}





