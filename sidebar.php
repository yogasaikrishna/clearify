        <div class="content">
            <div class="header">
                <header>
                    <div class="user-img"><img src="<?php header_image(); ?>"
                        width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>"
                        alt="<?php the_author_meta('nickname'); ?>"/>
                    </div>
                    <h3 id="site-description"><?php bloginfo('description'); ?></h3>
                                <div class="social-share">
                                    <?php

                                        $active_sites = active_social_sites();
                                        if ( $active_sites ) :
                                            foreach($active_sites as $site) {
                                                echo '<a href="' . get_theme_mod( $site ) . '"><i class="fa fa-' .
                                                    $site . '-square"></i></a>';
                                            }
                                        endif;

                                    ?>
                                </div>

                </header>
            </div>
            <aside>
                <?php if ( is_active_sidebar( 'sidebar-widget-area' ) ) : ?>
                    <div class="widget-section">
                        <?php dynamic_sidebar( 'sidebar-widget-area'); ?>
                    </div>
                <?php endif; ?>
            </aside>
        </div>
    </div>

