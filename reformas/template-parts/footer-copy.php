<?php
if ( is_active_sidebar( 'sidebar_footer' ) ):
  dynamic_sidebar( 'sidebar_footer' );
else:
  echo '<p><small>Aquí puedes agregar un copy personalizado, hazlo desde tu wp-admin.</small></p>';
endif;
