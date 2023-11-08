<?php
/**

 */

$display_banner = get_theme_mod('display_banner', 'yes');
$banner_image = get_theme_mod('banner_image', ''); // Get the uploaded image
$banner_link = get_theme_mod('banner_link', ''); // Get the uploaded link

if ($display_banner === 'yes' && $banner_image && $banner_link) {
    echo '<a href="' . esc_url($banner_link) . '" class="w-full h-[50vh] lg:h-[90vh]  flex justify-center items-center flex-col">';
    echo '<img src="' . esc_url($banner_image) . '" alt="Main Page Banner" class=" h-full    w-full ">';
    echo '</a>';
}




get_header();
?>




<?php
// Check if this is page index one or two
$page_index = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

// If this is page index one, show both sections
if ( $page_index == 1 ) {
?>


          <div class="py-14 md:py-0 px-4 md:px-0 max-w-2xl  md:max-w-4xl xl:max-w-6xl mx-auto bg-gray-200 ">
            <?php 
			$args = array(
				'posts_per_page' => 1,
				'orderby' => 'rand',
				'category_name' => 'featured'
			);
			$query = new WP_Query($args);
		?>
		<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
               <div class="grid grid-cols-1 md:grid-cols-2 ">

                <div class="space-y-4 py-14 px-4 lg:px-8 md:flex md:flex-col  md:justify-center xl:max-w-lg">
                  <h3 class="text-4xl font-bold xl:text-3xl "><?php the_title(); ?></h3>

                  <p class="text-base xl:text-base">	<?php echo wp_trim_words(get_the_excerpt(), 25); ?></p>

                  <div>
                    <a href="<?php the_permalink(); ?>" class="border">
                      <button class="p-2.5 hover:shadow-md transition duration-300 bg-black/80 text-sm text-white rounded-md">
                      Read more

                      </button>
                    </a>
                  </div>
                </div>

                <div class="md:relative hidden md:block md:h-[60vh] lg:h-[90vh] xl:h-[60vh] md:w-full ">
						<?php if(has_post_thumbnail()):?>
					<img class="max-w-full md:w-full md:absolute md:object-cover md:object-center top-0 left-0 md:h-full" src="<?php the_post_thumbnail_url();?>" alt="" />
				<?php endif; ?>
               
                </div>
               </div>

			   	<?php endwhile; endif; ?>
          </div>
      </section>

	  

       <section class="" >

	

          <div class="py-14 px-4 lg:px-0 max-w-xl  md:max-w-4xl xl:max-w-6xl mx-auto  ">
            

		  		<?php
						$paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1; // get the current page number
						$args = array(
							'post_type' => 'post',
							'paged' => $paged // set the current page number
						);
						$query = new WP_Query( $args );
						?>
						
						<?php if ( $query->have_posts() ) : ?>
               <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-6 ">
				<?php while ( $query->have_posts() ) : $query->the_post(); ?>
                <div>
              <div class="sm:relative sm:h-[20vh] w-full">
					<?php if (has_post_thumbnail()) : ?>
						<img alt="Guitar" src="<?php the_post_thumbnail_url(); ?>" class="max-w-full w-full h-auto sm:absolute sm:object-cover sm:object-center top-0 left-0 sm:h-full" alt="" />
					<?php endif; ?>
				</div>

                   <div class="space-y-2.5">
					<h3>

						<a href="<?php the_permalink(); ?>"  class="text-lg md:text-lg font-bold pt-2.5 block  transition duration-300 hover:text-yellow-600"><?php echo wp_trim_words( get_the_title(), 10 ); ?></a>
   
					</h3>
                 
                    
                      <p> <?php echo wp_trim_words(get_the_excerpt(), 16); ?></p> 
                      <!-- <p class="text-base text-black/60">
                               <span class="block font-semibold">
                        Favid Rick

                        </span>
                      <span class="block text-sm font-medium">
                        Dec 12 · 5 min read
                      </span> 
                      
                      </p> -->

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
                </div>
         
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
      </section>

<?php
}
// If this is page index two, show only section 2
else {
?>


       <section class="" >

	

          <div class="py-14 px-4 md:px-0 max-w-xl  md:max-w-4xl xl:max-w-6xl mx-auto  ">
            

		  		<?php
						$paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1; // get the current page number
						$args = array(
							'post_type' => 'post',
							'paged' => $paged // set the current page number
						);
						$query = new WP_Query( $args );
						?>
						
						<?php if ( $query->have_posts() ) : ?>
               <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-6 ">
				<?php while ( $query->have_posts() ) : $query->the_post(); ?>
                <div>
                  <div class="sm:relative sm:h-[20vh]  w-full ">

				  <?php if(has_post_thumbnail()):?> 
							<img alt="Guitar" src="<?php the_post_thumbnail_url();?>" class="max-w-full sm:w-full sm:absolute sm:object-cover sm:object-center top-0 left-0 sm:h-full" alt="" />
					<?php endif;?>
                  </div>
                   <div class="space-y-2.5">
					<h3>

						<a href="<?php the_permalink(); ?>"  class="text-base md:text-lg font-bold pt-2.5 block  transition duration-300 hover:text-yellow-600"><?php echo wp_trim_words( get_the_title(), 10 ); ?></a>
   
					</h3>
                 
                    
                      <p> <?php echo wp_trim_words(get_the_excerpt(), 16); ?></p> 
                      <!-- <p class="text-base text-black/60">
                               <span class="block font-semibold">
                        Favid Rick

                        </span>
                      <span class="block text-sm font-medium">
                        Dec 12 · 5 min read
                      </span> 
                      
                      </p> -->

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
                </div>
         
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
      </section>


<?php
}

// Reset the post data
wp_reset_postdata();
?>

<!-- ---------------------
// NEW TEMPLATE
------------------------>
<?php get_footer();?>