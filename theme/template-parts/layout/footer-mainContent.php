<?php
/**
 * Template part for displaying the footer content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Durodola_Abdulhad
 */

?>

<!-- <footer class="relative"> -->


<footer id="footer-main" class="pb-14 bg-contact-dark-overlay text-deep-black relative">
  <div class="flex flex-col w-full">
    <div class="pb-5">
      <div class="px-4 pt-14">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 pt-10">
          <div class="md:order-2 max-w-2xl">
            <!-- Replace with actual content or remove if not applicable -->
            <div class="mb-6">
                    <?php if (is_active_sidebar('footer-menu-2')) : ?>
                          <?php dynamic_sidebar('footer-menu-2'); ?>
                    <?php endif; ?>
            </div>
            <div class="flex flex-col md:flex-row gap-8">
              <div class="">
                <h4 class="font-Antonio font-bold mb-3 text-xl">
                  INFO
                </h4>
                <div class="flex flex-col flex-wrap">
              
                      <?php if (is_active_sidebar('footer-menu-3')) : ?>
                          <?php dynamic_sidebar('footer-menu-3'); ?>
                    <?php endif; ?>
             
                
                </div>
              </div>
              <div class="place-self-start">
                <h4 class="font-Antonio font-bold mb-3 text-xl">
                  LINKS
                </h4>
           
                 <?php if (is_active_sidebar('footer-menu-4')) : ?>
                          <?php dynamic_sidebar('footer-menu-4'); ?>
                    <?php endif; ?>
             
                
              
          
              </div>
            </div>
          </div>

          <!-- Fo -->
          <div class="grid grid-cols-1 place-content-end mt-4 sm:mt-0">

      
            <h2 class="font-Antonio text-3xl lg:text-5xl font-bold mb-2 uppercase">
                  	<?php
									$custom_logo_id = get_theme_mod( 'custom_logo' );
						$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
						if ( has_custom_logo() ) {
							echo '<img class="w-20 h-20" src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
						} else {
							echo '<h>' . get_bloginfo('name') . '</h1>';
						}
							?>

            </h2>
            <p class="uppercase list-none">
                  <?php if (is_active_sidebar('footer-menu-1')) : ?>
                          <?php dynamic_sidebar('footer-menu-1'); ?>
                    <?php endif; ?>
            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- Go to Top Button -->

    <button id="to-top-button" onclick="goToTop()" title="Go To Top" class="hidden fixed bottom-10 right-10 h-14 w-14 lg:w-24 lg:h-24  p-10 z-10 rounded-full justify-center items-center flex-col shadow-lg bg-white text-deep-black text-xl font-Antonio font-extrabold cursor-pointer transition-all duration-700">
      Top
    </button>


  </div>

                 
  
</footer>




<script src="https://kit.fontawesome.com/981b483fe4.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11.0.3/swiper-bundle.min.js"></script>


