<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package themeduro
 */

get_header();
?>
<!-- ---------------------
// NEW TEMPLATE
------------------------>
<?php
// Check if this is page index one or two
$page_index = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

// If this is page index one, show both sections
if ( $page_index == 1 ) {
?>
	<div class="px-4 py-10 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">
		<?php 
			$args = array(
				'posts_per_page' => 1,
				'orderby' => 'rand',
				'category_name' => 'featured'
			);
			$query = new WP_Query($args);
		?>
		<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
		<div class="flex flex-col items-center justify-between lg:flex-row">

			<div class="mb-10 lg:max-w-lg lg:pr-5 lg:mb-0">
				<div class="max-w-xl mb-6">
				
					<h2 class="max-w-lg mb-6 font-libre-baskerville text-3xl font-bold tracking-tight text-black sm:text-4xl sm:leading-[43px]">
						<?php the_title(); ?>
					</h2>
					<p class="text-base md:text-lg">
						<?php echo wp_trim_words(get_the_excerpt(), 20); ?>
					</p>
				</div>
				<div class="flex flex-col items-start md:flex-row">
					<a
					href="<?php the_permalink(); ?>"
					class="button"
					>
				
              <button className="py-3 hover:border-header-dark-overlay duration-500 transition hover:bg-transparent px-8 border rounded-full border-transparent bg-black text-xs sm:text-base block whitespace-nowrap font-medium ">
                Read more
              </button>
       
					</a>
				</div>
			</div>
			<div class="relative lg:w-1/2">
				<?php if(has_post_thumbnail()):?>
					<img class="object-cover w-full h-56 shadow-lg sm:h-96 lg:h-[448px]" src="<?php the_post_thumbnail_url();?>" alt="" />
				<?php endif; ?>
			</div>
            
		</div>
		<?php endwhile; endif; ?>
	</div>



	<!-- Sidebar Template Part post -->
	<section class="px-4 py-5 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl">
		<div class="">
			<div class="">
				<div class="mt-10">
					
						<?php
						$paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1; // get the current page number
						$args = array(
							'post_type' => 'post',
							'paged' => $paged // set the current page number
						);
						$query = new WP_Query( $args );
						?>
						
						<?php if ( $query->have_posts() ) : ?>

						<div class="grid grid-cols-1 md:grid-cols-2 gap-10 ">
						<?php while ( $query->have_posts() ) : $query->the_post(); ?>
							<article class="grid grid-cols-1 ">

                            	<div class="">
									<?php if(has_post_thumbnail()):?> 
										<img alt="Guitar" src="<?php the_post_thumbnail_url();?>" class="object-cover w-full h-40" alt="" />
									<?php endif;?>
								</div>
								<div class="">
									<h3 class="mb-3 text-xl font-bold leading-7 capitalize transition-all duration-200 text-black hover:underline">
										<a href="<?php the_permalink(); ?>"><?php echo wp_trim_words( get_the_title(), 10 ); ?></a>
									</h3>
									<p class="text-sm leading-relaxed text-gray-500 line-clamp-3 mb-2">
										<?php echo wp_trim_words(get_the_excerpt(), 16); ?>
									</p>
									<p class="mt-3 text-xs font-semibold tracking-wide uppercase">
										<?php
											$categories = get_the_category();
											if ( !empty( $categories ) ):
											foreach($categories as $cat): 
										?>
											<a href="<?php echo get_tag_link($cat->term_id);?>"><?php echo $cat->name;?></a>
										<?php endforeach; endif;?>
										<span class="text-gray-600">— <?php echo get_the_date('jS F, Y');?></span>
									</p>
								</div>
							
							</article>
						<?php endwhile; ?>
						</div>
						<!-- PAGINATION -->
						<div class="flex justify-center items-center mt-6 border-t border-gray">
							<div class="flex justify-center">
								<?php
									global $wp_query;

									$big = 999999999; // need an unlikely integer

									$pages = paginate_links( array(
										'base'      => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
										'format'    => '?paged=%#%',
										'current'   => max( 1, get_query_var('paged') ),
										'total'     => $wp_query->max_num_pages,
										'type'      => 'array',
										'prev_text' => __('«'),
										'next_text' => __('»'),
									) );

									if ( $pages ) {
										echo '<ul class="flex pt-2">';
										$current_page = max( 1, get_query_var('paged') );

										// Add First button
										if ( $current_page !== 1 ) {
											echo '<li class="px-5 py-3 "><a class="page-link" href="'.esc_url( get_pagenum_link( 1 ) ).'">First</a></li>';
										}

										foreach ( $pages as $page ) {
											$class = (strpos($page, 'current') !== false) ? 'border-b border-red-600 ' : '';
											echo '<li class="px-5 py-3 '.$class.'">'.$page.'</li>';
										}

										// Add Last button
										if ( $current_page !== $wp_query->max_num_pages ) {
											echo '<li class="px-5 py-3 "><a class="page-link" href="'.esc_url( get_pagenum_link( $wp_query->max_num_pages ) ).'">Last</a></li>';
										}

										echo '</ul>';
									}
								?>
							</div>
						</div>
						<?php wp_reset_postdata(); ?>
						<?php else : ?>
							<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
						<?php endif; ?>
					</div>
				</div>
			</div>
		
		</div>
	</section>
    <!-- Sidebar Template Part post -->

<?php
}
// If this is page index two, show only section 2
else {
?>
	<!-- Sidebar Template blog post -->
	<section class="cont py-5 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl">
		<div class="grid grid-cols-1 gap-x-6 gap-y-6 md:gap-y-4">
			<div class="col-span-12 md:col-span-8">
				<div class="mt-10">
					<div class="mx-4 mb-8">
					

						<?php
						$paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1; // get the current page number
						$args = array(
							'post_type' => 'post',
							'paged' => $paged // set the current page number
						);
						$query = new WP_Query( $args );
						?>
						
						<?php if ( $query->have_posts() ) : ?>

						<div class="flex flex-col gap-y-6">
						<?php while ( $query->have_posts() ) : $query->the_post(); ?>
							<article class="grid grid-cols-1 md:grid-cols-2 gap-x-6">
								<div class="col-span-4">
									<h3 class="mb-3 text-xl font-bold leading-7 capitalize transition-all duration-200 text-black hover:underline">
										<a href="<?php the_permalink(); ?>"><?php echo wp_trim_words( get_the_title(), 10 ); ?></a>
									</h3>
									<p class="text-sm leading-relaxed text-gray-500 line-clamp-3 mb-2">
										<?php echo wp_trim_words(get_the_excerpt(), 16); ?>
									</p>
									<p class="mt-3 text-xs font-semibold tracking-wide uppercase">
										<?php
											$categories = get_the_category();
											if ( !empty( $categories ) ):
											foreach($categories as $cat): 
										?>
											<a href="<?php echo get_tag_link($cat->term_id);?>"><?php echo $cat->name;?></a>
										<?php endforeach; endif;?>
										<span class="text-gray-600">— <?php echo get_the_date('jS F, Y');?></span>
									</p>
								</div>
								<div class="col-span-2">
									<?php if(has_post_thumbnail()):?> 
										<img alt="Guitar" src="<?php the_post_thumbnail_url();?>" class="object-cover w-full h-40" alt="" />
									<?php endif;?>
								</div>
							</article>
						<?php endwhile; ?>
						</div>
						<!-- PAGINATION -->
						<div class="flex justify-center items-center mt-6 border-t border-gray">
							<div class="flex justify-center">
								<?php
									global $wp_query;

									$big = 999999999; // need an unlikely integer

									$pages = paginate_links( array(
										'base'      => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
										'format'    => '?paged=%#%',
										'current'   => max( 1, get_query_var('paged') ),
										'total'     => $wp_query->max_num_pages,
										'type'      => 'array',
										'prev_text' => __('«'),
										'next_text' => __('»'),
									) );

									if ( $pages ) {
										echo '<ul class="flex flex-wrap pt-2">';
										$current_page = max( 1, get_query_var('paged') );

										// Add First button
										if ( $current_page !== 1 ) {
											echo '<li class="px-5 py-3 "><a class="page-link" href="'.esc_url( get_pagenum_link( 1 ) ).'">First</a></li>';
										}

										foreach ( $pages as $page ) {
											$class = (strpos($page, 'current') !== false) ? 'border-b border-red-600 ' : '';
											echo '<li class="px-5 py-3 '.$class.'">'.$page.'</li>';
										}

										// Add Last button
										if ( $current_page !== $wp_query->max_num_pages ) {
											echo '<li class="px-5 py-3 "><a class="page-link" href="'.esc_url( get_pagenum_link( $wp_query->max_num_pages ) ).'">Last</a></li>';
										}

										echo '</ul>';
									}
								?>
							</div>
						</div>
						<?php wp_reset_postdata(); ?>
						<?php else : ?>
							<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
						<?php endif; ?>
					</div>
				</div>
			</div>
		
		</div>
	</section>
	<!-- Sidebar Template blog post -->
<?php
}

// Reset the post data
wp_reset_postdata();
?>

<!-- ---------------------
// NEW TEMPLATE
------------------------>
<?php get_footer();?>