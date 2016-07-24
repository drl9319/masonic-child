<?php
/**
 * Theme Page Section for our theme.
 *
 * @package ThemeGrill
 * @subpackage Masonic
 * @since 1.0
 */
?>

<?php get_header(); ?>

<div class="site-content">
   <div id="container">
      <div class="primary-massonic-child">

         <?php while (have_posts()) : the_post(); ?>

            <?php get_template_part('content', 'page'); ?>

            <?php
            // If comments are open or we have at least one comment, load up the comment template
            if (comments_open() || get_comments_number()) :
               comments_template();
            endif;
            ?>

         <?php endwhile; // end of the loop. ?>
      </div>
   </div><!-- #container -->
</div><!-- .site-content -->

<?php get_footer(); ?>
