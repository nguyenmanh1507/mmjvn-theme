<?php
/**
 * The template for displaying all single posts.
 *
 * @package mmjvn-theme
 */

get_header(); ?>


  <!-- BREADCRUMB
  ================================================== -->
        
  <?php get_template_part( 'template-parts/content', 'breadcrumb' ); ?>
  
  <!-- END BREADCRUMB
  ================================================== -->


  <!-- MAIN CONTENT
  ================================================== -->

	<div class="polygon-bg polygon-bg--a padding-big">
	  <div class="row">
	  	<div class="small-12 <?php echo ( in_category( 'tuyen-dung' ) ? '' : 'medium-9' ); ?> columns">

			<?php while ( have_posts() ) : the_post(); ?>
				
				<?php if ( in_category( 'tuyen-dung' ) ) : ?>

				<?php get_template_part( 'template-parts/content', 'recruitment' ); ?>

				<?php else : ?>

				<?php get_template_part( 'template-parts/content', 'single' ); ?>

				<?php get_template_part( 'template-parts/content', 'related' ); ?>

				<?php endif; ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template.
					// if ( comments_open() || get_comments_number() ) :
					// 	comments_template();
					// endif;
				?>

			<?php endwhile; // End of the loop. ?>

			</div>

			<?php if ( !in_category( 'tuyen-dung' ) ) : ?>
			<div class="small-12 medium-3 columns">
				<?php get_sidebar(); ?>
			</div>
			<?php endif; ?>
    </div>
    <!-- /.row -->
  </div>

<?php get_footer(); ?>
