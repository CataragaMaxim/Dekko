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
    let pageId = 'rockwood';
    </script>
  <title>RockWood DEKKO</title>
  <script type="text/javascript" src="highslide/highslide-full.js"></script>
  <script src="js/calculator.js" defer></script>
  <script src="js/price-list.js"></script>
  <script src="js/rockwood.js" defer></script>
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
    const standard = RockWood;
    const mOpt = mRockWood;
    const kOpt = kRockWood;
  </script>
</head>
<body>
 <?php
  require_once "tpl/header-ru.php"
 ?>
<div id="main-body">
  <div class="highslide-gallery">
    <div class="product-block">
      <a class='highslide' href='products/rockwood/RW.jpg' onclick="return hs.expand(this)">
        <img src='products/rockwood/RW.jpg' alt='RW'/>
      </a>
      <div class="prod-description">
        <h3>RockWood</h3>
        <p class="price"><span id="rockwood-price"></span> лей/м<sup>2</sup></p>
        <p>Очень тонкая плиточка, имитирующая фактуру дерева. Подходит для любых помещений.
           Размеры 225*59*5мм
            1 м<sup>2</sup>- 75 плиток
        </p>
        <li class="sub-text">Существует система скидок</li>
      </div>
    </div>
    <div class="mini-gallery">
    <a class='highslide' href='products/rockwood/RWa2.jpg' onclick="return hs.expand(this)">
        <img src='products/rockwood/RWa2.jpg' alt='RW2'/>
      </a>
      <a class='highslide' href='products/rockwood/RWa3.jpg' onclick="return hs.expand(this)">
        <img src='products/rockwood/RWa3.jpg' alt='RW3'/>
      </a>
      <a class='highslide' href='products/rockwood/RWa4.jpg' onclick="return hs.expand(this)">
        <img src='products/rockwood/RWa4.jpg' alt='RW4'/>
      </a>
      <a class='highslide' href='products/rockwood/RWa5.jpg' onclick="return hs.expand(this)">
        <img src='products/rockwood/RWa5.jpg' alt='RW5'/>
      </a>
      <a class='highslide' href='products/rockwood/RWan1.jpg' onclick="return hs.expand(this)">
        <img src='products/rockwood/RWan1.jpg' alt='RWan1'/>
      </a>
      <a class='highslide' href='products/rockwood/RWan2.jpg' onclick="return hs.expand(this)">
        <img src='products/rockwood/RWan2.jpg' alt='RWan2'/>
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