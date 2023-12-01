<?php
/*
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no `home.php` file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Durodola_Abdulhad
 */

get_header("main");
?>

	
	<main>
		<section class=" ">
				<header class="px-5 py-16  bg-light-white ">
					<div class=" max-w-6xl mx-auto mt-24 lg:mt-16 xl:mt-32 ">
					<h2 class="uppercase max-w-2xl font-extrabold font-Antonio text-5xl lg:text-6xl mb-1 ">
						Blog
					</h2>

					<div class="space-x-1">
						<a href="<?php echo get_home_url();?>">Home</a>
						<span>/</span>
						<a href="<?php echo get_home_url();?>/blog">Blog</a>
					</div>
					</div>
				</header>

	

			<div class="">
				<div class="bg-white px-5 py-8 text-light-white ">
			
					<div className=" grid grid-cols-1 gap-10 text-center max-w-4xl  mx-auto  ">
					
			
					</div>
				</div>
			
			</div>
		
	
		</section>
	</main><!-- #main -->


<?php
get_footer("main");
