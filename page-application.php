<?php
/**
 * Template Name: Application Form Page
 * The template for displaying application form.
 *
 * This is the template that displays recruitment page.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package mmjvn-theme
 */

get_header(); ?>


  <!-- MAIN CONTENT
  ================================================== -->

  <div class="polygon-bg padding-big">
    <div class="row">
      <div class="small-12 columns">

        <?php the_content(); ?>

      </div>
    </div>
    <!-- /.row -->
  </div>

  <!-- END MAIN CONTENT
  ================================================== -->



<?php get_footer(); ?>
