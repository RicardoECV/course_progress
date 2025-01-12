var nova_img = document.getElementById("nova_img");
var botao_magico = document.getElementById("butao_magico");
var body = document.body;
var comutar = true;

function change() { 
  if(comutar) {
    body.style.backgroundColor = "darkgreen";   
    nova_img.src = "imagens/lisboa.jpg";
    botao_magico.innerHTML = "Porto"; 
    comutar = false; 
  }
  else {     
    body.style.backgroundColor = "gray"; 
    nova_img.src = "imagens/porto.webp";
    botao_magico.innerHTML = "Lisboa";   
    comutar = true;
  }    
}
