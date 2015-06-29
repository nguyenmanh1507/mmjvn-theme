<?php
/**
 * The template for displaying 404 pages (not found).
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
      <div class="small-12 medium-9 columns">

				<section class="error-404 not-found">
					<header class="page-header">
						<h1 class="page-title"><?php esc_html_e( 'Oops! Trang này không tìm thấy.', 'mmjvn-theme' ); ?></h1>
					</header><!-- .page-header -->
				</section><!-- .error-404 -->

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
