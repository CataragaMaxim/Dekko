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
    let pageId = 'dortmund';
    </script>
  <title>Dortmund DEKKO</title>
  <script type="text/javascript" src="highslide/highslide-full.js"></script>
  <script src="js/calculator.js" defer></script>
  <script src="js/price-list.js"></script>
  <script src="js/dortmund.js" defer></script>
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
    const standard = Dortmund;
    const mOpt = mDortmund;
    const kOpt = kDortmund;
  </script>
</head>
<body>
 <?php
  require_once "tpl/header.php"
 ?>
<div id="main-body">
  <div class="highslide-gallery">
    <div class="product-block">
      <a class='highslide' href='products/dortmund/Do.jpg' onclick="return hs.expand(this)">
        <img src='products/dortmund/Do.jpg' alt='Do'/>
      </a>
      <div class="prod-description">
        <h3>Dortmund</h3>
        <p class="price"><span id="dortmund-price"></span> lei/m<sup>2</sup></p>
        <p>Pl??ci sub??iri, netede ??i delicate. Potrivit pentru cei care prefer?? simplitatea ??i concisitatea.
           Dimensiuni 235*63*10mm
            1 m<sup>2</sup> - 68 placi
        </p>
        <li class="sub-text">Exist?? un sistem de reduceri</li>
      </div>
    </div>
    <div class="mini-gallery">
      <a class='highslide' href='products/dortmund/Db3.jpg' onclick="return hs.expand(this)">
        <img src='products/dortmund/Db3.jpg' alt='Db3'/>
      </a>
      <a class='highslide' href='products/dortmund/Da2.jpg' onclick="return hs.expand(this)">
        <img src='products/dortmund/Da2.jpg' alt='D2'/>
      </a>
      <a class='highslide' href='products/dortmund/Da3.jpg' onclick="return hs.expand(this)">
        <img src='products/dortmund/Da3.jpg' alt='D3'/>
      </a>
      <a class='highslide' href='products/dortmund/Da4.jpg' onclick="return hs.expand(this)">
        <img src='products/dortmund/Da4.jpg' alt='D4'/>
      </D>
      <a class='highslide' href='products/dortmund/Da5.jpg' onclick="return hs.expand(this)">
        <img src='products/dortmund/Da5.jpg' alt='D5'/>
      </a>
      <a class='highslide' href='products/dortmund/Db1.jpg' onclick="return hs.expand(this)">
        <img src='products/dortmund/Db1.jpg' alt='Db1'/>
      </a>
      <a class='highslide' href='products/dortmund/Db2.jpg' onclick="return hs.expand(this)">
        <img src='products/dortmund/Db2.jpg' alt='Db2'/>
      </a>
    </div>
  </div>
  <div id="calculator">
    <h3 class="calc-text">CALCULATOR</h3>
    <div class="input-order">
      <input type="number" id="number" /><p>m<sup>2</sup></p>
    </div>
    <form id="dop-price">
      <input type="checkbox" id="upgCr"> Montarea c??r??midei
        <p class="sub-text">(Lucru, adeziv, grund ??i cheltuieli de transport)</p>
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