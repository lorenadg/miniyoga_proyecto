<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-
scale=1">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head() ?>
  </head>
<body>

  <!-- logo-->
  <img class="logo" src="<?php echo get_theme_file_uri('/assets/img/logo.png'); ?>" alt="...">

  <!-- fin logo-->

  <!-- carrusel  -->

  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

    <ol class="carousel-indicators">
      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-generic" data-slide-to="1"></li>
      <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    </ol>

    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="<?php echo get_theme_file_uri('/assets/img/kids-ananda.jpg'); ?>" alt="...">
        <div class="carousel-caption">
          <h2>Mini Ananda Yoga Infantil</h2>
        </div>
      </div>
      <div class="item">
        <img src="<?php echo get_theme_file_uri('/assets/img/yoga-for-kids.jpg'); ?>" alt="...">
        <div class="carousel-caption">
          <h2>Únete a nuestra comunidad</h2>
        </div>
      </div>
      <div class="item">
        <img src="<?php echo get_theme_file_uri('/assets/img/yoga.jpg'); ?>" alt="...">
        <div class="carousel-caption">
          <h2>Conoce los beneficios del Yoga</h2>
        </div>
      </div>
    </div>

    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <!-- fin carrusel -->

  <!-- navbar -->
  <nav class="navbar navbar-default">
    <div class="container-fluid">

      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>

      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="index.html">Home</a></li>
          <li><a href="actividades.html">Actividades</a></li>
          <li><a href="contacto.html">Contacto</a></li>

          <li class="dropdown">
            <ul class="dropdown-menu">
              <li><a href="index.html">Home</a></li>
              <li><a href="actividades.html">Actividades</a></li>
              <li><a href="contacto.html">Contacto</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav><!-- fin navbar -->
