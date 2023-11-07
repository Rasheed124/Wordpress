<?php
/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package durotheme
 */

?>

<?php get_template_part( 'template-parts/layout/header', 'marketing' ); ?>

<header id="masthead" class=" ">

      <nav >
        <div class="w-full shadow-sm h-20 lg:h-[12vh] font-Antonio  sticky top-0 z-50  bg-white  text-black px-4">

          <div class="px-4 max-w-7xl h-full mx-auto py-1  flex items-center justify-between ">

            <a href="<?php echo get_home_url();?>" class="text-2xl font-Antonio" >
              <div>

					<?php
								$custom_logo_id = get_theme_mod( 'custom_logo' );
					$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
					if ( has_custom_logo() ) {
						echo '<img class="w-20 h-20" src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
					} else {
						echo '<h1>' . get_bloginfo('name') . '</h1>';
					}
						?>
              </div>
            </a>


          </div>
        </div>
      </nav>

</header><!-- #masthead -->