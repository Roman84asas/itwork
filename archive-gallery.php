<?php get_header(); ?>
    <!-- Content -->

    <div class="container contacts">
        <div class="wrapper">
            <h2 class="page_title">
                <?php _e('Gallery', 'alethem'); ?>
            </h2>

            <div class="page_content gallery-page cf">
                <?php global $query_string; query_posts($query_string.'&posts_per_page=12');?>
                <?php
                $i = 0;

                if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <div class="gallery-post">
                        <a href="<?php the_permalink(); ?>">
                            <?php
                            if ($i == 2) {
                                echo get_the_post_thumbnail($post->ID, 'gallery-vertical');
                            } else if ($i == 7) {
                                echo get_the_post_thumbnail($post->ID,'gallery-big');
                            } else {
                                echo get_the_post_thumbnail($post->ID,'gallery-square');
                            }
                            $i++;
                            ?>
                        </a>
                    </div>
                <?php endwhile;  endif;  ?>
            </div>
        </div>
    </div>

<?php get_footer(); ?>