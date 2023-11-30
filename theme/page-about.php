<?php
/** 

 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no `home.php` file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Durodola_Abdulhad
 */

get_header("about");
?>

<main class="">
		<section class="min-h-screen bg-cover bg-no-repeat bg-center bg-deep-black bg-blend-overlay bg-opacity-10" style="background-image: url('<?php
			// Check if the current page has a featured image
			if (has_post_thumbnail()) {
				// Get the featured image HTML
				$thumbnail_id = get_post_thumbnail_id();
				$image_url = wp_get_attachment_image_src($thumbnail_id, 'full');
				$alt_text = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
				// Output the featured image
				echo esc_url($image_url[0]);
			}
		?>');">
			<div id="headerAbout" class="bg-transparent border-b-2 border-deep-black  fixed w-full z-[80] top-0 text-deep-black transition duration-700 translate-y-0">
				<div class="border-0 py-6 px-5">
					<div class="flex justify-between items-center">
					

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

			   <div class="">

   <div class="md:hidden">
				<button id="toggleMenuOpen" class="outline-none block ">
					<i class="fa-solid fa-bars text-xl"></i>
				</button>
				<button id="toggleMenuClose" class="outline-none  hidden ">
					<i class="fa-sharp fa-solid fa-xmark text-xl"></i>
				</button>
					
   </div>


       <div id="menus" class="md:hidden hidden w-full  ">
           <ul class=" flex-col text-deep-black justify-between items-start  absolute top-[60px] bg-white left-0 w-full p-5 z-10 space-y-3.5">
                <!-- Mobile Menu Items -->

                <!-- About Section -->
                <li class="w-full">
                    <div class="flex justify-between items-center">
                        <a href="<?php echo get_home_url();?>/about" class="font-bold font-Antonio w-1/2 block">
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
                                <a href="<?php echo get_home_url();?>/blog">Blog</a>
                            </li>
                            <li>
                                <a href="<?php echo get_home_url();?>/resume">Resume</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <!-- Portfolio Section -->
                <li class="w-full">
                    <div class="flex justify-between items-center">
                        <a href="<?php echo get_home_url();?>/portfolio" class="font-bold font-Antonio w-1/2 block">
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
                                <a href="<?php echo get_home_url();?>/graphics-visual-design">Graphics & Visual Design</a>
                            </li>
                            <li>
                                <a href="<?php echo get_home_url();?>/ui-ux-product-design">UI/UX & Product Design</a>
                            </li>
                            <li>
                                <a href="<?php echo get_home_url();?>/digital-marketing">Digital Marketing</a>
                            </li>
                            <li>
                                <a href="<?php echo get_home_url();?>/data-analyst">Data Analyst</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <!-- Contact Section -->
                <li class="w-full">
                    <div class="">
                        <a href="<?php echo get_home_url();?>/contact" class="font-bold font-Antonio w-1/2 block">
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


					<!-- Desktop Nav -->
					 <div class="hidden md:block">
							<ul class="space-x-12">
								<li class="inline-block p-1 group transition-all duration-500">
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

								<li class="inline-block p-1 group transition-all duration-500">
									<a href="<?php echo get_home_url();?>/portfolio"  class="font-extrabold text-xl font-Antonio block">
									<div class="relative uppercase overflow-y-hidden link-swipe">
										<span class="block transform transition-transform translate-y-0 duration-300">
										Portfolio
										</span>
									</div>
									</a>
									        <div class="z-50 relative font-Sohne-Bold hidden transition-all duration-500 group-hover:block hover:block">
										<ul class="space-y-1 absolute flex flex-col flex-grow top-1 -left-24 py-5 px-5 bg-deep-overlay-black text-light-white">
											<li class="flex flex-col">
											<a href="<?php echo get_home_url();?>/graphics-design" class="self-start whitespace-nowrap block relative after:content-[''] after:absolute after:-bottom-0.5 after:left-0 after:w-0 after:h-0 after:transition-all after:duration-700 after:bg-light-white hover:after:w-full hover:after:h-0.5">
												<span class="block text-lg">Graphics & Visual Design</span>
											</a>
											</li>
											<li class="flex flex-col">
											<a href="<?php echo get_home_url();?>/ui-ux-design" class="self-start whitespace-nowrap block relative after:content-[''] after:absolute after:-bottom-0.5 after:left-0 after:w-0 after:h-0 after:transition-all after:duration-700 after:bg-light-white hover:after:w-full hover:after:h-0.5">
												<span class="block text-lg">Ui Ux & Product Design</span>
											</a>
											</li>
											<li class="flex flex-col">
											<a href="<?php echo get_home_url();?>/digital-marketing" class="self-start whitespace-nowrap block relative after:content-[''] after:absolute after:-bottom-0.5 after:left-0 after:w-0 after:h-0 after:transition-all after:duration-700 after:bg-light-white hover:after:w-full hover:after:h-0.5">
												<span class="block text-lg">Digital Marketing</span>
											</a>
											</li>
											<li class="flex flex-col">
											<a href="<?php echo get_home_url();?>/data-analyst" class="self-start whitespace-nowrap block relative after:content-[''] after:absolute after:-bottom-0.5 after:left-0 after:w-0 after:h-0 after:transition-all after:duration-700 after:bg-light-white hover:after:w-full hover:after:h-0.5">
												<span class="block text-lg">Data Analyst</span>
											</a>
											</li>
											<!-- Add more portfolio sections as needed -->
										</ul>
                                      </div>
								</li>

								<li class=" inline-block p-1 group transition-all duration-500">
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

						<!-- Add the rest of the navigation elements for small screens and menu toggle -->

					</div>
				</div>
		   </div>
		</section>

		<?php if (have_rows('about_page_settings')) : ?>
		<?php while (have_rows('about_page_settings')) : the_row(); ?>


		<section>
		
			<!-- ABOUT ME DETAILS -->
			<div class="py-14 bg-white text-deep-black">
		
			<?php if (have_rows('about_me_section')) : ?>
				<?php while (have_rows('about_me_section')) : the_row();

				$id_about_me_section = get_sub_field('id');
				if ($id_about_me_section) { ?>
			
				<div class="max-w-6xl px-5 mx-auto text-left grid grid-cols-1 lg:grid-cols-3 gap-10">
					<div class="lg:col-start-1 lg:col-end-3">
						<?php if (have_rows('about_content')) : ?>
						<?php while (have_rows('about_content')) : the_row(); ?>
							<h2 class="font-Antonio font-bold text-2xl uppercase">
							<?php if ($about_me_heading = get_sub_field('heading')) : ?><?php echo esc_html($about_me_heading); ?><?php endif; ?>
							</h2>

							<div class="space-y-5 pr-10 md:pr-0 font-libre-baskerville text-lg mt-5">

							<?php if ($about_me_paragraphs = get_sub_field('paragraphs')) : ?><?php echo $about_me_paragraphs; ?><?php endif; ?>
							</div>

						<?php endwhile; ?>
						<?php endif; ?>
					</div>

					<div>
						<?php if (have_rows('about_contact')) : ?>
						<?php while (have_rows('about_contact')) : the_row(); ?>

							<h2 class="font-Antonio font-bold text-2xl uppercase">
							<?php if ($about_contact_heading = get_sub_field('about_contact_heading')) : ?><?php echo esc_html($about_contact_heading); ?><?php endif; ?>
							</h2>

							<div class="mt-5">
							<?php if (have_rows('about_contact_links')) : ?>
								<?php while (have_rows('about_contact_links')) : the_row(); ?>

								<?php
								$about_contact_link = get_sub_field('link');
								if ($about_contact_link) :
									$about_contact_link_url = $about_contact_link['url'];
									$about_contact_link_title = $about_contact_link['title'];
									$about_contact_link_target = $about_contact_link['target'] ? $about_contact_link['target'] : '_self';
								?>
									<a class="font-libre-baskerville text-lg block" href="<?php echo esc_url($about_contact_link_url); ?>" target="<?php echo esc_attr($about_contact_link_target); ?>">
									<?php echo esc_html($about_contact_link_title); ?>
									</a>
								<?php endif; ?>


								<?php endwhile; ?>
							<?php endif; ?>
							</div>

						<?php endwhile; ?>
						<?php endif; ?>
					</div>
				</div>

				<?php
				}
				endwhile; ?>
			<?php endif; ?>
					
			</div>


			<!-- ABOUT COMPANY -->
			<div class="py-14 bg-light-white text-deep-black">
	         <?php if (have_rows('about_company')) : ?>
				<?php while (have_rows('about_company')) : the_row();

				$id_about_company = get_sub_field('id');
				if ($id_about_company) { ?>

					<div class="max-w-6xl px-5 mx-auto text-center">
						<div class="mb-10 py-2">
							<h2 class="font-Antonio font-bold text-3xl xl:text-5xl uppercase leading-[3.5rem]">
							  <?php if ($about_company_heading = get_sub_field('heading')) : ?><?php echo esc_html($about_company_heading); ?><?php endif; ?>

							</h2>
						</div>


						      <?php if (have_rows('companys')) : ?>
									<?php while (have_rows('companys')) : the_row();

								?>
						<div class="grid grid-cols-1 md:grid-cols-3 md:gap-10">
							   <?php if (have_rows('company')) : ?>
									<?php while (have_rows('company')) : the_row();

								?>
						   
							<div class="relative md:last:border-b-0 last:border-b border-deep-black md:[&>*nth-child(n+4)]:border-b-0">
						  	  <div class="text-left py-3 border-t border-deep-black group border-b-0 md:border-b">
								 <?php
                                        $about_company_image = get_sub_field('image');
                                        if ($about_company_image) : ?>
								<div class="mb-5 scale-0 group-hover:scale-110 ease-in duration-500 absolute w-[120px] h-[100px] -top-7 right-10">
								     <img src="<?php echo esc_url($about_company_image['url']); ?>" alt="<?php echo esc_attr($about_company_image['alt']); ?>" class="w-full max-w-full" />
							
								</div>
									<?php endif; ?>
								<a href="/" class="block">
								<p class="text-xl"> <?php if ($about_company_heading = get_sub_field('title')) : ?><?php echo esc_html($about_company_heading); ?><?php endif; ?></p>
								</a>
							</div>

						 <?php
				
								endwhile; ?>
							<?php endif; ?>

						</div>
		                       <?php
				
								endwhile; ?>
							<?php endif; ?>
							<!-- Add more company sections as needed -->
						</div>
					</div>


			<?php
				}
				endwhile; ?>
			<?php endif; ?>

			</div>


		</section>

		<?php endwhile; ?>
	<?php endif; ?>
		 

</main>




<?php
get_footer("main");
?>
