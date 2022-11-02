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
    let pageId = 'gallery';
    </script>
  <title>Galereia DEKKO</title>
  <script type="text/javascript" src="highslide/highslide-full.js"></script>
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
</head>
<body>
 <?php
  require_once "tpl/header.php"
 ?>
<div id="main-body">
  <div class="highslide-gallery">
    <div class="mini-gallery">
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

      <a class='highslide' href='products/touluse/Ta2.jpg' onclick="return hs.expand(this)">
        <img src='products/touluse/Ta2.jpg' alt='T2'/>
      </a>
      <a class='highslide' href='products/touluse/Ta3.jpg' onclick="return hs.expand(this)">
        <img src='products/touluse/Ta3.jpg' alt='T3'/>
      </a>
      <a class='highslide' href='products/touluse/Ta4.jpg' onclick="return hs.expand(this)">
        <img src='products/touluse/Ta4.jpg' alt='T4'/>
      </a>
      <a class='highslide' href='products/touluse/Ts1.jpg' onclick="return hs.expand(this)">
        <img src='products/touluse/Ts1.jpg' alt='Ts1'/>
      </a>
      <a class='highslide' href='products/touluse/Ts2.jpg' onclick="return hs.expand(this)">
        <img src='products/touluse/Ts2.jpg' alt='Ts2'/>
      </a>
      <a class='highslide' href='products/touluse/Ts3.jpg' onclick="return hs.expand(this)">
        <img src='products/touluse/Ts3.jpg' alt='Ts3'/>
      </a>

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
</div>
  <?php
    require_once "tpl/footer.php"
  ?>
</body>
</html>