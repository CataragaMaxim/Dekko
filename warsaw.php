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
    let pageId = 'warsaw';
    </script>
  <title>Warsaw DEKKO</title>
  <script type="text/javascript" src="highslide/highslide-full.js"></script>
  <script src="js/calculator.js" defer></script>
  <script src="js/price-list.js"></script>
  <script src="js/warsaw.js" defer></script>
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
    const standard = Warsaw;
    const mOpt = mWarsaw;
    const kOpt = kWarsaw;
  </script>
</head>
<body>
 <?php
  require_once "tpl/header.php"
 ?>
<div id="main-body">
  <div class="highslide-gallery">
    <div class="product-block">
      <a class='highslide' href='products/warsaw/Wa.jpg' onclick="return hs.expand(this)">
        <img src='products/warsaw/Wa.jpg' alt='Wa'/>
      </a>
      <div class="prod-description">
        <h3>Warsaw</h3>
        <p class="price"><span id="warsaw-price"></span> lei/m<sup>2</sup></p>
        <p>Imitație excelentă a clincherului ceramic. Mare pentru decorarea bucătăriilor, fiind nemaipomenit în grija ei.
           Dimensiuni 240*63*8mm 
            1 m<sup>2</sup> - 66 placi
        </p>
        <li class="sub-text">Există un sistem de reduceri</li>
      </div>
    </div>
    <div class="mini-gallery">
      <a class='highslide' href='products/warsaw/Wa2.jpg' onclick="return hs.expand(this)">
        <img src='products/warsaw/Wa2.jpg' alt='W2'/>
      </a>
      <a class='highslide' href='products/warsaw/Wa3.jpg' onclick="return hs.expand(this)">
        <img src='products/warsaw/Wa3.jpg' alt='W3'/>
      </a>
      <a class='highslide' href='products/warsaw/Wa4.jpg' onclick="return hs.expand(this)">
        <img src='products/warsaw/Wa4.jpg' alt='W4'/>
      </a>
      <a class='highslide' href='products/warsaw/Wa5.jpg' onclick="return hs.expand(this)">
        <img src='products/warsaw/Wa5.jpg' alt='W5'/>
      </a>
      <a class='highslide' href='products/warsaw/Wa6.jpg' onclick="return hs.expand(this)">
        <img src='products/warsaw/Wa6.jpg' alt='W6'/>
      </a>
      <a class='highslide' href='products/warsaw/Wa7.jpg' onclick="return hs.expand(this)">
        <img src='products/warsaw/Wa7.jpg' alt='W7'/>
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