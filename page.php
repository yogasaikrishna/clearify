<?php get_header(); ?>
    <div class="main-section">
        <div class="content">
            <?php if ( have_posts() ) : ?>
                <?php while (have_posts() ) : the_post(); ?>
                    <article <?php post_class(); ?> id="post-<?php the_ID(); ?>>
                        <h2 class="post-title"><a href="<?php the_permalink(); ?>" rel="bookmark"
                            title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                        <div class="entry-content">
                            <br />
                            <?php if ( has_post_thumbnail() ) {
                                the_post_thumbnail( 'large' );
                            } ?>
                            <?php the_content(); ?>
                            <?php the_content(); ?>
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
<?php get_sidebar(); ?>
<?php get_footer(); ?>
