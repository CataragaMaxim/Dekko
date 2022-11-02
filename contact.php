<!DOCTYPE html>
<html lang="md">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contacte DEKKO</title>
  <?php
    require_once "tpl/head.php"
  ?>
  <script>
    let pageId = 'contact';
    </script>
  <link rel="stylesheet" href="css/contact.css">
</head>
<body>
    <!-- header part -->
  <?php
	    require_once "tpl/header.php";
  ?>
    <!-- body part -->
  <div id="main-body">
    <div id="main-contact-block">
      <h3>Contacte</h3>
      <li class="tel-num">Tel: +37378850131</li>
      <ul class="social-block">
       <li><a href="https://www.facebook.com/dekkomd" target="_blank"><img src="img/facebook.png" alt="facebook">facebook.com/dekkomd</a></li>
       <li><a href="https://www.instagram.com/dekko.md/" target="_blank"><img src="img/instagram.png" alt="instagram">@dekko.md</a></li>
       <li><a href="https://vk.com/dekkomd" target="_blank"><img src="img/vk.png" alt="vk">vk.com/dekkomd</a></li>
      </ul>
   <!-- Load Facebook SDK for JavaScript -->
   <div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v10.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/ru_RU/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

      <!-- Your Chat Plugin code -->
      <div class="fb-customerchat"
        attribution="setup_tool"
        page_id="109722353693554">
      </div>

  </div>
    <!-- footer part -->
  <?php
    require_once "tpl/footer.php"
  ?>
</body>
</html>