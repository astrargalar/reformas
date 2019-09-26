<?php
if ( has_nav_menu( 'menu_social' ) ):
  wp_nav_menu( array(
    'theme_location' => 'menu_social',
    'container' => 'nav',
    'container_id' => 'SocialMedia',
    'container_class' => 'SocialMedia'
  ) );
else:
  echo '<p><small>Aquí puedes agregar un menú de redes sociales, créalo desde tu wp-admin.</small></p>';
endif;
