<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php
    require_once "tpl/head-ru.php"
    ?>
  <script>
    let pageId = 'rustic';
    </script>
  <title>Rustic DEKKO</title>
  <script type="text/javascript" src="highslide/highslide-full.js"></script>
  <script src="js/calculator.js" defer></script>
  <script src="js/price-list.js"></script>
  <script src="js/rustic.js" defer></script>
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
    const standard = Rustic;
    const mOpt = mRustic;
    const kOpt = kRustic;
  </script>
</head>
<body>
 <?php
  require_once "tpl/header-ru.php"
 ?>
<div id="main-body">
  <div class="highslide-gallery">
    <div class="product-block">
      <a class='highslide' href='products/rustic/Ru.jpg' onclick="return hs.expand(this)">
        <img src='products/rustic/Ru.jpg' alt='Ru'/>
      </a>
      <div class="prod-description">
        <h3>Rustic</h3>
        <p class="price"><span id="rustic-price"></span> лей/м<sup>2</sup></p>
        <p>Плотная, как настоящий камень. Отлично походит для аутентичного интерьера в стиле Рустик.
           Размеры 200*60*15мм
            1 м<sup>2</sup>- 84 плитки
        </p>
        <li class="sub-text">Существует система скидок</li>
      </div>
    </div>
    <div class="mini-gallery">
      <a class='highslide' href='products/rustic/Ra8.jpg' onclick="return hs.expand(this)">
        <img src='products/rustic/Ra8.jpg' alt='R8'/>
      </a>
      <a class='highslide' href='products/rustic/Ra2.jpg' onclick="return hs.expand(this)">
        <img src='products/rustic/Ra2.jpg' alt='R2'/>
      </a>
      <a class='highslide' href='products/rustic/Ra3.jpg' onclick="return hs.expand(this)">
        <img src='products/rustic/Ra3.jpg' alt='R3'/>
      </a>
      <a class='highslide' href='products/rustic/Ra4.jpg' onclick="return hs.expand(this)">
        <img src='products/rustic/Ra4.jpg' alt='R4'/>
      </a>
      <a class='highslide' href='products/rustic/Ra5.jpg' onclick="return hs.expand(this)">
        <img src='products/rustic/Ra5.jpg' alt='R5'/>
      </a>
      <a class='highslide' href='products/rustic/Ra6.jpg' onclick="return hs.expand(this)">
        <img src='products/rustic/Ra6.jpg' alt='R6'/>
      </a>
      <a class='highslide' href='products/rustic/Ra7.jpg' onclick="return hs.expand(this)">
        <img src='products/rustic/Ra7.jpg' alt='R7'/>
      </a>
    </div>
  </div>
  <div id="calculator">
    <h3 class="calc-text">КАЛЬКУЛЯТОР</h3>
    <div class="input-order">
      <input type="number" id="number" /><p>м<sup>2</sup></p>
    </div>
    <form id="dop-price">
      <input type="checkbox" id="upgCr"> Укладка плитки
        <p class="sub-text">(Работа, клей, грунтовка и транспортные расходы)</p>
    </form>
    <div>
      <button type="button" id="Btn-calculate">Расчет результата</button>
      <h3>Результат: <span id="current-result">0</span> лей</h3>
    </div>
  </div>
</div>
  <?php
    require_once "tpl/footer.php"
  ?>
</body>
</html>