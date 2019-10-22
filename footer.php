    <!-- Footer -->

    <footer class="main-footer">
        <div class="top_footer">
            <div class="wrapper">
                <div class="footer_logo footer_inner">
                    <?php if(ale_get_option('footerlogo')){ ?>
                        <a href="<?php echo esc_attr(home_url('/')); ?>" class="logo_link">
                            <img src="<?php echo esc_attr(ale_get_option('footerlogo')); ?>" />
                        </a>
                    <?php }?>
                </div>

                <!-- Footer menu -->
                <div class="menu-info footer_inner">
                   <h5><?php _e('Information', 'alethemes'); ?></h5>

                    <?php
                    if ( has_nav_menu( 'footer_menu' ) ) {
                        wp_nav_menu(array(
                            'theme_location'=> 'footer_menu',
                            'menu'			=> 'Footer Menu',
                            'menu_class'	=> 'footermenu cf',
                            'walker'		=> new Aletheme_Nav_Walker(),
                            'container'		=> '',
                        ));
                    }
                    ?>
                </div>

                <!-- Footer info -->
                <div class="contact footer_inner">
                    <h5><?php _e('Contacts', 'alethemes'); ?></h5>
                    <?php if(ale_get_option('footer_phone')){ ?>
                        <div class="footer_phone">
                            <?php echo esc_attr(ale_get_option('footer_phone')); ?>
                        </div>
                    <?php }?>

                    <?php if(ale_get_option('footer_address')){ ?>
                        <div class="footer_address">
                            <?php echo esc_attr(ale_get_option('footer_address')); ?>
                        </div>
                    <?php }?>

                    <?php if(ale_get_option('footer_email')){ ?>
                        <div class="footer_email">
                            <a href="mailto:<?php echo esc_attr(ale_get_option('footer_email')); ?>">
                                <?php echo esc_attr(ale_get_option('footer_email')); ?>
                            </a>
                        </div>
                    <?php }?>
                </div>

                <!-- Footer twitter-->
                <div class="twitter footer_inner">
                    <div class="widget_latest">
                        <div class="latest_tweeter">
                            <ul>
                                <?php get_sidebar('footer', 'text'); ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Social -->
        <div class="bottom_footer">
            <div class="wrapper">
                <div class="copyrights">
                    <?php if (ale_get_option('copyrights')) : ?>
                       <?php echo ale_option('copyrights'); ?>
                    <?php else: ?>
                        &copy; <?php _e('2019 ROMAN MERENEANU', 'aletheme')?>
                    <?php endif; ?>
                </div>

                <div class="footer_social">
                    <?php if(ale_get_option('fb')){ ?>
                        <a href="<?php echo esc_attr(ale_get_option('fb')); ?>">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    <?php }?>

                    <?php if(ale_get_option('twi')){ ?>
                        <a href="<?php echo esc_attr(ale_get_option('twi')); ?>">
                            <i class="fab fa-twitter-square"></i>
                        </a>
                    <?php }?>

                    <?php if(ale_get_option('insta')){ ?>
                        <a href="<?php echo esc_attr(ale_get_option('insta')); ?>">
                            <i class="fab fa-instagram"></i>
                        </a>
                    <?php }?>

                    <?php if(ale_get_option('vk')){ ?>
                        <a href="<?php echo esc_attr(ale_get_option('vk')); ?>">
                            <i class="fab fa-vk"></i>
                        </a>
                    <?php }?>
                </div>
            </div>


        </div>
    </footer>

    <!-- Scripts -->
    <?php wp_footer(); ?>
</body>
</html>