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
    <div class="container-fluid">
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

          <?php if( have_rows('header_content', 34) ): ?>
            <?php while ( have_rows('header_content', 34) ) : the_row(); ?>
              <?php $image = get_sub_field('slogan_img'); ?>

              <div class="olimpic col-sm-3 hidden-sm hidden-xs">
                <?php if ( !empty($image)) : ?>
                  <img src="<?php echo $image['url']; ?>">
                <?php endif; ?>
                <span class="desc"><?php the_sub_field('slogan_text'); ?></span>
              </div><!-- /.olimpic -->
              <div class="head-tel col-md-3 col-xs-6">
                <a href="tel:8-800-200-66-36"><?php the_sub_field('tel'); ?></a>
                <span class="desc">бесплатные звонки по РФ</span>
              </div><!-- /.head-tel -->

            <?php  endwhile; ?>
          <?php endif; ?>

      </div><!-- /.row -->
    </div><!-- /.container-fluid -->


    <nav class="nav__header" role="navigation">
    <div class="container-fluid menu-line">
        <?php wpeHeadNav(); ?>



      <div class="mob_wrapp">

        <?php wpeHeadNavLang(); ?>

        <div id="overlay_mob" class=" visible-xs-inline-block"></div>
      </div>

      <div id="humburger" class=" visible-xs-inline-block"></div>

      <div id="bottom_line"></div>
          </div><!-- /.container-fluid -->
    </nav><!-- /nav -->

  </header><!-- /header -->





