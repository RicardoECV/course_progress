
// Imagem do Toggler da Navbar Mobile
var comutar = false;

function switchImg() {
  let img_toggler = document.querySelector(".img-toggler");
  if(!comutar) {img_toggler.src = "public/images/buttons_icons/closeMenu.svg";}
  else {img_toggler.src = "public/images/buttons_icons/menu.svg";} 
  comutar = !comutar;
}