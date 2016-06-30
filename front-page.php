<section id="about" class="section about">
  <div class="container">
    <h2 class="section__title">Despre</h2>

    <?php

      $query = new WP_query('pagename=despre');
      // The Loop
      if ($query->have_posts()) {
        while ($query->have_posts()) {
          $query->the_post();
          echo '<div class="hello">';
          the_content();
          echo '</div>';
        }
      }

      wp_reset_postdata();

    ?>
  </div>
</section>

<section id="work" class="section work">
  <div class="container">
    <h2 class="section__title">Lucrari</h2>
  </div>
</section>

<section id="contact" class="section contact">
  <div class="container">
    <h2 class="section__title">Contact</h2>

    <?php

      $query = new WP_query('pagename=contact');
      // The Loop
      if ($query->have_posts()) {
        while ($query->have_posts()) {
          $query->the_post();
          echo '<div class="hello">';
          the_content();
          echo '</div>';
        }
      }

      wp_reset_postdata();

    ?>
  </div>
</section>
