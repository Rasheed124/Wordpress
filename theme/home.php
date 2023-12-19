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
                <div class="bg-white px-5 py-8 text-light-white">
                    <div class="grid grid-cols-1 gap-10 text-center max-w-4xl mx-auto">

                   
                    <?php
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $args = array(
                        'post_type'      => 'post',
                        'posts_per_page' => 3,
                        'paged'          => $paged,
                    );

                    $latest_posts = new WP_Query($args);

                    if ($latest_posts->have_posts()) :
                        while ($latest_posts->have_posts()) : $latest_posts->the_post(); ?>
                       

                                <div class="flex flex-col gap-8 md:flex-row justify-start text-left">

                                    <div class="flex-1 w-full">
                                        <a href="<?php the_permalink(); ?>" class="block">
                                            <div class="w-full ">
                                                <?php
                                                if (has_post_thumbnail()) {
                                                    $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                                                ?>
                                                    <img class="w-full md:h-[45vh] object-contain   " src="<?php echo esc_url($thumbnail_url); ?>" alt="<?php the_title_attribute(); ?>" />
                                                <?php
                                                }
                                                ?>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="flex-1 text-deep-black w-full">
                                        <div class="border-b pb-5">
                                            <div class="flex justify-between gap-8 mb-5">
                                                <span><?php echo get_the_date(); ?></span> 
                                               <em class="">
										<?php if ($post_reading = get_field('post_reading_time')) : ?>
											<?php echo $post_reading; ?>
										<?php endif; ?>
										</em>
                                            </div>
                                         
                                            <a href="<?php the_permalink(); ?>">
                                                <h3 class="text-xl md:text-2xl font-Antonio transition-colors hover:duration-700 hover:text-header-dark-overlay">
                                                    <?php the_title(); ?>
                                                </h3>

                                                  <p class="mt-3">
                                                          <?php echo wp_trim_words(get_the_excerpt(), 21, '...'); ?>
                                                   </p>
                                       
                                             
                                            </a>
                                        </div>

                                        <div class="flex w-full mt-5">
                                            <div class="flex justify-center items-center mr-5 transition-colors hover:duration-700 hover:text-header-dark-overlay">
                                                    <span class="mr-2">
                                                        <i class="fa-regular fa-eye"></i>
                                                    </span>
                                                     <span><?= gt_get_post_view(); ?></span>
                                            </div>

                                            <div class="flex justify-center items-center mr-5">
                                                <a href="<?php comments_link(); ?>">
                                                    <div class="flex justify-center items-center transition-colors hover:duration-700 hover:text-header-dark-overlay">
                                                              <span class="mr-2">
                                                                <i class="fa-regular fa-comment"></i>
                                                                </span>
                                                        <span class="block"><?php echo get_comments_number(); ?></span>
                                                    </div>
                                                </a>
                                            </div>

                                            <!-- <div class="flex justify-center items-center self-end">
                                                <span><?php //echo get_post_meta(get_the_ID(), 'like', true); ?> likes</span>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>

                        <?php
                            endwhile;
                            wp_reset_postdata();
                        else :
                            echo 'No posts found';
                        endif;
                        ?>

                    </div>
                </div>
            </div>
            <div class="pagination bg-white flex justify-center items-center py-5">

            <div class="p-4 rounded-full font-Sohne-Bold bg-header-dark-overlay">
                         <?php
                echo paginate_links(array(
                    'total'   => $latest_posts->max_num_pages,
                    'current' => max(1, get_query_var('paged')),
                ));
                ?>
            </div>
       
            </div>

<?php wp_reset_query(); ?>

</div>
        </div>



		</section>
	</main><!-- #main -->


<?php
get_footer("main");
