<section class="section work">
  <div class="container">
    <h2 id="work" class="section__title">Lucrari</h2>

    <ul class="work__list">
      <?php
        $categories = get_categories( array(
            'orderby' => 'name',
            'order'   => 'ASC'
        ) );
        $display = false;

        foreach ($categories as $index=>$category) {

          // Get only image url
          $params = array(
            'term_id' => $category->term_id,
            'size' => 'full'
          );
          $src = category_image_src( $params , $display );

          echo '<li class="work__item';
          if ($index == 0) { echo ' is-active'; };
          echo '" style="background-image: url('. $src .')" data-action="pick-category" data-category-id="'.$category->term_id.'">';

          echo '<h3 class="work__title">'.$category->cat_name.'</h3>';
          // echo '<pre>'.var_dump($category).'</pre>';

          echo '</li>';
        }
      ?>
    </ul>

    <div class="piece__container" data-showcase="pieces">
      <?php

        foreach ($categories as $index=>$category) {

          $args = array('post_type' => 'lucrare', 'orderby' => 'name', 'post_status' => 'publish', 'posts_per_page'=>'-1', 'cat' => $category->term_id);
          $wp_query = new WP_Query($args);

          // The Loop
          if($wp_query->have_posts()):
            echo '<ul class="piece__list" data-show="pick-category" data-category-id="'.$category->term_id.'">';
            while($wp_query->have_posts()) : $wp_query->the_post();
            	echo '<li class="piece__item">';
                $images = get_field('poze');
                $price = get_field('pret');
                $title = get_field('titlu');
                echo '<a href="'.$images[0]['url'].'" class="piece__inner" data-lightbox="'.get_the_ID().'">';
                  echo '<div class="piece__image" style="background-image: url('.$images[0]['url'].')"></div>';
                  echo '<div class="piece__info">';
                    echo '<h4 class="piece__name">';
                      the_title();
                    echo '</h4>';
                    if ($title != '') {
                      echo '<h5 class="piece__title">'.$title.'</h5>';
                    }
                    echo the_field('info');
                    if ($price != '') {
                      echo '<p class="piece__price">Pretul lucrarii: <strong>'.$price.'</strong></p>';
                    }
                  echo '</div>';
                echo '</a>';
                if (count($images) > 1) {
                  for($i = 1; $i < count($images); ++$i) {
                    echo '<a href="'.$images[$i]['url'].'" style="display: none;" data-lightbox="'.get_the_ID().'"></a>';
                  }
                }
              echo '</li>';
            endwhile;
            echo '</ul>';
          else:
             echo 'no posts';
          endif;

          wp_reset_postdata();

        }

      ?>
    </div>

    <br>

    <hr class="center">

    <br>

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
