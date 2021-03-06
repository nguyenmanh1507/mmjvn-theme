<?php
/**
 * The template for displaying search results pages.
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

          <?php global $wp_query; ?>
          <?php $results = $wp_query->found_posts; ?>
          <?php
            if ( $results > 0 ) {
              echo '<h3 class="result-number">' . $results . __( ' Kết quả được tìm thấy' ) . '</h3>';
            }
          ?>


					<?php if ( have_posts() ) : ?>
          <?php the_archive_title( '<h2 class="show-for-sr">', '</h2>' ); ?>

					<?php while ( have_posts() ) : the_post(); ?>
					
					  <?php get_template_part( 'template-parts/content', 'custom' ); ?>

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

		</main><!-- #main -->
	</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
