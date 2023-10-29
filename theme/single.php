<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package themeduro
 */

 get_header("landingpage");
?>

	<section id="primary">
		<main id="main">

		<!-- SECTION ONE -  BANNER -->
		<section id="home" class="overflow-x-hidden max-w-6xl mx-auto">
			<div class="grid grid-cols-1 gap-8 lg:gap-4 md:grid-cols-2 md:place-content-center md:items-center py-14 lg:py-20 xl:py-28 px-6 lg:px-10">
				<!-- COLUMNS -->
				<!--  -->
				<div class="sm:max-w-md md:max-w-lg mx-auto flex flex-col justify-center items-center md:justify-start">
						<h2 class="font-bold pb-5 text-3xl lg:text-4xl pr-8 text-black">
							Free Book & eBook Landing Page Template
						</h2>
						<p class="pb-5 font-semibold">
							A free Bootstrap 4 template for developers and programmers who want to self-publish books. Download now and start selling your book right away!
						</p>

						<div class="flex gap-5 self-start">
							<a href="#">
							<button class="py-3 hover:border-header-dark-overlay duration-500 transition hover:bg-transparent px-8 border rounded-full border-transparent bg-header-dark-overlay text-xs sm:text-base block whitespace-nowrap font-medium">
								Buy for $20
							</button>
							</a>
							<a href="/contact">
							<button class="py-3 border-header-dark-overlay duration-500 transition bg-transparent px-8 border rounded-full text-xs sm:text-base whitespace-nowrap font-medium">
								Learn More
							</button>
							</a>
						</div>

					<!-- Testimonials -->

					<div class="space-y-3 mt-10 bg-white/30">
							<div class="border-l-4 border-header-dark-overlay px-5">
							<p>
								Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure dolorum officia, tenetur accusamus quas culpa numquam ullam at deleniti ratione perspiciatis possimus esse odio eligendi ex, soluta beatae? Possimus quod dignissimos magni repellendus autem impedit.
							</p>
							</div>

							<div class="flex flex-col md:flex-row items-center md:justify-start justify-center md:items-start">
							<div class="max-w-full rounded-full mb-2 md:mr-2" style="width: 60px; height: 60px; background: #ccc;"></div>

							<p class="text-center md:text-left">
								<span class="block font-bold">John Doe</span>
								<span class="block">Executive Director</span>
							</p>
							</div>
					</div> 

			
				</div>

				<div class="flex flex-col justify-center items-center">
			    	<div class="w-[400px] h-screen lg:w-[500px] lg:h-[600px] overflow-hidden relative" style="background: #ccc;"></div>
				</div>
			</div>
    	</section>

		<!-- SECTION TWO - CONTENT -->
		<section id="about" class="px-6 lg:px-10 overflow-x-hidden bg-gray-100">
			<div class="text-center lg:max-w-6xl mx-auto max-w-lg py-14 lg:py-20 xl:py-28">
				<!-- Title -->
				<div class="max-w-4xl mx-auto">
					<h2 class="text-2xl font-bold font-migra-light lg:text-3xl">
						What Will You Get From This Book?
					</h2>
					<p class="py-2 md:text-lg ">
						Section intro goes here. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer blandit consequat consequat. Orci varius natoque penatibus et magnis.
					</p>
				</div>
				<!-- Columns -->
				<div class="py-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-5xl mx-auto">
					<!-- Col -->
					<div class="space-y-3 flex flex-col justify-center items-center">
						<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-device-desktop text-header-dark-overlay" width="44" height="44" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
						<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
						<path d="M3 5a1 1 0 0 1 1 -1h16a1 1 0 0 1 1 1v10a1 1 0 0 1 -1 1h-16a1 1 0 0 1 -1 -1v-10z"></path>
						<path d="M7 20h10"></path>
						<path d="M9 16v4"></path>
						<path d="M15 16v4"></path>
						</svg>
						<h4 class="font-medium">
						Build Lorem Ipsum lobortis nec mauris habitant morbi List one of your book's benefits here.
						</h4>
						<p class="text-base">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer blandit consequat consequat.
						</p>
					</div>
					
					<div class="space-y-3 flex flex-col justify-center items-center">
						<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-device-desktop text-header-dark-overlay" width="44" height="44" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
						<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
						<path d="M3 5a1 1 0 0 1 1 -1h16a1 1 0 0 1 1 1v10a1 1 0 0 1 -1 1h-16a1 1 0 0 1 -1 -1v-10z"></path>
						<path d="M7 20h10"></path>
						<path d="M9 16v4"></path>
						<path d="M15 16v4"></path>
						</svg>
						<h4 class="font-medium">
						Build Lorem Ipsum lobortis nec mauris habitant morbi List one of your book's benefits here.
						</h4>
						<p class="text-base">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer blandit consequat consequat.
						</p>
					</div>
					
					<div class="space-y-3 flex flex-col justify-center items-center">
						<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-device-desktop text-header-dark-overlay" width="44" height="44" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
						<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
						<path d="M3 5a1 1 0 0 1 1 -1h16a1 1 0 0 1 1 1v10a1 1 0 0 1 -1 1h-16a1 1 0 0 1 -1 -1v-10z"></path>
						<path d="M7 20h10"></path>
						<path d="M9 16v4"></path>
						<path d="M15 16v4"></path>
						</svg>
						<h4 class="font-medium">
						Build Lorem Ipsum lobortis nec mauris habitant morbi List one of your book's benefits here.
						</h4>
						<p class="text-base">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer blandit consequat consequat.
						</p>
					</div>
				
				</div>
			</div>
		</section>


		</main><!-- #main -->
	</section><!-- #primary -->





<?php
get_footer();
