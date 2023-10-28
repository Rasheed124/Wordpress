<?php
/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package themeduro
 */

?>

<header id="masthead" class=" ">

      <nav >
        <div class="w-full shadow-sm h-20 lg:h-[12vh] font-Antonio  sticky top-0 z-50  bg-white  text-black px-4">

          <div class="px-4 max-w-7xl h-full mx-auto py-1  flex items-center justify-between ">

            <a href="<?php echo get_home_url();?>" class="text-xl font-Antonio" >
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

          

            <div class="w-6 h-5 flex flex-col justify-between items-center md:hidden text-4xl text-white cursor-pointer overflow-hidden group">
              <span class="w-full h-[2px] bg-black inline-flex transform group-hover:translate-x-2 transition-all ease-in-out duration-300"></span>
              <span class="w-full h-[2px] bg-black inline-flex transform translate-x-3 group-hover:translate-x-0 transition-all ease-in-out duration-300"></span>
              <span class="w-full h-[2px] bg-black inline-flex transform translate-x-1 group-hover:translate-x-3 transition-all ease-in-out duration-300"></span>
            </div>

      


          </div>
        </div>
      </nav>

</header><!-- #masthead -->