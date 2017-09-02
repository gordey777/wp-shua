<?php /* Template Name: Home Page */ get_header(); ?>

  <?php if (have_posts()): while (have_posts()) : the_post(); ?>

  <section role="main" id="about" <?php post_class(); ?>>
    <?php edit_post_link(); ?>
    <div class="container-fluid black-bg">
      <div class="row">

        <div class="col-md-12 about">
          <h1 class="page-title"><?php the_title();?></h1>

          <?php if( have_rows('advantages') ): ?>
            <div class="row icons">
            <?php while ( have_rows('advantages') ) : the_row(); ?>
              <?php $image = get_sub_field('img'); ?>
              <div class="icon col-md-3 col-xs-6">
                <div class="img-wrapp">
                  <?php if ( !empty($image)) : ?>
                    <img src="<?php echo $image['url']; ?>" title="<?php the_sub_field('title'); ?>">
                  <?php endif; ?>

                </div>
                <span class="icon-title"><?php the_sub_field('icon_title'); ?></span>
                <p><?php the_sub_field('desc'); ?></p>
              </div>
              <?php  endwhile; ?>
            </div>
          <?php endif; ?>

        </div><!-- /.about-->
        <div class="clearfix"></div>
        <div class="col-md-6 col-md-offset-3">
          <h2><?php the_field('title_about'); ?></h2>
          <p><?php the_field('about_desc'); ?></p>
        </div>
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
    <div id="manufacture" class="container-fluid black-bg">

      <?php if( have_rows('geography') ): ?>
        <?php while ( have_rows('geography') ) : the_row(); ?>
          <?php $image = get_sub_field('img'); ?>
          <div class="row">
            <div class="col-md-12">
              <h3><?php the_sub_field('title'); ?></h3>
            </div>
          </div><!-- /.row -->
          <div class="manufacture-map" <?php if ( !empty($image)) : ?> style="background-image: url('<?php echo $image['url']; ?>');"<?php endif; ?>></div>
        <?php  endwhile; ?>
      <?php endif; ?>


      <?php if( have_rows('about_content') ): ?>
        <div class="row white-bg man-content hidden-xs">
          <?php while ( have_rows('about_content') ) : the_row(); ?>
            <div class="col-sm-6">
              <?php the_sub_field('sub_content'); ?>
            </div>
          <?php endwhile; ?>
        </div>
      <?php endif; ?>

    </div><!-- /#manufacture.container-fluid -->
  </section><!-- /#about -->





  <section id="tracks">

  <div class="container-fluid black-bg">
    <div class="row">
      <div class="col-md-12">
        <?php $video = get_field('video_file'); ?>

        <h2><?php echo $video['title']; ?></h2>
          <div class="video_wrapp">

            <iframe width="100%" height="500" src="https://www.youtube.com/embed/<?php echo $video['vid']; ?>" frameborder="0" allowfullscreen></iframe>
          </div>
      </div>
      <div class="clearfix"></div>
      <div class="col-md-12">
        <h2>выберите серию</h2>
      </div>
    </div><!-- /.row -->
    <?php if( have_rows('product_tabs') ): ?>

      <div id="product_tabs" class="row">
        <div class="col-sm-8 col-sm-offset-4">
          <div class="row">
            <div class="col-sm-7">
              <div class="row tabs-nav">
                <?php $i = 1; ?>
                <?php while ( have_rows('product_tabs') ) : the_row(); ?>

                  <a class="tab-btn col-sm-4" data-tab="#tab-<?php echo $i; ?>"><?php the_sub_field('model'); ?></a>

                <?php  $i++; ?>
                <?php  endwhile; ?>
                <div class="col-md-12">
                  <a href="#">сравнить</a>
                </div>
              </div>
            </div>

            <div class="col-md-4 col-sm-5 col-md-offset-1 "><a href="#" class="present__doc">PDF-презентация, 28 мб</a></div>
          </div>
        </div>
        <?php $j = 1; ?>
        <?php while ( have_rows('product_tabs') ) : the_row(); ?>
          <?php $image = get_sub_field('img'); ?>

          <div id="tab-<?php echo $j; ?>" class="col-md-12 tab-content">
            <div class="row">
              <div class="col-sm-4 prod-img">
                <?php if ( !empty($image)) : ?>
                  <img src="<?php echo $image['url']; ?>" title="<?php the_sub_field('title'); ?>">
                <?php endif; ?>
              </div>
              <div class="col-sm-8 prod-table">
                <div class="table_title"><?php the_sub_field('title'); ?></div>
                <?php the_sub_field('cont'); ?>
              </div>

              <?php if( get_sub_field('icons' ) ): ?>
                <div class="col-md-12 prod-character">
                  <div class="row flax-row">

                    <?php while ( has_sub_field('icons' ) ) : ?>
                      <?php $image = get_sub_field('sub_img'); ?>

                      <div class="col-sm-3 char-ithem">
                        <div class="icon">
                          <?php if ( !empty($image)) : ?>
                            <img src="<?php echo $image['url']; ?>">
                          <?php endif; ?>
                        </div>
                        <div class="icon-label"><?php the_sub_field('sub_title'); ?></div>
                      </div>
                    <?php endwhile; ?>

                  </div>
                <?php endif; ?>
              </div>
            </div>
          </div><!-- /#tab-<?php echo $j; ?> -->
          <?php  $j++; ?>
        <?php  endwhile; ?>


      </div><!-- /.row -->
    <?php endif; ?>
    <div class="row">
      <div id="comparison" class="col-md-12">
        <h2>наглядно: <br>сравнительные характеристики серий</h2>
        <?php the_field('сomparison'); ?>

      </div>

    </div><!-- /.row -->
  </div><!-- /.container-fluid -->

  </section><!-- /#tracks -->

  <?php if( have_rows('portfolio') ): ?>


    <section id="portfolio">
      <div class="container-fluid container-portfolio black-bg">
        <div class="row">
          <div class="col-md-12">
            <h2>примеры объектов в РФ и СНГ</h2>
            <span class="subtitle">укомплектованных оборудованием shua</span>
          </div>
          <div class="col-md-12">
            <div class="row">
              <?php while ( have_rows('portfolio') ) : the_row(); ?>
                <?php $image = get_sub_field('img'); ?>

                <div class="col-sm-4 portfolio-ithem" <?php if ( !empty($image)) : ?> style="background-image: url('<?php echo $image['url']; ?>');"<?php endif; ?>>
                  <div class="portfolio-desc"><p><?php the_sub_field('desc'); ?></p></div>
                </div>
              <?php  endwhile; ?>

            </div>
          </div><!-- /.row -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section><!-- /#portfolio -->
  <?php endif; ?>

  <section id="contacts">
  <div class="container-fluid black-bg">
    <div class="row">
    <div class="col-md-12 map-wrapp">
      <div id="yamap" style="width: 100%; height: 420px">


      </div>

    </div>

    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
  </section><!-- /#contacts -->




  <?php endwhile; endif; ?>



<?php get_footer(); ?>
