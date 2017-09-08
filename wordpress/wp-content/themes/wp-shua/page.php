<?php get_header(); ?>
  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
  <section>
    <div class="container-fluid siluet"><?php //edit_post_link(); ?>
      <div class="row">
        <div class="col-md-12 about">
          <h1 class="page-title"><?php the_title();?></h1>
        </div><!-- /.about-->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
    <article id="post-<?php the_ID(); ?>" <?php post_class('white-bg'); ?>>
      <div class="container-fluid  man-content hidden-xs">
        <div class="row">
          <div class="col-sm-12">
            <?php the_content(); ?>
          </div>
        </div>
      </div><!-- .container-fluid -->
    </article>

    <?php //get_sidebar(); ?>
  </section>

  <?php endwhile; endif; ?>



<?php get_footer(); ?>
