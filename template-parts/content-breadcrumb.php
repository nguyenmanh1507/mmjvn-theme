<?php
/**
 * Template part for displaying breadcrumb.
 *
 * @package mmjvn-theme
 */

?>

<div class="breadcrumb">
  <div class="row">
    <div class="small-12 columns">
			<ul class="bc">
			<?php if(function_exists('bcn_display')) bcn_display(); ?>
			</ul>
			<!-- /.bc -->
    </div>
  </div>
  <!-- /.row -->
</div>
<!-- /.breadcrumb -->