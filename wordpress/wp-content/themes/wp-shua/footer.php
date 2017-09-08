</div><!-- /wrapper -->

  <footer role="contentinfo" class="black-bg">
    <div class="footer-cont container-fluid">
      <div class="row">
        <div class="footer-center col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
        <div class="footer-logos">
          <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/foter-logo.png" alt=""></a>
          <a href="#header" class="scroll__to"><img src="<?php echo get_template_directory_uri(); ?>/img/footer-szo.png" alt=""></a>
        </div>
          <p class="copyright">
            © 2008 - <?php echo date("Y"); ?> ГК «ЗСО»
            <br>
            <br> Эксклюзивный поставщик коммерческого
            <br> оборудования SHUA, DHZ, ZSO, PROFI-FIT
            <br> на территории России, Казахстана
            <br> и Республики Беларусь.
          </p><!-- /copyright -->
          <div class="mob-contacts visible-xs">
            <p><?php the_field('contacts', 34); ?></p>

          </div>

        </div>
        <div class="col-md-4 col-sm-3 hidden-xs footer-right">
          <a href="#" class="bobaykov">Создание и поддержка — <br>веб-студия Бобяков.ру</a>
        </div>
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </footer><!-- /footer -->

  <?php wp_footer(); ?>

  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.malihu.PageScroll2id.min.js"></script>

</body>
</html>
