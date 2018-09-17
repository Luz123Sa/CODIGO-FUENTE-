<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="description" content="DESCRIPCION DE LA EMPRESA">
  <title>Biogen JY</title>
  <link rel="stylesheet" href="index.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
</head>
<body>
  <!-- MAIN WRAPPER -->
  <div id="wrapper">
    <div id="banner-wrapper">
    <header>
        <div id="header-inner">
          <a href="#" id="logo">
            <img src="img/pics/fazt_logo.png" alt="">
          </a>
         </div>
          <nav>
            <a href="#" id="menu-icon">
              <i class="fa fa-bars"></i>
            </a>
            <ul>
              <li><a href="index.html" class="current">Registrarse</a></li>
              <li><a href="#skills">Iniciar sesión</a></li></ul>
          </nav>
          <nav>
             <ul>
                <li><a href="#">INICIO</a></li>
                <li><a href="#">NOSOTROS</a></li>
                <li><a href="#">PRODUCTOS</a></li>
                <li><a href="#">SERVICIOS</a></li>
                <li><a href="#">RECLAMOS/SUGERENCIAS</a></li>
                <li><a href="#">CONTACTENOS</a></li>
            </ul>
          </nav>
      </header>
      <!-- SLIDER -->
      <div id="slide-wrap">
        <section class="slider">
          <ul class="slider1">
            <li><img src="img/slider/slider1.jpg" alt=""></li>
            <li><img src="img/slider/slider2.jpg" alt=""></li>
            <li><img src="img/slider/slider3.jpg" alt=""></li>
          </ul>
        </section>
      </div>
    </div>
<section class="sidebar">
      <img src="img/pics/fazt_logo.png">
</section>
    <h1>Drogueria Biogen JY</h1>
    <!-- LEFT COL -->
  <section class="left-col" id="portfolio">
      <article>
        <h2>Biogen JY</h2>
          <p>
Biogen JY S.A.C es una empresa que se dedica a la comercialización de productos
de análisis clínicos y a la venta de equipos de diálisis. Se funda en el año 2013
en la ciudad de Huancayo por la Gerente General Yanet Bartolo Cerron.
</p>
      </article>
    </section>
    <div class="clearfix-padding"></div>
    <!-- INFO THUMBNAILS -->
    <div class="one-third-padding" id="services">
      <h3>Our Skills One</h3>
      <img src="img/pics/image1.png" alt="">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis assumenda provident recusandae deserunt aperiam laboriosam distinctio sed itaque quas maxime!</p>
    </div>
    <div class="one-third-padding">
      <h3>Our Skills Two</h3>
      <img src="img/pics/image2.png" alt="">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis assumenda provident recusandae deserunt aperiam laboriosam distinctio sed itaque quas maxime!</p>
    </div>
    <div class="one-third-padding">
      <h3>Our Skills Three</h3>
      <img src="img/pics/image3.png" alt="">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis assumenda provident recusandae deserunt aperiam laboriosam distinctio sed itaque quas maxime!</p>
    </div>
  </div>
  <div class="clearfix-padding"></div>
  <!-- FOOTER -->
  <footer>
    <div class="banner-wrapper">
      <div class="icon-text">
        <div class="icon-text-icon">
          <ul class="footer-nav">
            <li>
              <a href="index.html">Home</a>
            </li>
            <li>
              <a href="#">Skills</a>
            </li>
            <li>
              <a href="#">Portfolio</a>
            </li>
            <li>
              <a href="#">Our Team</a>
            </li>
            <li>
              <a href="#">Contact</a>
            </li>
          </ul>
        </div>
        <div class="icon-text-text">
          <ul class="social">
            <li>
              <a href="mailto:biogen.logistica@gmail.com">
                <i class="fa fa-envelope-o"></i></a>
            </li>
            <li>
              <a href="http://facebook.com/fazttech">
                <i class="fa fa-facebook"></i>
              </a>
            </li>
            <li>
              <a href="http://twitter.com/fazttech">
                <i class="fa fa-twitter"></i>
              </a>
            </li>
            <li>
              <a href="http://youtube.com/fazttech">
                <i class="fa fa-youtube"></i>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-instagram"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <footer class="second-footer">
    <p>
      &copy; <a href="http://faztweb.com">FaztWeb.com</a>
    </p>
  </footer>

  <!-- SCRIPTS -->
  <script>
    $(document).ready(function(){
      $('.slider1').bxSlider({
        mode: 'fade',
      });
      $('.slider2').bxSlider({
        mode: 'fade',
      });
      $('.slider3').bxSlider({
        mode: 'fade',
      });
    });
  </script>
</body>
</html>
