<?php
if ( is_home() || is_front_page() ):
  if ( has_custom_header()  ):
    the_custom_header_markup();
  endif;
endif;
