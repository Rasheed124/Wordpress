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

		  <!-- About Header Template Reference -->
	      <?php get_template_part( 'template-parts/layout/header', 'aboutContent' ); ?>

		
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
										<?php while (have_rows('companys')) : the_row(); ?>
											<div class="grid grid-cols-1 md:grid-cols-3 md:gap-10">
												<?php if (have_rows('company')) : ?>
													<?php while (have_rows('company')) : the_row(); ?>
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
														</div>
													<?php endwhile; ?>
												<?php endif; ?>
											</div>
										<?php endwhile; ?>
									<?php endif; ?>
								</div>
							<?php
							}
						endwhile; ?>
					<?php endif; ?>
				</div>


				<!-- About Awards -->

	
	

				<div>

					<?php if (have_rows('award_section')) : ?>
	                   	<?php while (have_rows('award_section')) : the_row(); 
			        $id_award_section = get_sub_field('id');
							if ($id_award_section) { ?>
					<!-- AWARD ME DETAILS -->
					<div class="py-14 bg-white text-deep-black">
						<!-- AWARDS TITLE -->
						<!-- Award Title 1 -->
						<div class="max-w-6xl px-5 mx-auto text-center">
						<h2 class="font-Antonio font-bold text-2xl md:text-3xl uppercase">	
							<?php if ($award_section_heading = get_sub_field('heading')) : ?><?php echo esc_html($award_section_heading); ?><?php endif; ?>
						</h2>
						<div class="max-w-5xl mx-auto font-libre-baskerville text-lg mt-5">
						
							  <?php if ($award_section_paragraph = get_sub_field('paragraph')) : ?><?php echo $award_section_paragraph; ?><?php endif; ?>

						
						</div>
						</div>
				
					</div>

		
					  <!-- AWARD COMPANY -->
						<div class="py-8 text-deep-black bg-white">
							<div class="max-w-6xl px-5 mx-auto text-center">
							<!-- TABBED CONTENT TITLE -->
							<div class="mb-4 border-b border-gray-200 max-w-4xl mx-auto md:max-w-full">
								<ul class="flex flex-wrap justify-center items-center md:justify-start text-base space-x-10 -mb-px font-medium text-center">
									      <?php
							if ($posts) :
							$awards_posts = get_sub_field('awards');
							foreach ($awards_posts as $awards_post) :
								setup_postdata($awards_posts);
								$award_post_id = get_field('id', $awards_post->ID);

								?>
					
									<!-- Tabbed content buttons -->
									<li>
										<button class="inline-block text-black p-2.5 md:p-4 border-b-4 border-transparent">
											<?php echo $award_post_id; ?>
										</button>
									</li>
								
								
									       <?php endforeach; ?>
									<?php wp_reset_postdata(); ?>
								<?php endif; ?>
								</ul>
							</div>

							<!-- TABBED CONTENT -->
							<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 place-items-start py-7">
								 <div>
									<!-- Award 1 -->
									<div class="relative w-full h-[15vh] lg:h-[20vh] order-1 cursor-pointer">
										<img src="" alt="">
									</div>
									<div class="text-center lg:text-left flex flex-col justify-center items-center lg:items-start space-y-3 cursor-pointer">
										<!-- Award 1 Title and Link -->
										<p class="text-lg">Sample Award Title 1</p>
										<!-- Award 1 Description -->
										<p class="text-base">Sample Award Description 1</p>
									</div>
								</div>
							</div>

							<!-- Load more button -->
							<button class="mt-4 text-center bg-header-dark-overlay text-white py-2 px-4 rounded-lg hover:bg-header-dark transition duration-300" disabled>
								Show More Awards
							</button>
							</div>
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
