<?php if ( get_next_posts_link() OR get_previous_posts_link() ): ?>
  <div class="Pagination">
    <nav>
      <?php
      echo paginate_links(array(
        'prev_text' => __('<span>&laquo; Anteriores</span>', 'starter'),
        'next_text' => __('<span>Siguientes &raquo;</span>', 'starter')
      ));
      ?>
    </nav>
  </div>
<?php endif; ?>
