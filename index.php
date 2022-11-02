<!DOCTYPE html>
<html lang="md">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DEKKO</title>
  <?php
    require_once "tpl/head.php"
  ?>
  <script>
    let pageId = 'index';
  </script>
  <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <!-- header part -->
  <?php
	    require_once "tpl/header.php";
  ?>
    <!-- body part -->
  <div id="main-body">
   <div id="comp-info">
     <img src="img/zebra.png" alt="image">
     <div>
       <h3>Ce este “DEKKO”?</h3>
       <p>DEKKO - este un produs al multor ani de judecare asupra temei: cum de ramas acasă și de construit o afacere de success?
        Motivarea noastra fiind: clienții mulțumiți în toată Moldova, ba chiar în multe case din Europa.
        Nu ne oprim la ceea ce s-a realizat deja, fiind mereu în procesul de învățare și în căutarea unor idei noi pentru dezvoltare.
        
        “E usor sa cobori la vale, dar privelistea e mult mai buna de pe varf.”
        </p>
     </div>
   </div>
   <div id="order">
    <div id="category">
      <a href="decor.php" class="category-prod">
        <img src="img/caramida.jpg" alt="Cb1">
        <h3>CĂRĂMIDĂ DECORATIVĂ</h3>
      </a>
      <a href="dekkoflex.php" class="category-prod">
        <img src="img/dekkoflex.jpg" alt="DF1">
        <h3>DekkoFlex</h3>
      </a>
    </div>
     <h2 class="main-text">TOP VÂNZĂRI</h2>
    <div id="top-sell">
      <a href="paris.php"><img src="products/paris/Pa.jpg" alt="Pa"></a>
      <a href="dekkoflex.php"><img src="products/dekkoFlex/DF.jpg" alt="DF"></a>
    </div>
   </div>
  </div>
    <!-- footer part -->
  <?php
    require_once "tpl/footer.php"
  ?>
</body>
</html>