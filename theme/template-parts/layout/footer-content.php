<?php
/**
 * Template part for displaying the footer content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package themeduro
 */

?>


<footer class="pb-14 bg-contact-dark-overlay text-deep-black relative">
  <div class="flex flex-col w-full">
    <div class="pb-5">
      <div class="px-4 pt-14">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 pt-10">
          <div class="md:order-2 max-w-2xl">
            <div class="mb-6">
              <p>This is some form text.</p>
            </div>
            <div class="flex flex-col md:flex-row gap-8">
              <div>
                <h4 class="font-Antonio font-bold mb-3 text-xl">INFO</h4>
                <div class="flex flex-col flex-wrap">
                  <p>123 Main Street</p>
                  <p>City, State 12345</p>
                </div>
                <a href="mailto:contact@example.com" class="mt-2 block">contact@example.com</a>
              </div>
              <div class="place-self-start">
                <h4 class="font-Antonio font-bold mb-3 text-xl">LINKS</h4>
                <span class="block">
                  <a href="https://twitter.com/example" class="">Twitter</a>
                  <a href="https://facebook.com/example" class="">Facebook</a>
                  <a href="https://instagram.com/example" class="">Instagram</a>
                  <a href="https://tiktok.com/example" class="">Tiktok</a>
                  <a href="https://snapchat.com/example" class="">Snapchat</a>
                  <a href="https://youtube.com/example" class="">Youtube</a>
                  <a href="https://linkedin.com/example" class="">Linkedin</a>
                </span>
              </div>
            </div>
          </div>
          <div class="grid grid-cols-1 place-content-end mt-4 sm:mt-0">
     

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

            <p class="uppercase">Some example information text.</p>
          </div>
        </div>
      </div>
    </div>
    <!-- Go to Top -->
    <div id="go-to-top" class="fixed bottom-10 right-10 h-14 w-14 lg:w-24 lg:h-24 flex p-10 z-10 rounded-full justify-center items-center flex-col shadow-lg bg-white text-deep-black text-xl font-Antonio font-extrabold cursor-pointer transition-all duration-700" onclick="goToTop()">
      Top
    </div>
  </div>



</footer>