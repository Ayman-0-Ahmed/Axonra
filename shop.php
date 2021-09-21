<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Ayman Ahmed">
    <meta name="description" content="Buy creative digital goods.">
    <meta name="keywords" content="Axonra, Axonra.com">

    <title>Shop</title>
    <link rel="shortcut icon" href="assets/favicon.png">

    <link rel="stylesheet" href="css/shop.css">
  </head>
  <body>
    <nav class="navigation">
      <li class="align active"><a href=""><img class="logo" src="assets/favicon.png">xonra</a></li>
      <li class="align button"><a href="news.asp">Shop</a></li>
      <li class="align button"><a href="news.asp">Projects</a></li>
      <li class="search_align"><input type="search" placeholder="Search"></li>
      <li class="acoount_menue">
          <div class="outer_circle">
            <div class="inner_circle">
              <img class="account_icon" src="assets\username.svg" onclick="options()" alt="Account Menue">
            </div>
          </div>
        <div class="option-content" id="options">
          <a href="#">Your Acoount</a>
          <a href="#">Link 2</a>
          <a href="#">Link 2</a>
          <a href="#">Link 3</a>
        </div>
      </li>
    </nav>
    <nav class="sidenav">
      <li class="filters">Filters</li>
      <li class="price_range">Price Range</li>
      <li class="range">From<input type="number" id="lowest" value="0.00"></li>
      <li class="range">To<input type="number" id="highest" value="1000.00"></li>
      <li><a href="#">Sidenav</a></li>
      <li><a href="#">Testing</a></li>
      <li><a href="#">123</a></li>
      <li><a href="#">Test</a></li>
      <li><a href="#">Sidenav</a></li>
      <li><a href="#">Testing</a></li>
    </nav>

    <main id="main">
      <?php
      $url = "products/";
      $products = scandir($url);
      $num = 8;
      for ($i=0; $i < count($products) - 2; $i++) {
        $random = rand(2, count($products) - 1);
        $name = str_replace(".svg", "", $products[$random]);
        echo "<div class='product_display'><img class='product_image' src='products/$products[$random]'><div class='product_name'>$name</div><div class='product_descreption'>This is a 3D Model of a Car</div></div>";
      }
      ?>
    </main>

    <footer></footer>
    <script src="js/shop.js" charset="utf-8"></script>
  </body>
</html>