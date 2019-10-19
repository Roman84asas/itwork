<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
    <header class="top_header">
        <div class="wrapper cf">
            <div class="header_third search_section menu_button">
                <div class="menu_icon">
                    <i class="fas fa-bars"></i>
                    <i class="fas fa-times" style="display: none"></i>
                </div>

                <div class="search_box"> <?php  echo esc_attr(get_search_form()); ?></div>
            </div>

            <div class="header_third logo_section">
                <?php if(ale_get_option('sitelogo')){ ?>
                    <a href="<?php echo esc_attr(home_url('/')); ?>" class="logo_link"><img src="<?php echo esc_attr(ale_get_option('sitelogo')); ?>" /></a>

                <?php }?>
            </div>

            <div class="header_third social_section">
                <?php if(ale_get_option('fb')){ ?><a href="<?php echo esc_attr(ale_get_option('fb')); ?>"><i class="fab fa-facebook-f"></i></a><?php }?>
                <?php if(ale_get_option('twi')){ ?><a href="<?php echo esc_attr(ale_get_option('twi')); ?>"><i class="fab fa-twitter-square"></i></a><?php }?>
                <?php if(ale_get_option('insta')){ ?><a href="<?php echo esc_attr(ale_get_option('insta')); ?>"><i class="fab fa-instagram"></i></a><?php }?>
                <?php if(ale_get_option('vk')){ ?><a href="<?php echo esc_attr(ale_get_option('vk')); ?>"><i class="fab fa-vk"></i></a><?php }?>
            </div>
        </div>

        <nav class="top_navigation">
            <div class="wrapper">
                <?php
                if ( has_nav_menu( 'header_menu' ) ) {
                    wp_nav_menu(array(
                        'theme_location'=> 'header_menu',
                        'menu'			=> 'Header Menu',
                        'menu_class'	=> 'ale_headerrmenu cf',
                        'walker'		=> new Aletheme_Nav_Walker(),
                        'container'		=> '',
                    ));
                }
                ?>
                <div class="donate_button">
                    <a href="<?php //echo esc_attr(ale_get_option('donate_link')); ?>"><?php _e('Donate', 'itwork') ?></a>
                </div>
            </div>
        </nav>
    </header>

    <section class="home_slider">

    </section>