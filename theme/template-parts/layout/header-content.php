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
  <div class="pt-6 px-5">
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
                    <a href="<?php echo get_home_url();?>/graphics-visual-design" class="self-start whitespace-nowrap block relative after:content-[''] after:absolute after:-bottom-0.5 after:left-0 after:w-0 after:h-0 after:transition-all after:duration-700 after:bg-light-white hover:after:w-full hover:after:h-0.5">
                        <div class="">
                            <span class="block text-lg">Graphics & Visual Design</span>
                        </div>
                    </a>
                </li>
                <li class="flex flex-col">
                    <a href="<?php echo get_home_url();?>/ui-ux-product-design" class="self-start whitespace-nowrap block relative after:content-[''] after:absolute after:-bottom-0.5 after:left-0 after:w-0 after:h-0 after:transition-all after:duration-700 after:bg-light-white hover:after:w-full hover:after:h-0.5">
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
