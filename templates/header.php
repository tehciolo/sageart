<section class="hero">
  <header class="main-header">
    <div class="container">
      <a class="brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
      <nav class="header-menu__wrapper">
        <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'header-menu site-menu']);
        endif;
        ?>
      </nav>
    </div>
  </header>
</section>
