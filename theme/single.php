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
			<div class="grid grid-cols-1 gap-8 lg:gap-10 md:grid-cols-2 md:place-content-center md:items-center py-14 lg:py-20 xl:py-28 px-6 lg:px-10">
				<!-- COLUMNS -->
				<!--  -->
				<div class="sm:max-w-md md:max-w-lg mx-auto flex flex-col justify-center items-center md:justify-start">
						<h3 class="font-bold pb-5 text-3xl lg:text-4xl pr-8 text-black">
							Free Book & eBook Landing Page Template
						</h3>
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
					<h2 class="text-2xl font-bold  lg:text-3xl">
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

		<!-- SECTION THREE - CONTENT -->
		<section id="solution" class="px-6 lg:px-10">
			<div class="text-center lg:max-w-6xl mx-auto max-w-lg py-14 lg:py-20 xl:py-28">
				<!-- Content -->
				<div class="max-w-4xl mx-auto">
					<h2 class="text-2xl font-bold  lg:text-3xl">
						What's Included
					</h2>
					<p class="py-2 md:text-lg ">
						Section intro goes here. Lorem ipsum dolor sit amet, consectetur
						adipiscing elit. Integer blandit consequat consequat. Orci varius
						natoque penatibus et magnis.
					</p>
				</div>
				<!-- Columns -->
				<div class="py-8 max-w-5xl mx-auto flex justify-center items-center">
					<div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
						<!-- Image -->
						<div class="w-[300px] h-[300px] md:w-[400px] md:h-[400px] lg:w-[400px] lg:h-[500px] relative">
							<img src="solutionbg.jpg" alt="" class="max-w-full absolute self-center" />
						</div>
						<!-- Content -->
						<div class="flex flex-col gap-6 items-center justify-center lg:justify-start lg:items-start">
							<h4 class="text-lg flex items-center">
								<span class="">
								<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-circle-check-filled text-header-dark-overlay" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
									<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
									<path d="M17 3.34a10 10 0 1 1 -14.995 8.984l-.005 -.324l.005 -.324a10 10 0 0 1 14.995 -8.336zm-1.293 5.953a1 1 0 0 0 -1.32 -.083l-.094 .083l-3.293 3.292l-1.293 -1.292l-.094 -.083a1 1 0 0 0 -1.403 1.403l.083 .094l2 2l.094 .083a1 1 0 0 0 1.226 0l.094 -.083l4 -4l.083 -.094a1 1 0 0 0 -.083 -1.32z" stroke-width="0" fill="currentColor"></path>
								</svg>
								</span>
								<span class="font-medium whitespace-nowrap">
								List your book's content here.
								</span>
							</h4>
							<h4 class="text-lg flex items-center">
								<span class="">
								<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-circle-check-filled text-header-dark-overlay" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
									<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
									<path d="M17 3.34a10 10 0 1 1 -14.995 8.984l-.005 -.324l.005 -.324a10 10 0 0 1 14.995 -8.336zm-1.293 5.953a1 1 0 0 0 -1.32 -.083l-.094 .083l-3.293 3.292l-1.293 -1.292l-.094 -.083a1 1 0 0 0 -1.403 1.403l.083 .094l2 2l.094 .083a1 1 0 0 0 1.226 0l.094 -.083l4 -4l.083 -.094a1 1 0 0 0 -.083 -1.32z" stroke-width="0" fill="currentColor"></path>
								</svg>
								</span>
								<span class="font-medium whitespace-nowrap">
								List your book's content here.
								</span>
							</h4>
							<h4 class="text-lg flex items-center">
								<span class="">
								<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-circle-check-filled text-header-dark-overlay" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
									<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
									<path d="M17 3.34a10 10 0 1 1 -14.995 8.984l-.005 -.324l.005 -.324a10 10 0 0 1 14.995 -8.336zm-1.293 5.953a1 1 0 0 0 -1.32 -.083l-.094 .083l-3.293 3.292l-1.293 -1.292l-.094 -.083a1 1 0 0 0 -1.403 1.403l.083 .094l2 2l.094 .083a1 1 0 0 0 1.226 0l.094 -.083l4 -4l.083 -.094a1 1 0 0 0 -.083 -1.32z" stroke-width="0" fill="currentColor"></path>
								</svg>
								</span>
								<span class="font-medium whitespace-nowrap">
								List your book's content here.
								</span>
							</h4>
				
							<div>
								<a href="#">
								<button class="py-3 hover:border-header-dark-overlay duration-500 transition hover:bg-transparent px-8 border rounded-full border-transparent bg-header-dark-overlay text-xs sm:text-base block whitespace-nowrap font-medium">
									I want this book
								</button>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- SECTION FOUR - CONTENT -->
		<section id="reviews" class="px-6 lg:px-10 bg-gray-100">
			<div class="text-center lg:max-w-6xl mx-auto max-w-lg py-14 lg:py-20 xl:py-28">
				<!-- Content -->
				<div class="max-w-4xl mx-auto">
					<h2 class="text-2xl font-bold  lg:text-2xl ">
						Who This Book Is For
					</h2>
					<p class="py-2 md:text-lg">
						List your target readers in this section and back up with reviews.
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sodales
						sit amet neque sit amet molestie. Vivamus hendrerit nisi condimentum
						erat tempus, vitae accumsan odio euismod.
					</p>
				</div>
				<!-- Columns -->
				<div class="py-8 max-w-5xl flex justify-center items-center">
					<div class="space-y-5 w-full max-w-md mx-auto flex flex-col justify-center items-center">
						<!-- Cols -->
						<div class="flex self-center gap-3 lg:max-w-md mx-auto">
							<div>
								<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-check text-header-dark-overlay" width="44" height="44" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
								<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
								<path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path>
								<path d="M6 21v-2a4 4 0 0 1 4 -4h4"></path>
								<path d="M15 19l2 2l4 -4"></path>
								</svg>
							</div>

							<div class="text-left">
								<h5 class="text-lg  font-bold pb-2">
								Target Audience 1
								</h5>
								<span class="font-medium block text-base lg:text-lg">
								Describe your first target audience here.
								</span>
							</div>
						</div>
					
					</div>
				</div>
			</div>
		</section>

		<!-- SECTION FIVE - CONTENT -->
		<section id="solution" class="px-6 lg:px-10">
			<div class="text-center lg:max-w-6xl mx-auto max-w-lg xl:pb-10 py-14 lg:py-20 xl:py-28">
				<div class="bg-gray-200 p-10 max-w-4xl mx-auto">
					<!-- Content -->
					<h2 class="text-2xl font-bold  lg:text-3xl">
						Get A Free Preview
					</h2>
					<p class="py-2 md:text-lg max-w-xl mx-auto ">
						Sign up to get a free preview of the book. You can offer visitors free
						book previews to generate leads.
					</p>

					<!-- Form  -->
					<form action="" class="">
						<div class="flex md:max-w-xl mx-auto flex-col md:flex-row justify-center items-center gap-3">
						<label for="email" class="w-full md:flex-[50%]">
							<input
							title="Email"
							type="text"
							placeholder="Your Email"
							class="border-1 w-full outline-none focus:shadow-md focus:border-header-dark-overlay transition duration-500 p-2.5 rounded-md"
							/>
						</label>
						<a href="#">
							<button class="py-2.5 text-lg hover:border-header-dark-overlay duration-500 transition px-8 border rounded-md border-transparent bg-header-dark-overlay sm:text-base block whitespace-nowrap font-medium">
							Send
							</button>
						</a>
						</div>
					</form>
				</div>
			</div>
		</section>

		<!-- SECTION SIX	 - CONTENT -->
		<section id="solution" class="px-6 lg:px-10 bg-gray-100">
			<div class="text-center lg:max-w-6xl mx-auto py-14 lg:py-20 xl:py-28">
				<!-- Content -->
				<div class="mx-auto pb-10 max-w-lg">
					<h2 class="text-2xl font-bold  lg:text-3xl">
						Book Reviews
					</h2>
					<p class="py-2 md:text-lg ">
						See what our readers are saying.
					</p>
				</div>
				<div class="py-8 w-full flex justify-center items-center">
					<div class="lg:max-w-6xl grid grid-cols-1 space-y-8 gap-10">
						<!-- cols - 1  -->
						<div class="grid grid-cols-1 lg:grid-cols-3 gap-10">
							<div class="flex flex-col relative items-start justify-center p-3 space-y-5 bg-gray-100 md:items-start bg-gray-200">
								<div class="absolute self-center top-[-35px] flex justify-center items-center p-2.5 rounded-full bg-header-dark-overlay text-white">
									<svg
										xmlns="http://www.w3.org/2000/svg"
										class="icon icon-tabler icon-tabler-quote text-white"
										width="44"
										height="44"
										viewBox="0 0 24 24"
										stroke-width="2"
										stroke="currentColor"
										fill="none"
										stroke-linecap="round"
										stroke-linejoin="round"
									>
										<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
										<path d="M10 11h-4a1 1 0 0 1 -1 -1v-3a1 1 0 0 1 1 -1h3a1 1 0 0 1 1 1v6c0 2.667 -1.333 4.333 -4 5"></path>
										<path d="M19 11h-4a1 1 0 0 1 -1 -1v-3a1 1 0 0 1 1 -1h3a1 1 0 0 1 1 1v6c0 2.667 -1.333 4.333 -4 5"></path>
									</svg>
								</div>
								<blockquote class="text-left italic text-base">
									'"Excellent Book! Add your book review here consectetur adipiscing elit. Aliquam euismod nunc porta urna facilisis tempor."'
								</blockquote>
								<div class="flex flex-col md:flex-row items-start justify-center  md:items-start">
									<img
										src={BannerProfile}
										width={60}
										height={60}
										alt=""
										class="max-w-full rounded-full mb-2 md:mr-2"
									/>
									<p class="text-center md:text-left">
										<span class="block text-sm font-bold">John Doe</span>
										<span class="block text-sm">Executive Director</span>
									</p>
								</div>
							</div>
							<div class="flex flex-col relative items-start justify-center p-3 space-y-5  md:items-start bg-gray-200">
								<div class="absolute self-center top-[-35px] flex justify-center items-center p-2.5 rounded-full bg-header-dark-overlay text-white">
									<svg
										xmlns="http://www.w3.org/2000/svg"
										class="icon icon-tabler icon-tabler-quote text-white"
										width="44"
										height="44"
										viewBox="0 0 24 24"
										stroke-width="2"
										stroke="currentColor"
										fill="none"
										stroke-linecap="round"
										stroke-linejoin="round"
									>
										<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
										<path d="M10 11h-4a1 1 0 0 1 -1 -1v-3a1 1 0 0 1 1 -1h3a1 1 0 0 1 1 1v6c0 2.667 -1.333 4.333 -4 5"></path>
										<path d="M19 11h-4a1 1 0 0 1 -1 -1v-3a1 1 0 0 1 1 -1h3a1 1 0 0 1 1 1v6c0 2.667 -1.333 4.333 -4 5"></path>
									</svg>
								</div>
								<blockquote class="text-left italic text-base">
									'"Excellent Book! Add your book review here consectetur adipiscing elit. Aliquam euismod nunc porta urna facilisis tempor."'
								</blockquote>
								<div class="flex flex-col md:flex-row items-start justify-center  md:items-start">
									<img
										src={BannerProfile}
										width={60}
										height={60}
										alt=""
										class="max-w-full rounded-full mb-2 md:mr-2"
									/>
									<p class="text-center md:text-left">
										<span class="block text-sm font-bold">John Doe</span>
										<span class="block text-sm">Executive Director</span>
									</p>
								</div>
							</div>
							<div class="flex flex-col relative items-start justify-center p-3 space-y-5 bg-gray-100 md:items-start bg-gray-200">
								<div class="absolute self-center top-[-35px] flex justify-center items-center p-2.5 rounded-full bg-header-dark-overlay text-white">
									<svg
										xmlns="http://www.w3.org/2000/svg"
										class="icon icon-tabler icon-tabler-quote text-white"
										width="44"
										height="44"
										viewBox="0 0 24 24"
										stroke-width="2"
										stroke="currentColor"
										fill="none"
										stroke-linecap="round"
										stroke-linejoin="round"
									>
										<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
										<path d="M10 11h-4a1 1 0 0 1 -1 -1v-3a1 1 0 0 1 1 -1h3a1 1 0 0 1 1 1v6c0 2.667 -1.333 4.333 -4 5"></path>
										<path d="M19 11h-4a1 1 0 0 1 -1 -1v-3a1 1 0 0 1 1 -1h3a1 1 0 0 1 1 1v6c0 2.667 -1.333 4.333 -4 5"></path>
									</svg>
								</div>
								<blockquote class="text-left italic text-base">
									'"Excellent Book! Add your book review here consectetur adipiscing elit. Aliquam euismod nunc porta urna facilisis tempor."'
								</blockquote>
								<div class="flex flex-col md:flex-row items-start justify-center  md:items-start">
									<img
										src={BannerProfile}
										width={60}
										height={60}
										alt=""
										class="max-w-full rounded-full mb-2 md:mr-2"
									/>
									<p class="text-center md:text-left">
										<span class="block text-sm font-bold">John Doe</span>
										<span class="block text-sm">Executive Director</span>
									</p>
								</div>
							</div>
					     </div>

						
						<a href="#" class="flex   place-self-center justify-center items-center ">
						<button class="py-3 sm:text-base lg:text-lg hover:border-header-dark-overlay duration-500 transition hover:bg-transparent px-8 border rounded-full border-transparent bg-header-dark-overlay text-xs block whitespace-nowrap font-medium">
							Get your own today
						</button>
						</a>
						
				</div>
			</div>
		</section>

		<!-- SECTION SEVEN	 - CONTENT -->
		<section class="px-6 lg:px-10  text-black">
			<div class="text-center md:max-w-4xl mx-auto py-14 lg:py-20 xl:py-28">
				<div class="py-8 w-full flex flex-col justify-center items-center">
					<div>
						<img
						src="author-image.jpg"
						width={100}
						height={100}
						alt=""
						class="max-w-full rounded-full mb-2 md:mr-2"
						/>
					</div>

					<div class="space-y-3 py-5">
						<h3 class="text-lg lg:text-3xl font-bold font-Sohne-Bold">
						About The Author
						</h3>
						<p class="text-base lg:text-lg">
						This book landing page template is made by product designer Xiaoying Riley for developers. You can use this template to self-publish and promote your book/ebook. You can easily use platforms such as Gumroad to handle your book payment and delivery. This template is 100% FREE as long as you keep the footer attribution link. You do not have the rights to resell, sublicense, or redistribute (even for free) the template on its own or as a separate attachment from any of your work. If you'd like to use this template without the footer attribution link, you can buy the commercial license.
						</p>

						<div class="py-2.5 flex flex-row gap-6 justify-center items-center">
							<a href="#" class="bg-header-dark-overlay text-white transition duration-300 hover:bg-header-dark-overlay/70 p-3  rounded-full ">
								<svg
								xmlns="http://www.w3.org/2000/svg"
								class="icon icon-tabler icon-tabler-brand-facebook"
								width="24"
								height="24"
								viewBox="0 0 24 24"
								stroke-width="2"
								stroke="currentColor"
								fill="none"
								stroke-linecap="round"
								stroke-linejoin="round"
								>
								<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
								<path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3"></path>
								</svg>
							</a>
							<a href="#" class="bg-header-dark-overlay text-white transition duration-300 hover:bg-header-dark-overlay/70 p-3  rounded-full ">
								<svg
								xmlns="http://www.w3.org/2000/svg"
								class="icon icon-tabler icon-tabler-brand-facebook"
								width="24"
								height="24"
								viewBox="0 0 24 24"
								stroke-width="2"
								stroke="currentColor"
								fill="none"
								stroke-linecap="round"
								stroke-linejoin="round"
								>
								<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
								<path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3"></path>
								</svg>
							</a>
							<a href="#" class="bg-header-dark-overlay text-white transition duration-300 hover:bg-header-dark-overlay/70 p-3  rounded-full ">
								<svg
								xmlns="http://www.w3.org/2000/svg"
								class="icon icon-tabler icon-tabler-brand-facebook"
								width="24"
								height="24"
								viewBox="0 0 24 24"
								stroke-width="2"
								stroke="currentColor"
								fill="none"
								stroke-linecap="round"
								stroke-linejoin="round"
								>
								<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
								<path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3"></path>
								</svg>
							</a>
			
						</div>
					</div>
				</div>
			</div>
		</section>


		</main><!-- #main -->
	</section><!-- #primary -->





<?php
get_footer();
