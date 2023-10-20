<footer class="footer">
  <div class="container">
    <div class="footer__wrapper">
      <img class="logo" src="<?= bloginfo('template_url');?>/assets/img/logo.svg" alt="logo">

      <?php
      wp_nav_menu([
        'theme_location'  => 'footer-bottom-menu',
        'menu_class' => 'footer-navigation',
        'depth'           => 2,
      ]);
      ?>

      <div class="registration">
        <a class="login" href="#">
          LOgin
        </a>
      </div>

    </div>

    <div class="copy">
      <a class="copy__link" href="<?= the_field('privacy_policy_link', 8)?>"><?= the_field('privacy_policy_text', 8)?></a>
      <?php
          function currentYear(){
              return date('Y');
          }
          ?>
        <div class="copy__year"><?= currentYear()?></div>
      <?php
      ?>
    </div>
  </div>
  </footer>
</div>
  
	<?= wp_footer()?>

</body>
</html>