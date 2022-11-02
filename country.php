<!DOCTYPE html>
<html lang="md">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php
    require_once "tpl/head.php"
    ?>
  <script>
    let pageId = 'country';
    </script>
  <title>Country DEKKO</title>
  <script type="text/javascript" src="highslide/highslide-full.js"></script>
  <script src="js/calculator.js" defer></script>
  <script src="js/price-list.js"></script>
  <script src="js/country.js" defer></script>
  <link rel="stylesheet" type="text/css" href="highslide/highslide.css" />
  <link rel="stylesheet" href="css/product-item.css">
  
  <script type="text/javascript">
  hs.graphicsDir = 'highslide/graphics/';
  hs.align = 'center';
  hs.transitions = ['expand', 'crossfade'];
  hs.fadeInOut = true;
  hs.dimmingOpacity = 0.8;
  hs.outlineType = 'rounded-white';
  hs.captionEval = 'this.thumb.alt';
  hs.marginBottom = 105; // make room for the thumbstrip and the controls
  hs.numberPosition = 'caption';
  
  // Add the slideshow providing the controlbar and the thumbstrip
  hs.addSlideshow({
    //slideshowGroup: 'group1',
    interval: 5000,
    repeat: false,
    useControls: true,
    overlayOptions: {
      className: 'text-controls',
      position: 'bottom center',
      relativeTo: 'viewport',
      offsetY: -60
    },
    thumbstrip: {
      position: 'bottom center',
      mode: 'horizontal',
      relativeTo: 'viewport'
    }
  });
  </script>
  <script>
    const standard = Country;
    const mOpt = mCountry;
    const kOpt = kCountry;
  </script>
</head>
<body>
 <?php
  require_once "tpl/header.php"
 ?>
<div id="main-body">
  <div class="highslide-gallery">
    <div class="product-block">
      <a class='highslide' href='products/country/Co.jpg' onclick="return hs.expand(this)">
        <img src='products/country/Co.jpg' alt='Co'/>
      </a>
      <div class="prod-description">
        <h3>Country</h3>
        <p class="price"><span id="country-price"></span> lei/m<sup>2</sup></p>
        <p>Un clasic constant, bestseller-ul companiei noastre. Acest model este potrivit pentru toate tipurile de design și toate zonele. Există 2 tipuri de plăci în formă: cele principale sunt lungi, iar cele secundare sunt scurte.
           Dimensiuni 200*55*10 și 100*55*10
            1 m<sup>2</sup> - 72 meri & 36 mici
        </p>
        <li class="sub-text">Există un sistem de reduceri</li>
      </div>
    </div>
    <div class="mini-gallery">
      <a class='highslide' href='products/country/Cb5.jpg' onclick="return hs.expand(this)">
        <img src='products/country/Cb5.jpg' alt='Cb5'/>
      </a>
      <a class='highslide' href='products/country/Ca2.jpg' onclick="return hs.expand(this)">
        <img src='products/country/Ca2.jpg' alt='C2'/>
      </a>
      <a class='highslide' href='products/country/Ca3.jpg' onclick="return hs.expand(this)">
        <img src='products/country/Ca3.jpg' alt='C3'/>
      </a>
      <a class='highslide' href='products/country/Ca4.jpg' onclick="return hs.expand(this)">
        <img src='products/country/Ca4.jpg' alt='C4'/>
      </a>
      <a class='highslide' href='products/country/Cb2.jpg' onclick="return hs.expand(this)">
        <img src='products/country/Cb2.jpg' alt='Cb2'/>
      </a>
      <a class='highslide' href='products/country/Cb3.jpg' onclick="return hs.expand(this)">
        <img src='products/country/Cb3.jpg' alt='Cb3'/>
      </a>
      <a class='highslide' href='products/country/Cb4.jpg' onclick="return hs.expand(this)">
        <img src='products/country/Cb4.jpg' alt='Cb4'/>
      </a>
    </div>
  </div>
  <div id="calculator">
    <h3 class="calc-text">CALCULATOR</h3>
    <div class="input-order">
      <input type="number" id="number" /><p>m<sup>2</sup></p>
    </div>
    <form id="dop-price">
      <input type="checkbox" id="upgCr"> Montarea cărămidei
        <p class="sub-text">(Lucru, adeziv, grund și cheltuieli de transport)</p>
    </form>
    <div>
      <button type="button" id="Btn-calculate">Calcularea rezultatului</button>
      <h3>Rezultatul: <span id="current-result">0</span> lei</h3>
    </div>
  </div>
</div>
  <?php
    require_once "tpl/footer.php"
  ?>
</body>
</html>