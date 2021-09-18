function options() {
  document.getElementById("options").classList.toggle("show");
}

function load() {
  let elem = document.getElementById("products");

  for (var i = 0; i < 3; i++) {
    var random_link = Math.floor(Math.random() * 3) + 1;
    elem.innerHTML += '<div class="product_display"><img class="product_image" src="products/' + random_link + '.svg"><div class="product_name">Car</div><div class="product_descreption">This is a 3D Model of a Car</div></div>';
  }
}
