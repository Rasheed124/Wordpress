            <div class="group cursor-pointer font-Antonio inline-flex">
                  <div class="mr-2 uppercase text-xl transition duration-700 group-hover:text-header-dark-overlay">
                         <?php echo esc_html($product_section_link_title); ?>
                  </div>
               
                  <div class="relative group-hover:text-header-dark-overlay self-end p-4 py-3 overflow-hidden font-medium transition duration-700 ease-out text-2xl">
                    <div class="">
                      <span class="absolute inset-0 flex items-center justify-end w-full h-full text-white duration-500 group-hover:translate-x-[100%] bg-transparent -translate-x-[20%] ease">
                        <div class="relative btn overflow-x-hidden flex justify-center items-center gap-3 text-lg">
                           <span><i class="fa-solid fa-arrow-right text-2xl"></i></span>
                        </div>
                      </span>
                      <span class="absolute inset-0 flex items-center justify-end w-full h-full text-white duration-500 -translate-x-[100%] bg-transparent group-hover:translate-x-0 ease">
                        <div class="relative btn overflow-x-hidden flex justify-center items-center gap-3 text-lg font-Antonio">
                            <span><i class="fa-solid fa-arrow-right text-2xl"></i></span>
                        </div>
                      </span>
                    </div>
                  </div>
                </div>
          




























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
		
			<div class="px-4 py-10 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">
				<div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16">
					<!-- <div class="flex flex-col items-center justify-between lg:flex-row"> -->

					<div class="text-center lg:text-left">
							<div class="max-w-xl mb-6">
									<div class="space-x-2">
										<?php
										$categories = get_the_category();
										if (!empty($categories)) :
											foreach ($categories as $cat) :
										?>
											<p class="inline-block text-base cursor-pointer font-semibold tracking-wider text-orange uppercase rounded-full">
												<?php echo $cat->name; ?>
											</p>
										<?php endforeach;
										endif; ?>
									</div>

									<h2 class="max-w-lg mb-6 text-5xl font-bold font-Antonio tracking-tight text-blue sm:text-7xl sm:leading-[68px]">
										<?php the_title(); ?>
									</h2>
									<p class="text-base md:text-lg font-normal hidden md:block">
										<?php echo wp_trim_words(get_the_excerpt(), 20); ?>
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
								<div class="flex flex-col  items-center md:flex-row">
									<img class="object-cover w-16 h-16 rounded-full" src="<?php echo $author_image; ?>" alt="<?php echo the_author_meta('first_name', $author_id); ?>" />
									<div class="flex flex-col text-center lg:text-left space-y-1 ml-3">
										<p class="text-sm leading-relaxed">Written by <?php echo the_author_meta('first_name', $author_id); ?></p>
										<span class="text-sm leading-relaxed"><?php echo get_the_date('jS F, Y'); ?></span>
									</div>
								</div>
							</div>


						<div class="md:hidden  space-y-10 py-10">
							<img class="max-w-full mx-auto" src="<?php the_post_thumbnail_url(); ?>" alt="" />

							<p class="text-base md:text-lg font-normal">
								<?php echo wp_trim_words(get_the_excerpt(), 20); ?>
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
								<div class="flex flex-col text-center lg:text-left space-y-1 ml-3">
									<p class="text-sm leading-relaxed">Written by <?php echo the_author_meta('first_name', $author_id); ?></p>
									<span class="text-sm leading-relaxed"><?php echo get_the_date('jS F, Y'); ?></span>
								</div>
							</div>
							
						</div>
						
					</div>

					<div class="hidden lg:block">
						<img class="max-w-full mx-auto" src="<?php the_post_thumbnail_url(); ?>" alt="" />
						<!-- <img class="object-cover w-full h-56 sm:h-96 lg:h-[calc(100vh-30vh)]" src="" alt="" /> -->
					</div>

				</div>
			</div>

			<div class="max-w-[900px] mx-auto p-5 px-10">
				<?php the_content(); ?>
			</div>

			<div class="px-4 py-10 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-8">
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
		
	</section>


<?php
get_footer("main");
