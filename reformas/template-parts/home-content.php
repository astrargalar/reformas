<article class="Entry">
  <?php the_post_thumbnail(); ?>
  <h2>
    <a href="<?php the_permalink(); ?>">
      <?php the_title(); ?>
    </a>
  </h2>
  <aside class="Entry-info">
    <p>
      Fecha: <span><?php the_time( get_option('date_format') ); ?></span>
    </p>
    <p>
      Autor: <span><?php the_author_posts_link(); ?></span>
    </p>
    <?php if( has_category() ): ?>
      <p>
        Categorías: <?php the_category(', '); ?>
      </p>
    <?php endif; ?>
    <?php if( has_tag() ): ?>
      <p>
        <?php the_tags(); ?>
      </p>
    <?php endif; ?>
    <?php the_excerpt(); ?>
  </aside>
</article>
