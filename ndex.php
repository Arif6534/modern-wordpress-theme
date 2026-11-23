
<?php get_header(); ?>

<main class="site-content">

    <?php if (have_posts()) : ?>

        <?php while (have_posts()) : the_post(); ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                <h2>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>
                </h2>

                <div class="post-content">
                    <?php the_excerpt(); ?>
                </div>

            </article>

        <?php endwhile; ?>

        <?php the_posts_navigation(); ?>

    <?php else : ?>

        <h2>No posts found.</h2>

    <?php endif; ?>

</main>

<?php get_footer(); ?>
