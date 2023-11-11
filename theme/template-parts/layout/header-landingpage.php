<?php
/**
 * Template part for displaying the header landingpage
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package themeduro
 */

?>

<!-- Single Post Header [Landing Page] -->

<header id="header-container" class=" sticky top-0 z-50 w-full shadow-sm   font-Antonio   bg-white py-5  text-black px-2">
    <div class="fixed top-0 left-0 w-full h-2 bg-gray-300 z-50">
      <div class="h-full bg-header-dark-overlay" id="readingProgress" style="width: 0;"></div>
   </div>

      <nav class="relative" >
 
       
          <div class=" max-w-7xl  mx-auto py-1  flex items-end justify-between ">

            <a href="<?php echo get_home_url();?>" class="text-2xl self-center font-Antonio block" >
           

					<?php
								$custom_logo_id = get_theme_mod( 'custom_logo' );
					$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
					if ( has_custom_logo() ) {
						echo '<img class="w-20 h-20" src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
					} else {
						echo '<h1>' . get_bloginfo('name') . '</h1>';
					}
						?>
          
            </a>

            <ul id="menu-container" class="menu self-center flex justify-center items-center text-lg text-black ">
     
                 <!-- <ul id="menu-container" class="menu   text-base lg:text-lg gap-7 transform translate-y-[-1000px] transition-transform duration-500 absolute  w-full h-auto top-10 left-0  pt-6  px-6 lg:static lg:top-0 lg:py-0   lg:left-0 lg:flex lg:flex-row lg:justify-end  lg:-translate-y-0 lg:bg-transparent  bg-black shadow-lg lg:shadow-none  lg:space-y-0 text-white lg:text-black"> -->
                    <?php

                    $args_menu = array(
                        'container'     => '',
                        'theme_location' => 'top-menu',
                        'depth'         => 1,
                        'fallback_cb'   => false,
                        'add_li_class'  => 'pr-6 pb-6 lg:pb-0 nav_menu_link',
                        'link_class' => ' lg:inline-block font-Antonio'

                    );
                    wp_nav_menu($args_menu);
                    ?>

                    
                
                </ul>

            <div class="harmbuger  hidden  w-6 h-5  flex-col justify-between items-center text-4xl text-white cursor-pointer overflow-hidden group">
              <span class="w-full h-[2px] bg-black inline-flex transform group-hover:translate-x-2 transition-all ease-in-out duration-300"></span>
              <span class="w-full h-[2px] bg-black inline-flex transform translate-x-3 group-hover:translate-x-0 transition-all ease-in-out duration-300"></span>
              <span class="w-full h-[2px] bg-black inline-flex transform translate-x-1 group-hover:translate-x-3 transition-all ease-in-out duration-300"></span>
            </div>
   
              
        </div>
      </nav>

</header>