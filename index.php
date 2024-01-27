<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 *
 *
 * @package Custom-WordpRess-Theme
 */

get_header(); // Include header.php
?>

<main id="primary" class="site-main">
    <div class="container">
        <?php
        if (have_posts()) :
            // Start the Loop.
            while (have_posts()) :
                the_post();

                // Include the content template.
                get_template_part('template-parts/content', get_post_format());

            endwhile;
        else :
            // If no content, include the "No posts found" template.
            get_template_part('template-parts/content', 'none');

        endif;
        ?>
    </div><!-- .container -->
</main><!-- #primary -->

<?php
get_sidebar(); // Include your sidebar.php if needed
get_footer(); // Include footer.php
