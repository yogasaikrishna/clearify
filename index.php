<?php get_header(); ?>
<?php get_sidebar(); ?>
    <div class="main-section">
        <div class="content">
            <?php if ( have_posts() ) : ?>
                <?php while (have_posts() ) : the_post(); ?>
                    <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
                        <h2 class='post-title'><a href="<?php the_permalink(); ?>" rel="bookmark"
                            title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                        <div class="post-meta">
                            <span class="entry-meta">BY <span class="author"><?php the_author_meta('nickname'); ?></span>
                                in <?php the_category(", ") ?></span>
                            <span class="comments"><a class="comments-count" href="<?php the_permalink(); ?>">
                                <i class="fa fa-comments"></i> <br /><?php comments_number('0', '1', '%'); ?></a></span>
                        </div>
                        <div class="entry-content">
                            <br />
                            <div class="thumbnail">
                                <?php if ( has_post_thumbnail() ) {
                                    the_post_thumbnail( 'thumbnail' );
                                } ?>
                            </div>
                            <?php the_excerpt(); ?>
                            <p class="left"><a class="more" href="<?php the_permalink(); ?>">Read more &raquo;</a></p>
                        </div>
                    </article>
                <?php endwhile; ?>
            <?php else : ?>
                <h2 class="center">Not Found</h2>
                <p class="center">Sorry, but you are looking for something that isn't here.</p>
                <?php get_search_form(); ?>
            <?php endif; ?>
        </div>
    </div>
    <div class="clear"></div>
</div>
<?php get_footer(); ?>
