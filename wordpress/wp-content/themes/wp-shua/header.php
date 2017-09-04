<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' :'; } ?> <?php bloginfo( 'name' ); ?></title>

  <link href="http://www.google-analytics.com/" rel="dns-prefetch"><!-- dns prefetch -->

  <!-- icons -->
  <link href="<?php echo get_template_directory_uri(); ?>/favicon.ico" rel="shortcut icon">

  <!--[if lt IE 9]>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
  <!-- css + javascript -->
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!-- wrapper -->

<div class="wrapper">
  <header id="header" role="banner">
    <div class="container-fluid black-bg">
      <div class="row top-line flax-row">

        <div class="logo col-sm-3 col-xs-6">
          <?php if ( !is_front_page() && !is_home() ){ ?>
            <a href="<?php echo home_url(); ?>">
          <?php } ?>
              <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="<?php wp_title( '' ); ?>" title="<?php wp_title( '' ); ?>" class="logo-img">
          <?php if ( !is_front_page() && !is_home() ){ ?>
            </a>
          <?php } ?>
        </div><!-- /.logo -->
        <div class="olimpic col-sm-3 hidden-sm hidden-xs">
          <img src="<?php echo get_template_directory_uri(); ?>/img/head-olimpic.png">
          <span class="desc">китайский олимпийский комитет официальный поставщик </span>
        </div><!-- /.olimpic -->
        <div class="head-tel col-md-3 col-xs-6">
          <a href="tel:8-800-200-66-36">8-800-200-66-36</a>
          <span class="desc">бесплатные звонки по РФ</span>
        </div><!-- /.head-tel -->

      </div><!-- /.row -->
    </div><!-- /.container-fluid -->


    <nav class="nav__header container-fluid" role="navigation">
      <ul id="main-nav" class="headnav">
        <li><a href="#about">о заводе</a></li>
        <li><a href="#tracks">беговые дорожки</a></li>
        <li><a href="#video">преимущества</a></li>
        <li><a href="#portfolio">примеры объектов</a></li>
        <li><a href="#contacts">представительство в рф</a></li>
      </ul>
      <div class="mob_wrapp">
        <ul class="langnav">
          <li><a href="#" class="active">рус</a></li>
          <li><a href="#">eng</a></li>
          <li><a href="#">fr</a></li>
          <li><a href="#">es</a></li>
          <li><a href="#">ch</a></li>
        </ul>
        <div id="overlay_mob" class=" visible-xs-inline-block"></div>
      </div>

      <div id="humburger" class=" visible-xs-inline-block"></div>
<?php //wpeHeadNav(); ?>
      <div id="bottom_line"></div>
    </nav><!-- /nav -->

  </header><!-- /header -->





