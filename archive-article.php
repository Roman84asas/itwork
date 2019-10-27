<?php get_header(); ?>

    <div class="container article_page">
        <h2 class="page_title">
            <?php _e('Articles', 'aletheme'); ?>
        </h2>

        <div class="articles_categories">
            <div class="tax_list wrapper">
                <ul>
                    <?php $wcatTerms = get_terms('article-category', array('hide_empty' => 0, 'parent' =>0));
                    foreach($wcatTerms as $wcatTerm) : ?>
                        <li <?php
                        if ( $wcatTerm->name == "All") { echo 'class="disaktiv"'; }
                        ?>>
                            <a href="<?php echo esc_attr(get_term_link( $wcatTerm->slug, $wcatTerm->taxonomy ));?>" class="article_category_link">
                                <?php echo esc_attr($wcatTerm->name);?>
                            </a>

                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>

        <div class="wrapper">
            <div class="articles_list">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <article class="item_article">
                        <h3>
                            <a href="<?php the_permalink(); ?>">
                                <?php the_title() ?>
                            </a>
                        </h3>
                        <span class="post_date">
						    <?php echo esc_attr(get_the_date()); ?>
					    </span>
                    </article>
                <?php endwhile; endif; ?>
            </div>

            <?php global $wp_query;
            if($wp_query->max_num_pages > 1) {
                ?>
                <div class="pagination">
                    <div class="left_arrow">
                        <?php
                        if(get_previous_posts_link()){
                            echo get_previous_posts_link('<i class="fa fa-angle-left" aria-hidden="true"></i>');
                        } else {
                            echo '<i class="fa fa-angle-left" aria-hidden="true"></i>';
                        } ?>
                    </div>

                    <div class="paginate_items">
                        <?php ale_page_links(); ?>
                    </div>

                    <div class="right_arrow">
                        <?php
                        if(get_next_posts_link()){
                            echo  get_next_posts_link('<i class="fa fa-angle-right" aria-hidden="true"></i>');
                        } else {
                            echo  '<i class="fa fa-angle-right" aria-hidden="true"></i>';
                        } ?>
                    </div>
                </div>

            <?php } ?>
        </div>
    </div>

<?php get_footer(); ?>