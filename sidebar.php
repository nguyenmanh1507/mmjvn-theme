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

  <div class="widget-sidebar">
    <h3 class="widget-title">Social Network</h3>
    <div class="widget-sidebar__socials">
      <ul class="inline-list">
        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
      </ul>
    </div>
    <!-- /.widget-sidebar__cat -->
  </div>
  <!-- /.widget-sidebar -->

</aside>
<!-- /.sidebar -->
