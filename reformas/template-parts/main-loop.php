<main class="Main">
  <section class="Main-container">
    <?php
      if ( have_posts() ):
        while ( have_posts() ):
          the_post();
          get_template_part('template-parts/home-content');
        endwhile;
        get_template_part('template-parts/pagination');
      else:
        get_template_part('template-parts/not-found');
      endif;
    ?>
  </section>
</main>
