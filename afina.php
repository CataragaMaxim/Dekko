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
    let pageId = 'afina';
    </script>
  <title>Afina DEKKO</title>
  <script type="text/javascript" src="highslide/highslide-full.js"></script>
  <script src="js/calculator.js" defer></script>
  <script src="js/price-list.js"></script>
  <script src="js/price-text.js" defer></script>
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
    const standard = Afina;
    const mOpt = mAfina;
    const kOpt = kAfina;
  </script>
</head>
<body>
 <?php
  require_once "tpl/header.php"
 ?>
<div id="main-body">
  <div class="highslide-gallery">
    <div class="product-block">
      <a class='highslide' href='products/afina/Af.jpg' onclick="return hs.expand(this)">
        <img src='products/afina/Af.jpg' alt='Af'/>
      </a>
      <div class="prod-description">
        <h3>Afina</h3>
        <p class="price"><span id="afina-price"></span> lei/m<sup>2</sup></p>
        <p>Placi care imită complet piatra, și anume gresie spălată. O alegere excelentă pentru suprafețe mari.
           Dimensiuni 314 * 82*15mm
            1 m<sup>2</sup> - 39 placi
        </p>
        <li class="sub-text">Există un sistem de reduceri</li>
      </div>
    </div>
    <div class="mini-gallery">
      <a class='highslide' href='products/afina/Aa7.jpg' onclick="return hs.expand(this)">
        <img src='products/afina/Aa7.jpg' alt='A7'/>
      </a>
      <a class='highslide' href='products/afina/Aa2.jpg' onclick="return hs.expand(this)">
        <img src='products/afina/Aa2.jpg' alt='A2'/>
      </a>
      <a class='highslide' href='products/afina/Aa3.jpg' onclick="return hs.expand(this)">
        <img src='products/afina/Aa3.jpg' alt='A3'/>
      </a>
      <a class='highslide' href='products/afina/Aa4.jpg' onclick="return hs.expand(this)">
        <img src='products/afina/Aa4.jpg' alt='A4'/>
      </a>
      <a class='highslide' href='products/afina/Aa5.jpg' onclick="return hs.expand(this)">
        <img src='products/afina/Aa5.jpg' alt='A5'/>
      </a>
      <a class='highslide' href='products/afina/Aa6.jpg' onclick="return hs.expand(this)">
        <img src='products/afina/Aa6.jpg' alt='A6'/>
      </a>
      <a class='highslide' href='products/afina/Ab1.jpg' onclick="return hs.expand(this)">
        <img src='products/afina/Ab1.jpg' alt='Ab1'/>
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