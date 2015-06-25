<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package mmjvn-theme
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside class="sidebar">

  <h2 class="show-for-sr">Sidebar</h2>

	<div class="widget-sidebar">
  	<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</div>
	<!-- /.widget-sidebar -->

  <?php
  if ( function_exists( 'ot_get_option' ) ) :
    $socials = ot_get_option( 'company_social' );
  ?>
  <div class="widget-sidebar">
    <h3 class="widget-title"><?php _e( 'Social Network', 'mmjvn-theme' ); ?></h3>
    <div class="widget-sidebar__socials">
      <ul class="inline-list">
        <?php 
        foreach ( $socials as $social ) :
        ?>
        <li>
          <a href="<?php echo esc_url( $social['href'] ); ?>">
              <?php 
              switch ( strtolower( $social['name'] ) ) {
                case 'facebook':
                  echo '<i class="fa fa-facebook"></i>';
                  break;

                case 'google+':
                  echo '<i class="fa fa-google-plus"></i>';
                  break;

                case 'twitter':
                  echo '<i class="fa fa-twitter"></i>';
                  break;

                case 'youtube':
                  echo '<i class="fa fa-youtube"></i>';
                  break;

                case 'ask.fm':
                  echo '<i class="fa-ask-sidebar"></i>';
                  break;

                default:
                  echo $social['name'];
                  break;
              }
              ?>
          </a>
        </li>
        <?php endforeach; ?>
      </ul>
    </div>
    <!-- /.widget-sidebar__cat -->
  </div>
  <!-- /.widget-sidebar -->
  <?php endif; ?>

</aside>
<!-- /.sidebar -->
