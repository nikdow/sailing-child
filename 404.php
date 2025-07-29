<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package thim
 */
?>
<section class="error-404 not-found">
	<div class="page-content">
		<img src="<?php echo esc_url(get_template_directory_uri() . '/images/404.png'); ?>" alt="404 Page" />
		<h3> <?php esc_html_e( 'Sorry, we couldn\'t find the page you\'re looking for.', 'sailing' ) ?> </h3>
		<?= is_user_logged_in() ? "" : 
		"If the page you are looking for is restricted to members, please login using the fields at the bottom of this page."
		?>
 	</div>
	<!-- .page-content -->
</section>