<?php
/**
 * Template part for displaying the footer content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package durotheme
 */

?>


<footer class="py-14  text-deep-black relative bg-gray-200 ">
  <div class="flex flex-col justify-center items-center w-full">
   
       <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class=" font-Antonio text-3xl lg:text-5xl font-bold mb-2 uppercase" >
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

       <h2>
           <span class=" text-sm sm:text-center ">© 2023 <a href="https://durodolaabdulhad.com.ng/" class="hover:underline hover:text-header-dark-overlay">Durodola</a>. All Rights Reserved.</span>
       </h2>

  </div>

     <button id="to-top-button" onclick="goToTop()" title="Go To Top"
    class="hidden fixed z-50 bottom-5 right-5 p-2 border-0 w-10 h-10 rounded-full shadow-md bg-header-dark-overlay hover:bg-header-dark-overlay/75 text-white text-lg font-semibold transition-colors duration-300">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
        <path d="M12 4l8 8h-6v8h-4v-8H4l8-8z" />
    </svg>
    <span class="sr-only">Go to top</span>
</button>
</footer>