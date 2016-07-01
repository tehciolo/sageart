<footer class="main-footer">
  <a href="#top" class="scroll-up"><img src="/wp-content/themes/sageart/dist/images/up.png"></a>

  <div class="container">
    <div  class="footer-menu__wrapper">
      <nav>
        <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'footer-menu site-menu']);
        endif;
        ?>
      </nav>

      <a class="facebook-link" href="facebooklink"><img src="/wp-content/themes/sageart/dist/images/facebook.png"></a>
    </div>

    <p class="colophon">
      &copy; D'Ale Artei <?php echo date("Y"); ?>
    </p>
  </div>
</footer>
