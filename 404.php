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

				<section class="error-404 not-found">

          <div class="row">
            <div class="medium-8 show-for-medium-up columns">
              <img src="<?php echo get_template_directory_uri() . '/images/404.png' ?>" alt="Page not found">
            </div>
            <div class="medium-4 columns">
              <div class="not-found-text">
                <span>404</span>
                <p><?php esc_html_e( 'Xin lỗi, không tìm thấy trang bạn đang tìm kiếm.' ); ?></p>
                <a href="<?php echo esc_url( home_url('/') ); ?>"><?php esc_html_e( 'Quay lại trang chủ' ); ?></a>
              </div>
            </div>
          </div>
          <!-- /.row -->
        </section><!-- .error-404 -->


  </div>
  <!-- /.polygon-bg -->
  
  <!-- END MAIN CONTENT
  ================================================== -->

<?php get_footer(); ?>
