<?php
/**
 * Template part for displaying the footer content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package themeduro
 */

?>




<footer class="py-14 bg-contact-dark-overlay text-deep-black relative">
  <div class="flex flex-col justify-center items-center w-full">
   
       <a href="<?php $uploads = wp_upload_dir();?>" class=" font-Antonio text-3xl lg:text-5xl font-bold mb-2 uppercase" >
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
           <span class=" text-sm sm:text-center ">© 2023 <a href="https://durodolaabdulhad.com.ng/" class="hover:underline">Durodola</a>. All Rights Reserved.</span>
       </h2>

  </div>
</footer>