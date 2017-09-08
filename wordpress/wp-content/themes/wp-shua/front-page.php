<?php /* Template Name: Home Page */ get_header(); ?>

  <?php if (have_posts()): while (have_posts()) : the_post(); ?>

  <section id="about" <?php post_class(); ?>>
    <?php //edit_post_link(); ?>
    <div class="container-fluid siluet">
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
        <div class="col-md-6 col-md-offset-3 about-manufacture">
          <h2><?php the_field('title_about'); ?></h2>
          <p><?php the_field('about_desc'); ?></p>
        </div>
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
    <?php if( have_rows('geography') ): ?>
      <?php while ( have_rows('geography') ) : the_row(); ?>
         <div id="manufacture" class="container-fluid geography">
          <?php $image = get_sub_field('img'); ?>
          <div class="row">
            <div class="col-md-12">
              <h3><?php the_sub_field('title'); ?></h3>
            </div>
          </div><!-- /.row -->
        </div><!-- /#manufacture.container-fluid -->

        <div class="manufacture-map" <?php if ( !empty($image)) : ?> style="background-image: url('<?php echo $image['url']; ?>');"<?php endif; ?>></div>

      <?php  endwhile; ?>
    <?php endif; ?>

    <?php if( have_rows('about_content') ): ?>

      <div class="white-bg">
        <div class="container-fluid  man-content hidden-xs">
          <div class="row">
            <?php while ( have_rows('about_content') ) : the_row(); ?>
              <div class="col-sm-6">
                <?php the_sub_field('sub_content'); ?>
              </div>
            <?php endwhile; ?>
          </div>
        </div><!-- .container-fluid -->
      </div>
    <?php endif; ?>
  </section><!-- /#about -->

  <section id="video">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <?php $video = get_field('video_file'); ?>

          <h2><?php echo $video['title']; ?></h2>
            <div class="video_wrapp">

              <iframe id="tracks_video" width="100%" src="https://www.youtube.com/embed/<?php echo $video['vid']; ?>" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </section><!-- /#video -->

  <section id="tracks">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <h2>выберите серию</h2>
        </div>
      </div><!-- /.row -->

      <?php if( have_rows('product_tabs') ): ?>

        <div id="product_tabs" class="row">
          <div class="col-md-8 col-xs-12 col-md-offset-4">

            <div class="tabs-nav">
              <div class="tabs">
                <?php $i = 1; ?>

                <?php while ( have_rows('product_tabs') ) : the_row(); ?>
                  <?php if ( $i == 1 ) {

                    $act_class = 'active';
                    } else {
                      $act_class = '';
                    } ?>
                  <div class="tab-btn <?php echo $act_class; ?>" data-tab="#tab-<?php echo $i; ?>"><?php the_sub_field('model'); ?></div>

                  <?php  $i++; ?>
                <?php  endwhile; ?>
              </div>
              <a href="#comparison" class="hidden-xs comparison_link scroll__to">сравнить</a>
            </div>

            <?php $file = get_field('pdf_present'); ?>
            <?php if ( !empty($file)) : ?>

              <?php $attachment_id = $file['ID'];
              $url = wp_get_attachment_url( $attachment_id );
              $title = get_the_title( $attachment_id );

              $filesize = filesize( get_attached_file( $attachment_id ) );
              $filesize = size_format($filesize, 0); ?>

              <a rel="nofollow" href="<?php echo $file['url']; ?>" download="<?php echo $file['url']; ?>" class="present__doc hidden-xs">
                PDF-презентация,
                <span class="size"> <?php echo $filesize; ?></span>
              </a>
            <?php endif; ?>


          </div>
          <div class="clearfix"></div>
          <?php $j = 1; ?>
          <?php while ( have_rows('product_tabs') ) : the_row(); ?>
            <?php $image = get_sub_field('img'); ?>
            <?php if ( $j == 1 ) {
              $activ_class = 'active';
              } else{
              $activ_class = 'hidden_tab';
              } ?>

            <div id="tab-<?php echo $j; ?>" data-id="#tab-<?php echo $j; ?>" class="col-md-12 tab-content <?php echo $activ_class; ?>">
              <div class="row">
                <div class="col-sm-4 col-xs-12 prod-img">
                  <?php if ( !empty($image)) : ?>
                    <img src="<?php echo $image['url']; ?>" title="<?php the_sub_field('title'); ?>">
                  <?php endif; ?>
                </div>

                <div class="col-sm-8 col-xs-12 prod-table">
                  <div class="table_title">Характеристики<span class="right"><?php the_sub_field('title'); ?></span></div>
                  <?php the_sub_field('cont'); ?>
                </div>


              </div><!-- /.row -->
            </div><!-- /#tab-<?php echo $j; ?> -->
            <?php  $j++; ?>
          <?php  endwhile; ?>

          <div id="track_advantages" class="col-md-12">
            <div class="row">
              <?php $k = 1; ?>
              <?php while ( have_rows('product_tabs') ) : the_row(); ?>
                <?php $image = get_sub_field('img'); ?>
                <?php if ( $k == 1 ) {
                  $activ_class = 'active';
                  } else{
                  $activ_class = 'hidden_tab';
                  } ?>

                <div data-id="#tab-<?php echo $k; ?>" class="col-md-12 tab-content <?php echo $activ_class; ?>">
                  <?php if( get_sub_field('icons' ) ): ?>
                    <div class="row">
                    <div class="col-md-12 prod-character">
                      <?php while ( has_sub_field('icons' ) ) : ?>
                        <?php $image = get_sub_field('sub_img'); ?>

                        <div class="col-sm-3 col-xs-6 char-ithem">
                          <div class="icon">
                            <?php if ( !empty($image)) : ?>
                              <img src="<?php echo $image['url']; ?>">
                            <?php endif; ?>
                          </div>
                          <div class="icon-label"><?php the_sub_field('sub_title'); ?></div>
                        </div>
                      <?php endwhile; ?>
                    </div>
                    </div>
                  <?php endif; ?>

                </div><!-- /#adv-tab-<?php echo $j; ?> -->
                <?php  $k++; ?>
              <?php  endwhile; ?>
            </div><!-- /.row -->
          </div><!-- /#track_advantages -->

        </div><!-- /.row -->
      <?php endif; ?>

      <?php $file_mob = get_field('pdf_present'); ?>
      <?php if ( !empty($file_mob)) : ?>
        <?php $attachment_id = $file_mob['ID'];
        $url = wp_get_attachment_url( $attachment_id );
        $title = get_the_title( $attachment_id );

        $filesize = filesize( get_attached_file( $attachment_id ) );
        $filesize = size_format($filesize, 0); ?>


        <div class="present__doc_wpapp visible-xs-inline-block">
          <a rel="nofollow" href="<?php echo $file_mob['url']; ?>" download="<?php echo $file_mob['url']; ?>" class="present__doc">
            PDF-презентация,<span class="size"> <?php echo $filesize; ?></span>
          </a>
        </div>
      <?php endif; ?>
    </div><!-- /.container-fluid -->

  </section><!-- /#tracks -->

  <section id="comparison"  class="hidden-xs">
    <div class="container-fluid">
      <div class="row">
        <div id="comparison-cont" class="col-md-12">
          <h2>наглядно: <br>сравнительные характеристики серий</h2>
          <?php the_field('сomparison'); ?>
        </div>
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </section><!-- /#tracks -->


  <?php if( have_rows('portfolio') ): ?>
    <section id="portfolio">
      <div class="container-fluid container-portfolio">
        <div class="row">
          <div class="col-md-12">
            <h2>примеры объектов в РФ и СНГ</h2>
            <span class="subtitle">укомплектованных оборудованием shua</span>
          </div>
          <div class="col-md-12">
            <div class="row">

              <?php while ( have_rows('portfolio') ) : the_row(); ?>
                <?php

                $images = get_sub_field('gallery');

                if( $images ): ?>
                  <?php $i = 0; ?>
                  <?php foreach( $images as $image ): ?>
                    <?php //echo $image['caption']; ?>
                    <?php if ($i == 0){ ?>
                      <a href="<?php echo $image['url']; ?>" class="col-sm-4 col-xs-6 portfolio-ithem" rel="lightbox"  style="background-image: url('<?php echo $image['sizes']['medium']; ?>');">
                        <div class="portfolio-desc"><p><?php the_sub_field('desc'); ?></p></div>
                      </a>


                    <?php } else{ ?>

                      <a href="<?php echo $image['url']; ?>" class="hidden-portfolio-ithem" rel="lightbox"></a>

                    <?php } ?>
                    <?php $i++; ?>
                  <?php endforeach; ?>

                <?php endif; ?>
              <?php  endwhile; ?>

            </div>
          </div><!-- /.row -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section><!-- /#portfolio -->
  <?php endif; ?>

  <section id="contacts">
  <div class="container-fluid">
    <div class="row">
      <h2>представительство в рф</h2>
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
    <div class="map-wrapp hidden-xs">
      <div id="yamap" style="width: 100%; height: 420px">

      <div id="map-contacts">
        <p><strong><?php the_field('contacts_title'); ?></strong></p>
        <p><?php the_field('contacts'); ?></p>
      </div>

      <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ad3aba0f92698f38bbc8bfcdfa377bea04da61470af16c60f26b102fa95b4f8cb&amp;width=100%25&amp;height=420&amp;lang=uk_RU&amp;scroll=falce"></script>

    </div>
  </div>

  </section><!-- /#contacts -->




  <?php endwhile; endif; ?>



<?php get_footer(); ?>
