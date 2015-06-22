<?php
/**
 * The template for displaying all single posts.
 *
 * @package mmjvn-theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>
			
			<?php if ( in_category( 'tuyen-dung' ) ) : ?>

			<?php get_template_part( 'template-parts/content', 'recruitment' ); ?>

			<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'single' ); ?>

			<?php endif; ?>


			<?php // the_post_navigation(); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				// if ( comments_open() || get_comments_number() ) :
				// 	comments_template();
				// endif;
			?>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php if ( !in_category( 'tuyen-dung' ) ) : ?>
<?php get_sidebar(); ?>
<?php endif; ?>

<?php get_footer(); ?>
