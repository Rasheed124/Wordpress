<?php
/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Durodola_Abdulhad
 */

?>

<header id="">

<nav class="bg-deep-black text-light-white">
	<div class=" px-5 py-6 md:py-0 ">

			<div class="flex justify-between items-center md:hidden ">
					<a href="<?php echo get_home_url();?>" class="block text-2xl hover:transition-colors hover:duration-500 hover:text-header-dark-overlay font-semibold font-Antonio uppercase" >
			

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

				
			<!-- Mobile Menu Toggle -->
		
				<button id="toggleMenuOpen" class="outline-none block ">
					<i class="fa-solid fa-bars text-xl"></i>
				</button>
				<button id="toggleMenuClose" class="outline-none  hidden ">
					<i class="fa-sharp fa-solid fa-xmark text-xl"></i>
				</button>
					
			</div>

 
        
          <!-- MOBILE NAV -->
    <!-- Mobile Menu Content -->
        <div id="menus" class="md:hidden hidden w-full relative ">
            <ul class=" flex-col text-deep-black justify-between items-start  absolute top-3 bg-white left-0 w-full p-5 z-10 space-y-3.5">
                <!-- Mobile Menu Items -->

                <!-- About Section -->
                <li class="w-full">
                    <div class="flex justify-between items-center">
                        <a href="/about" class="font-bold font-Antonio w-1/2 block">
                            <div>
                                <span class="transform transition-transform translate-y-0 duration-300">
                                    About
                                </span>
                            </div>
                        </a>

                        <div>
                            <!-- DropDown Toggle for About -->
                            <button id="dropDownToggler1" class="outline-none pl-5 py-[2px]" >
                                <span id="toggleRightIcon1">
                                  <i class="fa-solid fa-angle-right" ></i>

                                </span>
                              <span class="hidden" id="toggleDownIcon1">
                                  <i class="fa-solid fa-angle-down  " ></i>
                                </span>
                               <!-- <i class="fa-solid fa-angle-down hidden" id="toggleDownIcon1"></i> -->
                                <!-- &#9654; -->
                            </button>
                        </div>
                    </div>

                    <!-- About DropDown Content -->
                    <div class="py-2.5 hidden transition-all duration-700 ease-linear" id="dropdownMenu1">
                        <ul class="space-y-1 px-5">
                            <!-- About DropDown Items -->
                            <li>
                                <a href="/blog">Blog</a>
                            </li>
                            <li>
                                <a href="/resume">Resume</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <!-- Portfolio Section -->
                <li class="w-full">
                    <div class="flex justify-between items-center">
                        <a href="/portfolio" class="font-bold font-Antonio w-1/2 block">
                            <div>
                                <span class="transform transition-transform translate-y-0 duration-300">
                                    Portfolio
                                </span>
                            </div>
                        </a>

                        <div>
                            <!-- DropDown Toggle for Portfolio -->
                            <button id="dropDownToggler2" class="outline-none pl-5 py-[2px]" >
                                     <span id="toggleRightIcon2">
                                    <i class="fa-solid fa-angle-right"></i>


                                </span>
                                <span class="hidden" id="toggleDownIcon2">
                                  <i class="fa-solid fa-angle-down  " ></i>
                                </span>

                            </button>
                        </div>
                    </div>

                    <!-- Portfolio DropDown Content -->
                    <div class="py-2.5 hidden transition-all duration-700 ease-linear" id="dropdownMenu2">
                        <ul class="space-y-1 px-5">
                            <!-- Portfolio DropDown Items -->
                            <li>
                                <a href="/graphics-visual-design">Graphics & Visual Design</a>
                            </li>
                            <li>
                                <a href="/ui-ux-product-design">UI/UX & Product Design</a>
                            </li>
                            <li>
                                <a href="/digital-marketing">Digital Marketing</a>
                            </li>
                            <li>
                                <a href="/data-analyst">Data Analyst</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <!-- Contact Section -->
                <li class="w-full">
                    <div class="">
                        <a href="/contact" class="font-bold font-Antonio w-1/2 block">
                            <div>
                                <span class="transform transition-transform translate-y-0 duration-300">
                                    Contact
                                </span>
                            </div>
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </div>

  <div class="pt-6 px-5 hidden md:block">
    <div class="border-t pt-3">
		<ul class="flex justify-between items-start">
			<li class="p-1 group transition-all duration-500">
				<a href="<?php echo get_home_url();?>/about" class="font-extrabold text-xl font-Antonio block">
				<div class="relative uppercase overflow-y-hidden link-swipe">
					<span class="block transform transition-transform translate-y-0 duration-300">
					About
					</span>
				
				</div>
				</a>
				<div class="relative font-Sohne-Bold hidden transition-all duration-500 group-hover:block hover:block">
				<ul class="space-y-1 absolute flex flex-col flex-grow top-0 left-0 py-5 px-5 bg-deep-overlay-black">
					<!-- Submenu items -->
					<li class="flex flex-col">
					<a href="<?php echo get_home_url();?>/blog"  class="self-start whitespace-nowrap block relative after:content-[''] after:absolute after:-bottom-0.5 after:left-0 after:w-0 after:h-0 after:transition-all after:duration-700 after:bg-light-white hover:after:w-full hover:after:h-0.5">
						<span class="block text-lg">Blog</span>
					</a>
					</li>

					<li class="flex flex-col">
					<a href="<?php echo get_home_url();?>/resume"  class="self-start whitespace-nowrap block relative after:content-[''] after:absolute after:-bottom-0.5 after:left-0 after:w-0 after:h-0 after:transition-all after:duration-700 after:bg-light-white hover:after:w-full hover:after:h-0.5">
						<span class="block text-lg">Resume</span>
					</a>
					</li>
				</ul>
				</div>
			</li>

			<li class="p-1 group transition-all duration-500">
				<a href="<?php echo get_home_url();?>/portfolio"  class="font-extrabold text-xl font-Antonio block">
				<div class="relative uppercase overflow-y-hidden link-swipe">
					<span class="block transform transition-transform translate-y-0 duration-300">
					  Portfolio
					</span>
				</div>
				</a>
				  <div class="relative font-Sohne-Bold hidden transition-all duration-500 group-hover:block hover:block">
            <ul class="space-y-1 absolute flex flex-col flex-grow top-0 left-0 py-5 px-5 bg-deep-overlay-black">
                <li class="flex flex-col">
                    <a href="<?php echo get_home_url();?>/graphics-design" class="self-start whitespace-nowrap block relative after:content-[''] after:absolute after:-bottom-0.5 after:left-0 after:w-0 after:h-0 after:transition-all after:duration-700 after:bg-light-white hover:after:w-full hover:after:h-0.5">
                        <div class="">
                            <span class="block text-lg">Graphics & Visual Design</span>
                        </div>
                    </a>
                </li>
                <li class="flex flex-col">
                    <a href="<?php echo get_home_url();?>/ui-ux-design" class="self-start whitespace-nowrap block relative after:content-[''] after:absolute after:-bottom-0.5 after:left-0 after:w-0 after:h-0 after:transition-all after:duration-700 after:bg-light-white hover:after:w-full hover:after:h-0.5">
                        <div class="">
                            <span class="block text-lg">UI/UX & Product Design</span>
                        </div>
                    </a>
                </li>

                <li class="flex flex-col">
                    <a href="<?php echo get_home_url();?>/digital-marketing" class="self-start whitespace-nowrap block relative after:content-[''] after:absolute after:-bottom-0.5 after:left-0 after:w-0 after:h-0 after:transition-all after:duration-700 after:bg-light-white hover:after:w-full hover:after:h-0.5">
                        <div class="">
                            <span class="block text-lg">Digital Marketing</span>
                        </div>
                    </a>
                </li>

                <li class="flex flex-col">
                    <a href="<?php echo get_home_url();?>/data-analyst" class="self-start whitespace-nowrap block relative after:content-[''] after:absolute after:-bottom-0.5 after:left-0 after:w-0 after:h-0 after:transition-all after:duration-700 after:bg-light-white hover:after:w-full hover:after:h-0.5">
                        <div class="">
                            <span class="block text-lg">Data Analyst</span>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
			</li>

			<li class="p-1 group transition-all duration-500">
				<a href="<?php echo get_home_url();?>/contact"  class="font-extrabold text-xl font-Antonio block">
				<div class="relative uppercase overflow-y-hidden link-swipe">
					<span class="block transform transition-transform translate-y-0 duration-300">
					Contact
					</span>
				</div>
				</a>
			</li>
		</ul>

    </div>

   
  </div>
</nav>


</header><!-- #masthead -->
