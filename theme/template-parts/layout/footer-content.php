<?php
/**
 * Template part for displaying the footer content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Durodola_Abdulhad
 */

?>

<footer id="colophon">



	<div>
		<?php
		$durodola_abdulhad_blog_info = get_bloginfo( 'name' );
		if ( ! empty( $durodola_abdulhad_blog_info ) ) :
			?>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>,
			<?php
		endif;

		/* translators: 1: WordPress link, 2: WordPress. */
		printf(
			'<a href="%1$s">proudly powered by %2$s</a>.',
			esc_url( __( 'https://wordpress.org/', 'durodola-abdulhad' ) ),
			'WordPress'
		);
		?>
	</div>

</footer><!-- #colophon -->
