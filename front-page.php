<section class="section work">
  <div class="container">
    <h2 id="work" class="section__title">Lucrari</h2>

    <?php
      $categories = get_categories( array(
          'orderby' => 'name',
          'order'   => 'ASC'
      ) );
      $display = false;

      foreach ($categories as $category) {
        // Get only image url
        $params = array(
          'term_id' => $category->term_id,
          'size' => 'full'
        );
        $src = category_image_src( $params , $display );
        echo $src;

        //echo '<pre>'.var_dump($category).'</pre>';
      }

      //echo '<pre>'.var_dump($categories).'</pre>';
    ?>

    <hr class="center">

    <p>
      Preturile mentionate in descrierea lucrarilor au rol orientativ.
    </p>

    <p>
      Pretul unei lucrari este stabilit individual, dupa consultarea clientului, luand in considerare amploarea si dimensiunea lucrarii, dificiultatea acesteia, materialele selectate, timpul necesar executiei, locatia lucrarii, precum si alte particularitati ale acesteia.
    </p>
  </div>
</section>

<div id="about" class="splitter">
  <?php

    $query = new WP_query('pagename=despre');
    // The Loop
    if ($query->have_posts()) {
      while ($query->have_posts()) {
        $query->the_post();
        $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );

  ?>

  <div class="about__left" style="background-image: url(<?php echo $feat_image; ?>)"></div>

  <div class="about__right">
    <div class="container--hr">
      <section class="section about">
          <h2 class="section__title">Despre</h2>

          <?php the_content(); ?>

          <hr>
      </section>
    </div>
  </div>

  <?php

      }
    }

    wp_reset_postdata();

  ?>
</div>


<section class="section contact">
  <div class="container">
    <h2 id="contact" class="section__title">Contact</h2>

    <?php

      $query = new WP_query('pagename=contact');
      // The Loop
      if ($query->have_posts()) {
        while ($query->have_posts()) {
          $query->the_post();
          echo '<div class="contact-grid">';
          the_content();
          echo '</div>';
        }
      }

      wp_reset_postdata();

    ?>
  </div>
</section>
