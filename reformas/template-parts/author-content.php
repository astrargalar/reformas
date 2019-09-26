<aside class="Author-info">
  <div>
    <h3><?php _e('Información del Autor:', 'starter'); ?></h3>
    <?php echo get_avatar( get_the_author_meta('ID'), 200 ); ?>
  </div>
  <ul>
    <li>
      <?php _e('Usuario: ', 'starter'); the_author(); ?>
    </li>
    <li>
      <?php _e('Nombre: ', 'starter'); echo get_the_author_meta('first_name') . ' ' . get_the_author_meta('last_name'); ?>
    </li>
    <li>
      <?php _e('Correo: ', 'starter'); echo get_the_author_meta('user_email'); ?>
    </li>
    <li>
      <?php _e('Url: ', 'starter'); ?>
      <a href="<?php echo get_the_author_meta('user_url'); ?>" target="_blank">
        <?php echo get_the_author_meta('user_url'); ?>
      </a>
    </li>
    <li>
      <?php _e('Fecha de registro: ', 'starter'); echo get_the_author_meta('user_registered'); ?>
    </li>
    <li>
      <?php _e('Rol del usuario: ', 'starter'); echo get_the_author_meta('roles')[0]; ?>
    </li>
    <li>
      <?php _e('Descripción: ', 'starter'); echo get_the_author_meta('description'); ?>
    </li>
    <li>
      <?php _e('Número de publicaciones: ', 'starter'); echo get_the_author_posts(); ?>
    </li>
  </ul>
</aside>
