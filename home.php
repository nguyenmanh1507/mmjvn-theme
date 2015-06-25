<?php
/**
 * The template for displaying categories.
 *
 * This is the template that displays all categories by default.
 * Please note that this is the WordPress construct of categories
 * and that other 'categories' on your WordPress site will use a
 * different template.
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
  
  <div class="polygon-bg padding-big">
    
    <div class="row">
      <div class="small-12 medium-9 columns">

        <section class="main-content" role="main">

					<?php if ( have_posts() ) : ?>
          <?php the_archive_title( '<h2 class="show-for-sr">', '</h2>' ); ?>
					
					<?php while ( have_posts() ) : the_post(); ?>
					
					<?php get_template_part( 'template-parts/content', 'blog' ); ?>

        	<?php endwhile; else : ?>

        		<?php get_template_part( 'template-parts/content', 'none' ); ?>

        	<?php endif; ?>

          <!-- Paginate -->
          <?php get_template_part( 'template-parts/content', 'paginate' ); ?>

        </section>
        <!-- /.main-content -->
        
      </div>
      <div class="small-12 medium-3 columns">
				<?php get_sidebar(); ?>
      </div>
    </div>
    <!-- /.row -->

  </div>
  <!-- /.polygon-bg -->
  
  <!-- END MAIN CONTENT
  ================================================== -->

<?php get_footer(); ?>