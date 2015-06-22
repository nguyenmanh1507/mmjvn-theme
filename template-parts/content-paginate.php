<?php
/**
 * Template part for displaying paginate.
 *
 * @package mmjvn-theme
 */

?>

<div class="paginate">  
  <?php
  global $wp_query;

  $big = 999999999; // need an unlikely integer

  echo paginate_links( array(
    'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
    'format' => '?paged=%#%',
    'current' => max( 1, get_query_var('paged') ),
    'total' => $wp_query->max_num_pages,
    'prev_text' => __( '<i class="fa fa-chevron-left"></i>' ),
    'next_text' => __( '<i class="fa fa-chevron-right"></i>' ),
  ) );
  ?>         
</div>