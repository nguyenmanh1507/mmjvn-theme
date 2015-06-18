<?php
/**
 * Template part for displaying single post in category tuyen dung.
 *
 * @package mmjvn-theme
 */

?>

  <!-- MAIN CONTENT
  ================================================== -->

  <div class="polygon-bg padding-big">
    <div class="row">
      <div class="small-12 columns">

        <article <?php post_class('job-detail'); ?>>
          <h2><?php the_title() ?></h2>
          <p class="job-detail__meta <?php echo get_field( 'rec_available' ) ? 'is-available' : ''; ?>"><span class="dot"></span> <?php echo get_field( 'rec_available' ) ? _e( 'Available', 'mmjvn-theme' ) : _e( 'Unavailable', 'mmjvn-theme' ); ?></p>
          <p class="job-detail__meta"><i class="fa fa-play"></i> <?php the_field( 'rec_ex_info' ); ?></p>
          <!-- /.job-detail__meta-info -->
          <div class="job-detail__content">
          	<?php the_content(); ?>
          </div>
          <!-- /.job-detail__content -->
        </article>
        <!-- /.job-detail -->

      </div>
    </div>
    <!-- /.row -->
  </div>

  <!-- END MAIN CONTENT
  ================================================== -->