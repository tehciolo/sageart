<section id="top" class="hero">
  <header class="main-header">
    <div class="container">
      <div class="main-header__inner">
        <a class="brand" href="<?= esc_url(home_url('/')); ?>"><img class="logo" src="/wp-content/themes/sageart/dist/images/logo.jpg" alt="<?php bloginfo('name'); ?>"></a>
        <nav class="header-menu__wrapper">
          <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'header-menu site-menu']);
          endif;
          ?>
        </nav>
      </div>
    </div>
  </header>

  <a href="#work" class="scroll-down"><img src="/wp-content/themes/sageart/dist/images/down.png"></a>
</section>
