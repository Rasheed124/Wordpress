<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Durodola_Abdulhad
 */

get_header("main");
?>
	<section class="py-20 md:py-32 bg-white ">
		
			<div class="px-4 py-10 mx-auto sm:max-w-2xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">
				<div class="flex gap-10 lg:gap-16">
					<!-- <div class="flex flex-col items-center justify-between lg:flex-row"> -->

					<div class="flex flex-col lg:justify-between flex-1   text-center lg:text-left">

					
									<div class="max-w-xl  mx-auto mb-4">
											<div class="flex justify-center lg:justify-start gap-3  ml-3">
												<?php
												$categories = get_the_category();
												if (!empty($categories)) :
													foreach ($categories as $cat) :
												?>
													<li id="single_post_category_label" class="mt-0 text-base cursor-pointer font-semibold  uppercase ">
														<?php echo $cat->name; ?>
													</li>
												<?php endforeach;
												endif; ?>
											</div>

											<h2 class="lg:max-w-xl   mb-6 text-6xl font-bold font-Antonio  sm:text-[5.5rem] ">
												<?php the_title(); ?>
											</h2>
											<p class="text-base md:text-lg font-normal hidden lg:block">
													<?php echo wp_trim_words(get_the_excerpt(), 60, '...'); ?>
											</p>

									</div>
								
									<div class="hidden lg:block">
										<?php
										$author_id = get_the_author_meta('ID');
										$author_image = get_avatar_url($author_id);
										$author_name = get_the_author_meta('display_name');
										echo $author_name;
										?>
										<?php $author_id = $post->post_author; ?>
											<div class="flex flex-col  items-center lg:flex-row">
											<img class="object-cover w-16 h-16 rounded-full" src="<?php echo $author_image; ?>" alt="<?php echo the_author_meta('first_name', $author_id); ?>" />
											<div class="flex flex-col text-center lg:text-left space-y-1  ml-3">
													<p class="text-sm font-semibold leading-relaxed">Written by <br>  <?php echo the_author_meta('first_name', $author_id); ?></p>
													<div class="flex gap-2">
															<em class="">
													<?php if ($post_reading = get_field('post_reading_time')) : ?>
														<?php echo $post_reading; ?>
													<?php endif; ?>
													</em>
													.<span class="text-sm leading-relaxed"><?php echo get_the_date('jS F, Y'); ?></span>
													</div>
												
												
											</div>
										</div>
									</div>


									<div class="lg:hidden  space-y-10 py-10">
										<img class="max-w-full mx-auto" src="<?php the_post_thumbnail_url(); ?>" alt="" />

										<p class="text-base md:text-lg font-normal">
												<?php echo wp_trim_words(get_the_excerpt(), 21, '...'); ?>
										</p>

										<?php
										$author_id = get_the_author_meta('ID');
										$author_image = get_avatar_url($author_id);
										$author_name = get_the_author_meta('display_name');
										echo $author_name;
										?>
										<?php $author_id = $post->post_author; ?>
										<div class="flex flex-col  items-center lg:flex-row">
											<img class="object-cover w-16 h-16 rounded-full" src="<?php echo $author_image; ?>" alt="<?php echo the_author_meta('first_name', $author_id); ?>" />
											<div class="flex flex-col text-center lg:text-left space-y-1  ml-3">
													<p class="text-sm font-semibold leading-relaxed">Written by <br> Durodola Abdulhad <?php echo the_author_meta('first_name', $author_id); ?></p>
													<div class="flex gap-2">
															<em class="">
													<?php if ($post_reading = get_field('post_reading_time')) : ?>
														<?php echo $post_reading; ?>
													<?php endif; ?>
													</em>.<span class="text-sm leading-relaxed"><?php echo get_the_date('jS F, Y'); ?></span>
													</div>
												
												
											</div>
										</div>
							
									</div>
							
						
					</div>

					<div class="flex-1 hidden  lg:block">
						<img class="w-full h-full object-center " src="<?php the_post_thumbnail_url(); ?>" alt="" />
						
					</div>

				</div>
			</div>

			<div class="max-w-[900px] mx-auto p-5 text-lg px-10">
				<?php the_content(); ?>
			</div>

			<div class="px-4 border-b  py-10 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-8">
				<div class="mt-5 mb-10 flex">
					<span class="h-[1.5px] w-full bg-gray"></span>
				</div>
				<div class="grid grid-cols-3 gap-x-6 gap-y-6 md:gap-y-4 mb-10">
					<?php $related = get_posts(
					array(
						'category__in' => wp_get_post_categories($post->ID),
						'numberposts' => 3,
						'orderby' => 'rand',
						'post__not_in' => array($post->ID)
					)
					);
					if ($related)
					foreach ($related as $post) {
						setup_postdata($post);
					?>
					<div class="col-span-3 lg:col-span-1 shadow-sm">
						<article class="overflow-hidden">
						<?php if (has_post_thumbnail()) : ?>
							<img alt="Guitar" src="<?php the_post_thumbnail_url(); ?>" class="object-cover w-full h-40" alt="" />
						<?php endif; ?>
						<div class="p-5">
							<?php
							$categories = get_the_category();
							if (!empty($categories)) :
							foreach ($categories as $cat) :
							?>
								<p class="mb-3 cursor-pointer text-xs font-semibold tracking-wide uppercase">
								<?php echo $cat->name; ?>
								<span class="text-gray-600">— <?php echo get_the_date('jS F, Y'); ?></span>
								</p>
							<?php endforeach;
							endif; ?>
							<h3 class="mb-3 text-xl font-Antonio font-bold leading-7 capitalize transition-all duration-200 text-blue hover:underline">
							<a href="<?php the_permalink(); ?>"><?php echo wp_trim_words(get_the_title(), 30); ?></a>
							</h3>
						</div>
						</article>
					</div>
				<?php
					}
				wp_reset_postdata();
				?>
				</div>
			</div>


			<!-- New Section for Related and Latest Posts -->
			<div class="px-4 border-b py-10 mx-auto sm:max-w-2xl md:max-w-full lg:max-w-screen-xl md:px-8 ">
				<div class="grid grid-cols-1 sm:grid-cols-2 gap-10">
					<!-- Column for Related Posts -->
					<div class="col-span-1">
						<h2 class="text-2xl font-semibold font-Antonio mb-6  text-header-dark-overlay border-b-4 border-header-dark-overlay italic">Related Posts</h2>
						<div class="grid grid-cols-1 gap-6">
							<?php $related = get_posts(
								array(
									'category__in' => wp_get_post_categories($post->ID),
									'numberposts' => 3,
									'orderby' => 'rand',
									'post__not_in' => array($post->ID)
								)
							);
							if ($related)
								foreach ($related as $post) {
									setup_postdata($post);
							?>
								<h3 class="text-lg font-Antonio hover:underline hover:text-header-dark-overlay transition font-semibold"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<?php
								}
							wp_reset_postdata();
							?>
						</div>
					</div>

					<!-- Column for Latest Posts -->
					<div class="col-span-1">
						<h2 class="text-2xl font-semibold font-Antonio mb-6   text-header-dark-overlay border-b-4 border-header-dark-overlay italic">Latest Posts</h2>
						<div class="grid grid-cols-1 gap-6">
							<?php
							$latest_posts = get_posts(
								array(
									'posts_per_page' => 3,
									'post__not_in' => array($post->ID)
								)
							);
							if ($latest_posts)
								foreach ($latest_posts as $post) {
									setup_postdata($post);
							?>
							<h3 class="text-lg font-Antonio font-semibold hover:underline hover:text-header-dark-overlay transition "><a  href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
								
							<?php
								}
							wp_reset_postdata();
							?>
						</div>
					</div>
				</div>
			</div>


			<!-- New Section for Author Details -->
			<div class="px-4 lg:max-w-screen-xl mx-auto py-10   md:px-24 lg:px-8">

				<h2 class="text-2xl font-semibold text-left font-Antonio  mb-6">About the Author</h2>

				<!-- <div class="grid grid-cols-1 lg:grid-cols-2 gap-10"> -->
				<div class="flex flex-col justify-center items-center lg:justify-start lg:items-start lg:flex-row gap-10">
					<!-- Column for Author Image -->
					<div class="">
						<?php
						$author_id = get_the_author_meta('ID');
						$author_image = get_avatar_url($author_id);
						?>
						<img class="rounded-full " src="<?php echo $author_image; ?>" alt="<?php echo the_author_meta('first_name', $author_id); ?>" />
					</div>

					<!-- Column for Author Name, Social Links, and Bio -->
					<div class="">
						<?php
						 $author_name = get_the_author();
						$author_bio = get_the_author_meta('description');
						$author_social_links = get_the_author_meta('user_social_links');
						?>
						<p class="text-lg font-semibold mb-4 "><?php echo $author_name; ?></p>
						<p class="text-base mb-4 lg:max-w-md"><?php echo $author_bio; ?></p>

						<!-- Display Social Links -->
						<?php if (!empty($author_social_links)) : ?>
							<div class="flex gap-4">
								<?php foreach ($author_social_links as $social_link) : ?>
									<a href="<?php echo esc_url($social_link); ?>" target="_blank" class="text-header-dark-overlay">
										<!-- You can use social media icons or just display the link -->
										<?php echo esc_html($social_link); ?>
									</a>
								<?php endforeach; ?>
							</div>
						<?php endif; ?>
					</div>
				</div>
			</div>
				
	</section>


<?php
get_footer("main");
