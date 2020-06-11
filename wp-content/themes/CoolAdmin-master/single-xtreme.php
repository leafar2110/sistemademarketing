<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Xtreme</title>

  <!-- Behavioral Meta Data -->
	<meta content='width=device-width, initial-scale=1, user-scalable=no' name='viewport'>
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="theme-color" content="#24272c">
	
	<!-- Google Meta Data -->
	<meta name='description', content=''>
	<meta name='keywords', content=''>
	<meta name="robots" content="index, follow">

	<!-- Blog Meta Data -->
	<meta name="dc.language" content="es">
	<meta name="dc.source" content="">
	<meta itemprop="url" content="">

	<!-- Twitter Card Meta Data -->
	<meta content='summary' name='twitter:card'>
	<meta content='' name='twitter:site'>
	<meta content='' name='twitter:title'>
	<meta content='' name='twitter:description'>

	<!-- Open Graph Meta Data -->
	<meta content='website' property='og:type'>
	<meta content='' property='og:image'>
	<meta property="og:site_name" content="">
	<meta property="og:title" content="">
	<meta content='' property='og:description'>
	<meta property="og:type" content="">
	<meta property="og:image" content="">

  <!-- Links -->
  <link href="<?php echo get_template_directory_uri();?>/assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri();?>/assets/css/slick.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri();?>/assets/css/slick-theme.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri();?>/assets/css/animation.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri();?>/assets/css/animate.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri();?>/assets/css/font-awesome.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri();?>/assets/css/offcanvas.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri();?>/assets/css/main.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri();?>/assets/css/responsive.css" rel="stylesheet">
</head>
<body>
  <?php if(have_posts()) : the_post();?>
  <div class="main-banner">
    <div class="main-banner__bc">
      <div class="container">
        <div class="main-banner__content">
          <div class="main-banner__item">
            <div class="main-banner__title">
              <h3>TE ATREVES AL</h3>
              <h1>RETO 5/7?</h1>
              <h3>5 Kilos en 7 Días</h3>
            </div>
          </div>
          <div class="main-banner__item">
            <div class="main-banner__img">
              <img src="<?php echo get_template_directory_uri();?>/assets/images/personas-y-producto-1.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="main-cta">
    <div class="container">
      <div class="main-cta__content">
        <div class="main-title__general">
          <p>
            ¿DESEAS MÁS INFORMACIÓN  DEL RETO?
          </p>
        </div>
        <div class="main-cta__btn">
          <a href="<?php the_title(); ?>">
            <i class="fa fa-whatsapp"></i>
            click ahora
          </a>
        </div>
      </div>
    </div>
  </div>
  <section class="main-stylelife">
    <div class="container">
      <div class="main-stylelife__content">
        <div class="main-stylelife__item">
          <div class="main-stylelife__img">
            <img src="" alt="">
          </div>
        </div>
        <div class="main-stylelife__item">
          <div class="main-title__general main-title__general--red ">
            <h2>Ya te canso ese estilo de vida</h2>
          </div>
          <ul class="main-stylelife__list">
            <li>El ejercicio no da resultados.</li>
            <li>No tienes fuerza de voluntad.</li>
            <li>Odias las dietas.</li>
            <li>Quieres cambiar tu imagen.</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <section class="about-parallax" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/fondo-mujer-1.jpg);">
    <div class="overlay"></div>
    <div class="container">
      <div class="main-title__general main-title__general--redlight">
        <h2>ÚNETE A CIENTOS DE PERSONAS <br>
        <span>QUE YA LO USARON</span>
        <hr>
        </h2>
      </div>
      <div class="main-slider__content">
        <div class="main-slider__item">
          <img src="<?php echo get_template_directory_uri();?>/assets/images/testimonio-02-1.jpg" alt="">
        </div>
        <div class="main-slider__item">
          <img src="<?php echo get_template_directory_uri();?>/assets/images/testimonio-02-1.jpg" alt="">
        </div>
      </div>
    </div>
  </section>
  <section class="main-stylelife ">
    <div class="container">
      <div class="main-stylelife__content main-stylelifetwo__content">
        <div class="main-stylelife__item">
          <div class="main-title__general main-title__general--largered ">
            <h2>CONOZCA MÁS</h2>
            <span>
                DE ESTOS EXCELENTES PRODUCTOS
            </span>
          </div>
          <ul class="main-product__list">
            <li>ThermoROAST Coffee</li>
            <li>Prevail V-TOX</li>
            <li>Fiber Plus</li>
          </ul>
        </div>
        <div class="main-stylelife__item">
          <div class="main-stylelife__img">
            <img src="" alt="">
          </div>
        </div>
        
      </div>
    </div>
  </section>
  <div class="main-cta">
      <div class="container">
        <div class="main-cta__content">
          <div class="main-title__general">
            <p>
              ¿DESEAS MÁS INFORMACIÓN  DEL RETO?
            </p>
          </div>
          <div class="main-cta__btn">
            <a href="<?php the_title(); ?>">
              <i class="fa fa-whatsapp"></i>
              click ahora
            </a>
          </div>
        </div>
      </div>
    </div>
  <div class="about-parallax mt-0" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/paula-borowska-1498-1.png);">
    <div class="overlay"></div>
  </div>
  <section class="about-parallax about-parallax__notborder">
    <!-- <div class="overlay"></div> -->
    <div class="container">
      <div class="main-title__general main-title__general--reddark">
        <h2>Cada vez somos mas <br>
        <span>pruebalo tu tambien</span>
        <hr>
        </h2>
      </div>
      <div class="main-slider__content">
        <div class="main-slider__item">
          <img src="<?php echo get_template_directory_uri();?>/assets/images/testimonio-07-2.jpg" alt="">
        </div>
        <div class="main-slider__item">
          <img src="<?php echo get_template_directory_uri();?>/assets/images/testimonio-07-2.jpg" alt="">
        </div>
      </div>
    </div>
  </section>
  <div class="main-banner main-banner--large">
    <div class="main-banner__bc main-banner__bc--large">
      <div class="container">
        <div class="main-banner__content">
          
          <div class="main-banner__item">
            <div class="main-banner__img">
              <img src="<?php echo get_template_directory_uri();?>/assets/images/personas-y-producto-1.png" alt="">
            </div>
          </div>
          <div class="main-banner__item">
            <div class="main-banner__title">
              <h3>TE ATREVES AL</h3>
              <h1>RETO 5/7?</h1>
              <h3>5 Kilos en 7 Días</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="main-slider">
    <div class="container">

      <div class="main-slider__content">
        <div class="main-slider__item">
          <img src="<?php echo get_template_directory_uri();?>/assets/images/RESULTADOS-XTREME.jpg" alt="">
        </div>
        <div class="main-slider__item">
          <img src="<?php echo get_template_directory_uri();?>/assets/images/RESULTADOS-XTREME.jpg" alt="">
        </div>
      </div>
    </div>
  </section>
  <div class="main-cta">
    <div class="container">
      <div class="main-cta__content">
        <div class="main-title__general">
          <p>
            ¿DESEAS MÁS INFORMACIÓN  DEL RETO?
          </p>
        </div>
        <div class="main-cta__btn">
          <a href="<?php the_title(); ?>">
            <i class="fa fa-whatsapp"></i>
            click ahora
          </a>
        </div>
      </div>
    </div>
  </div>
  <footer>
    <div class="container">
      <div class="main-footer__content">
        <div class="main-footer__item">
          <p>Politicas de privacidad</p>
        </div>
        <div class="main-footer__item">
          <p>Politicas de cookies</p>
        </div>
      </div>
    </div>
  </footer>
 <?php endif; ?>
  <script src="<?php echo get_template_directory_uri();?>/assets/js/jquery.min.js"></script>
  <script src="<?php echo get_template_directory_uri();?>/assets/js/bootstrap.min.js"></script>
  <script src="<?php echo get_template_directory_uri();?>/assets/js/slick.min.js"></script>
  <script src="<?php echo get_template_directory_uri();?>/assets/js/setting-slick.js"></script>
  <script src="<?php echo get_template_directory_uri();?>/assets/js/custom.js"></script>
</body>
</html>