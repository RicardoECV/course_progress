function destacar(class_css) {
  let produtos = document.querySelectorAll(class_css);
  for(let p of produtos) {p.classList.toggle("destacar");}
}

