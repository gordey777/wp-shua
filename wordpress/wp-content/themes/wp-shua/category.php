<?php get_header(); ?>
  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
  <section>
    <div class="container-fluid siluet"><?php //edit_post_link(); ?>
      <div class="row">
        <div class="col-md-12 about">
          <h1 class="page-title"><?php _e( 'Categories for', 'wpeasy' ); the_category(', '); ?></h1>
        </div><!-- /.about-->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
    <article>
      <div class="container-fluid  man-content hidden-xs">
        <div class="row">
          <?php get_template_part('loop'); ?>

          <?php get_template_part('pagination'); ?>
        </div>
      </div><!-- .container-fluid -->
    </article>

    <?php //get_sidebar(); ?>
  </section>

  <?php endwhile; endif; ?>

<?php get_footer(); ?>
