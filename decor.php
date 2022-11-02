<!DOCTYPE html>
<html lang="md">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/product.css">
  <?php
    require_once "tpl/head.php"
  ?>
  <script src="js/price-list.js"></script>
  <script src="js/price-text.js" defer></script>
  <script>
    let pageId = 'decor';
  </script>
  <title>Produse DEKKO</title>
</head>
<body>
 <?php
  require_once "tpl/header.php"
  ?>
  <div id="main-body">
    <div id="main-product-list">
      <a href="dortmund.php" class="product-info">
        <li><img src="products/dortmund/Do.jpg" alt="Do"></li>
        <li><h3>Dortmund</h3></li>
        <!-- <li><hr align="center" width="20px" size="5px" color="darkblue"/></li> -->
        <li><p><span id="dortmund-price"></span> lei/m<sup>2</sup></p></li>
      </a>
      <a href="touluse.php" class="product-info">
        <li><img src="products/touluse/To.jpg" alt="To"></li>
        <li><h3>Touluse</h3></li>
        <!-- <li><hr align="center" width="20px" size="5px" color="darkblue"/></li> -->
        <li><p><span id="touluse-price"></span> lei/m<sup>2</sup></p></li>
      </a>
      <a href="warsaw.php" class="product-info">
        <li><img src="products/warsaw/Wa.jpg" alt="Wa"></li>
        <li><h3>Warsaw</h3></li>
        <!-- <li><hr align="center" width="20px" size="5px" color="darkblue"/></li> -->
        <li><p><span id="warsaw-price"></span> lei/m<sup>2</sup></p></li>
      </a>
      <a href="country.php" class="product-info">
        <li><img src="products/country/Co.jpg" alt="Co"></li>
        <li><h3>Country</h3></li>
        <!-- <li><hr align="center" width="20px" size="5px" color="darkblue"/></li> -->
        <li><p><span id="country-price"></span> lei/m<sup>2</sup></p></li>
      </a>
      <a href="rockwood.php" class="product-info">
        <li><img src="products/rockwood/RW.jpg" alt="RW"></li>
        <li><h3>RockWood</h3></li>
        <!-- <li><hr align="center" width="20px" size="5px" color="darkblue"/></li> -->
        <li><p><span id="rockwood-price"></span> lei/m<sup>2</sup></p></li>
      </a>
      <a href="rustic.php" class="product-info">
        <li><img src="products/rustic/Ru.jpg" alt="Ru"></li>
        <li><h3>Rustic</h3></li>
        <!-- <li><hr align="center" width="20px" size="5px" color="darkblue"/></li> -->
        <li><p><span id="rustic-price"></span> lei/m<sup>2</sup></p></li>
      </a>
      <a href="afina.php" class="product-info">
        <li><img src="products/afina/Af.jpg" alt="Af"></li>
        <li><h3>Afina</h3></li>
        <!-- <li><hr align="center" width="20px" size="5px" color="darkblue"/></li> -->
        <li><p><span id="afina-price"></span> lei/m<sup>2</sup></p></li>
      </a>
      <a href="paris.php" class="product-info">
        <li><img src="products/paris/Pa.jpg" alt="Pa"></li>
        <li><h3>Paris</h3></li>
        <!-- <li><hr align="center" width="20px" size="5px" color="darkblue"/></li> -->
        <li><p><span id="paris-price"></span> lei/m<sup>2</sup></p></li>
      </a>
    </div>
  </div>
  <?php
    require_once "tpl/footer.php"
  ?>
</body>
</html>