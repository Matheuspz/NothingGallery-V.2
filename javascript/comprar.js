
var y = ["P","M","G"];
var z = 0;

document.getElementById('qtd').innerHTML = x;
document.getElementById('tamanho').innerHTML = "G";

function aumentarTM() {
  if(z != 2){
    ++z;
    document.getElementById('tamanho').innerHTML = y[z];
  }
}
function diminuirTM() {
    if(z > 0) {
      --z;
      document.getElementById('tamanho').innerHTML = y[z];
    }
    
}

