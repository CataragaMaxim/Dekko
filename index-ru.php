<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DEKKO</title>
  <?php
    require_once "tpl/head-ru.php"
  ?>
  <link rel="stylesheet" href="css/index.css">
  <script>
    let pageId = 'index';
  </script>
</head>
<body>
 <?php
  require_once "tpl/header-ru.php"
 ?>
    <!-- body part -->
  <div id="main-body">
   <div id="comp-info">
     <img src="img/zebra.png" alt="image">
     <div>
       <h3>Что такое “DEKKO”?</h3>
       <p>DEKKO - это продукт многолетних раздумий на тему: как не уезжая за границу, остаться дома построив успешный, самодостаточный бизнес.
        Наш стимул это: тысячи довольных клиентов, во всех уголках Молдовы, и даже во многих домах Европы.
        Мы, никогда не останавливаемся на достигнутом, будучи всегда в процессе обучения и в поиске новых идей для развития.
        
        “С горы легче идти, чем в гору, но вид намного лучше с вершины”         
        </p>
     </div>
   </div>
   <div id="order">
    <div id="category">
      <a href="decor-ru.php" class="category-prod">
        <img src="img/caramida.jpg" alt="Cb1">
        <h3>ДЕКОРАТИВНЫЙ КИРПИЧ</h3>
      </a>
      <a href="dekkoflex-ru.php" class="category-prod">
        <img src="img/dekkoflex.jpg" alt="DF1">
        <h3>DekkoFlex</h3>
      </a>
    </div>
     <h2 class="main-text">ТОП ПРОДАЖ</h2>
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