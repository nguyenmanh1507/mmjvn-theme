<?php
/**
 * The template part for displaying a message that posts cannot be found.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package mmjvn-theme
 */

?>

<section class="no-results not-found">
	<header class="page-header">
		<h1 class="page-title"><?php esc_html_e( 'Không tìm thấy', 'mmjvn-theme' ); ?></h1>
	</header><!-- .page-header -->

	<div class="page-content">
		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p><?php printf( wp_kses( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'mmjvn-theme' ), array( 'a' => array( 'href' => array() ) ) ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

		<?php elseif ( is_search() ) : ?>

			<p><?php esc_html_e( 'Xin lỗi, nhưng không tìm thấy từ bạn cần tìm. Vui lòng thử lại lần nữa với từ khóa khác', 'mmjvn-theme' ); ?></p>

		<?php else : ?>

			<p><?php esc_html_e( 'Không có bài viết nào trong mục này, có thể tìm kiếm sẽ giúp bạn', 'mmjvn-theme' ); ?></p>

		<?php endif; ?>
	</div><!-- .page-content -->
</section><!-- .no-results -->
