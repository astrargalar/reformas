<footer class="footer p-3">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <?php
                $args = array(
                    'menu_class' => 'nav text-uppercase d-flex flex-column flex-md-row text-center tex-md-left',
                    'theme_location' => 'menu_principal'
                );
                wp_nav_menu($args)
                ?>
            </div>
            <!--col-md-8 -->
            <div class="col-md-5">
                <p class="text-center text-md-right copyright mt-4 mt-md-0"><?php crear_aviso_copyright(); ?></p>
            </div>
            <!--col-md-4 -->
        </div><!-- row -->
    </div><!-- container-->
</footer>
<?php wp_footer(); ?>
</body>

</html>