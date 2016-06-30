<footer class="main-footer">
  <div class="container">
    <nav class="footer-menu__wrapper">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'footer-menu site-menu']);
      endif;
      ?>
    </nav>
    <p>
      &copy; D'Ale Artei <?php echo date("Y"); ?>
    </p>
  </div>
</footer>
