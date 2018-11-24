<nav class="bg-verydark">
        <div class="container d-flex justify-content-between">
            <div class="navbar navbar-expand-md navbar-dark">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="#"></a>
                <?php 
                wp_nav_menu( array(
                    'theme_location'  => 'primary',
                    'depth'           => 3, // 1 = no dropdowns, 2 = with dropdowns.
                    'container'       => 'div',
                    'container_class' => 'collapse navbar-collapse',
                    'container_id'    => 'navbarTogglerDemo03',
                    'menu_class'      => 'navbar-nav mr-auto mt-2 mt-lg-0 text-uppercase text-center',
                    'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'          => new WP_Bootstrap_Navwalker(),
) );

                 ?>

            </div>
<!--             <div class="navbar navbar-nav navbar-dark navbar-expand mb-auto">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <a class="px-2 nav-link" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="px-2 nav-link" href=""><i class="fab fa-twitter"></i></a>
                    <a class="px-2  nav-link" href=""><i class="fab fa-instagram"></i></a>
                    <a class="px-2 nav-link" href=""><i class="fas fa-heart"></i></a>
                    <a class="px-2 nav-link" href=""><i class="fab fa-google-plus-g"></i></a>
                    <a class="px-2 nav-link" href=""><i class="fab fa-tumblr"></i></a>
                    <a class="px-2 nav-link" href=""><i class="fab fa-youtube"></i></a>
                    <a class="px-2 nav-link" href=""><i class="fas fa-search"></i></a>
                </ul>
            </div> -->
            <?php
            if(is_active_sidebar('socialheader')):
                dynamic_sidebar('socialheader');
            endif; ?>
        </div>
    </nav>