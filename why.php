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

	<?php
// Check if this is page index one or two
$page_index = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
// If this is page index one, show both sections
if ( $page_index == 1 ) {
?>
            <div class="">
                <div class="bg-white px-5 py-8 text-light-white">
                    <div class="grid grid-cols-1 gap-10 text-center max-w-4xl mx-auto">

                        <?php
                        $args = array(
                            'post_type'      => 'post',
                            'posts_per_page' => 1,
                             'paged'          => get_query_var('paged') ? get_query_var('paged') : 1,
                        );

                        $latest_posts = new WP_Query($args);
                        ?>
                     <?php $i = 0; ?>
			<?php if ( $latest_posts->have_posts() ) : while ( $latest_posts->have_posts() && $i < 5 ) : $latest_posts->the_post(); ?>
                   	<?php if ( $i === 0 ) : ?>

                                <div class="flex flex-col gap-8 lg:flex-row justify-start text-left">
                                    <div class="w-full">
                                        <a href="<?php the_permalink(); ?>" class="block">
                                            <div class="w-full ">
                                                <?php
                                                if (has_post_thumbnail()) {
                                                    $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                                                ?>
                                                    <img class="object-cover w-full object-center " src="<?php echo esc_url($thumbnail_url); ?>" alt="<?php the_title_attribute(); ?>" />
                                                <?php
                                                }
                                                ?>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="text-deep-black w-full">
                                        <div class="border-b pb-5">
                                            <div class="flex gap-8 mb-5">
                                                <span><?php echo get_the_date(); ?></span>

                                                <p class=" text-xs font-semibold tracking-wide uppercase">
                                                    <?php
                                                        $categories = get_the_category();
                                                        if ( !empty( $categories ) ):
                                                        foreach($categories as $cat): 
                                                    ?>
                                                        <a href="<?php echo get_tag_link($cat->term_id);?>"><?php echo $cat->name;?></a>
                                                    <?php endforeach; endif;?>
                                                        <span class="">— <?php echo get_the_date('jS F, Y');?></span>
                                                </p>
                                            </div>

                                            <a href="<?php the_permalink(); ?>">
                                                <h3 class="text-xl md:text-2xl font-Antonio transition-colors hover:duration-700 hover:text-header-dark-overlay">
                                                    <?php the_title(); ?>
                                                </h3>
                                            </a>
                                        </div>

                                        <div class="flex w-full mt-5">
                                            <div class="flex justify-center items-center mr-5 transition-colors hover:duration-700 hover:text-header-dark-overlay">
                                                <span><?php echo get_post_meta(get_the_ID(), 'views', true); ?> views</span>
                                            </div>

                                            <div class="flex justify-center items-center mr-5">
                                                <a href="<?php comments_link(); ?>">
                                                    <div class="flex justify-center items-center transition-colors hover:duration-700 hover:text-header-dark-overlay">
                                                        <span class="block"><?php echo get_comments_number(); ?></span>
                                                    </div>
                                                </a>
                                            </div>

                                            <div class="flex justify-center items-center self-end">
                                                <span><?php echo get_post_meta(get_the_ID(), 'like', true); ?> likes</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                  	<?php elseif ( $i === 1 ) : ?>
                                <div class="flex flex-col gap-8 lg:flex-row justify-start text-left">
                                    <div class="w-full">
                                        <a href="<?php the_permalink(); ?>" class="block">
                                            <div class="w-full ">
                                                <?php
                                                if (has_post_thumbnail()) {
                                                    $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                                                ?>
                                                    <img class="object-cover w-full object-center " src="<?php echo esc_url($thumbnail_url); ?>" alt="<?php the_title_attribute(); ?>" />
                                                <?php
                                                }
                                                ?>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="text-deep-black w-full">
                                        <div class="border-b pb-5">
                                            <div class="flex gap-8 mb-5">
                                                <span><?php echo get_the_date(); ?></span>

                                                <p class=" text-xs font-semibold tracking-wide uppercase">
                                                    <?php
                                                        $categories = get_the_category();
                                                        if ( !empty( $categories ) ):
                                                        foreach($categories as $cat): 
                                                    ?>
                                                        <a href="<?php echo get_tag_link($cat->term_id);?>"><?php echo $cat->name;?></a>
                                                    <?php endforeach; endif;?>
                                                        <span class="">— <?php echo get_the_date('jS F, Y');?></span>
                                                </p>
                                            </div>

                                            <a href="<?php the_permalink(); ?>">
                                                <h3 class="text-xl md:text-2xl font-Antonio transition-colors hover:duration-700 hover:text-header-dark-overlay">
                                                    <?php the_title(); ?>
                                                </h3>
                                            </a>
                                        </div>

                                        <div class="flex w-full mt-5">
                                            <div class="flex justify-center items-center mr-5 transition-colors hover:duration-700 hover:text-header-dark-overlay">
                                                <span><?php echo get_post_meta(get_the_ID(), 'views', true); ?> views</span>
                                            </div>

                                            <div class="flex justify-center items-center mr-5">
                                                <a href="<?php comments_link(); ?>">
                                                    <div class="flex justify-center items-center transition-colors hover:duration-700 hover:text-header-dark-overlay">
                                                        <span class="block"><?php echo get_comments_number(); ?></span>
                                                    </div>
                                                </a>
                                            </div>

                                            <div class="flex justify-center items-center self-end">
                                                <span><?php echo get_post_meta(get_the_ID(), 'like', true); ?> likes</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                    <?php elseif ( $i === 2 ) : ?>
                                <div class="flex flex-col gap-8 lg:flex-row justify-start text-left">
                                    <div class="w-full">
                                        <a href="<?php the_permalink(); ?>" class="block">
                                            <div class="w-full ">
                                                <?php
                                                if (has_post_thumbnail()) {
                                                    $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                                                ?>
                                                    <img class="object-cover w-full object-center " src="<?php echo esc_url($thumbnail_url); ?>" alt="<?php the_title_attribute(); ?>" />
                                                <?php
                                                }
                                                ?>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="text-deep-black w-full">
                                        <div class="border-b pb-5">
                                            <div class="flex gap-8 mb-5">
                                                <span><?php echo get_the_date(); ?></span>

                                                <p class=" text-xs font-semibold tracking-wide uppercase">
                                                    <?php
                                                        $categories = get_the_category();
                                                        if ( !empty( $categories ) ):
                                                        foreach($categories as $cat): 
                                                    ?>
                                                        <a href="<?php echo get_tag_link($cat->term_id);?>"><?php echo $cat->name;?></a>
                                                    <?php endforeach; endif;?>
                                                        <span class="">— <?php echo get_the_date('jS F, Y');?></span>
                                                </p>
                                            </div>

                                            <a href="<?php the_permalink(); ?>">
                                                <h3 class="text-xl md:text-2xl font-Antonio transition-colors hover:duration-700 hover:text-header-dark-overlay">
                                                    <?php the_title(); ?>
                                                </h3>
                                            </a>
                                        </div>

                                        <div class="flex w-full mt-5">
                                            <div class="flex justify-center items-center mr-5 transition-colors hover:duration-700 hover:text-header-dark-overlay">
                                                <span><?php echo get_post_meta(get_the_ID(), 'views', true); ?> views</span>
                                            </div>

                                            <div class="flex justify-center items-center mr-5">
                                                <a href="<?php comments_link(); ?>">
                                                    <div class="flex justify-center items-center transition-colors hover:duration-700 hover:text-header-dark-overlay">
                                                        <span class="block"><?php echo get_comments_number(); ?></span>
                                                    </div>
                                                </a>
                                            </div>

                                            <div class="flex justify-center items-center self-end">
                                                <span><?php echo get_post_meta(get_the_ID(), 'like', true); ?> likes</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                    <?php elseif ( $i === 3 ) : ?>
                                <div class="flex flex-col gap-8 lg:flex-row justify-start text-left">
                                    <div class="w-full">
                                        <a href="<?php the_permalink(); ?>" class="block">
                                            <div class="w-full ">
                                                <?php
                                                if (has_post_thumbnail()) {
                                                    $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                                                ?>
                                                    <img class="object-cover w-full object-center " src="<?php echo esc_url($thumbnail_url); ?>" alt="<?php the_title_attribute(); ?>" />
                                                <?php
                                                }
                                                ?>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="text-deep-black w-full">
                                        <div class="border-b pb-5">
                                            <div class="flex gap-8 mb-5">
                                                <span><?php echo get_the_date(); ?></span>

                                                <p class=" text-xs font-semibold tracking-wide uppercase">
                                                    <?php
                                                        $categories = get_the_category();
                                                        if ( !empty( $categories ) ):
                                                        foreach($categories as $cat): 
                                                    ?>
                                                        <a href="<?php echo get_tag_link($cat->term_id);?>"><?php echo $cat->name;?></a>
                                                    <?php endforeach; endif;?>
                                                        <span class="">— <?php echo get_the_date('jS F, Y');?></span>
                                                </p>
                                            </div>

                                            <a href="<?php the_permalink(); ?>">
                                                <h3 class="text-xl md:text-2xl font-Antonio transition-colors hover:duration-700 hover:text-header-dark-overlay">
                                                    <?php the_title(); ?>
                                                </h3>
                                            </a>
                                        </div>

                                        <div class="flex w-full mt-5">
                                            <div class="flex justify-center items-center mr-5 transition-colors hover:duration-700 hover:text-header-dark-overlay">
                                                <span><?php echo get_post_meta(get_the_ID(), 'views', true); ?> views</span>
                                            </div>

                                            <div class="flex justify-center items-center mr-5">
                                                <a href="<?php comments_link(); ?>">
                                                    <div class="flex justify-center items-center transition-colors hover:duration-700 hover:text-header-dark-overlay">
                                                        <span class="block"><?php echo get_comments_number(); ?></span>
                                                    </div>
                                                </a>
                                            </div>

                                            <div class="flex justify-center items-center self-end">
                                                <span><?php echo get_post_meta(get_the_ID(), 'like', true); ?> likes</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                    <?php else : ?>
                                <div class="flex flex-col gap-8 lg:flex-row justify-start text-left">
                                    <div class="w-full">
                                        <a href="<?php the_permalink(); ?>" class="block">
                                            <div class="w-full ">
                                                <?php
                                                if (has_post_thumbnail()) {
                                                    $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                                                ?>
                                                    <img class="object-cover w-full object-center " src="<?php echo esc_url($thumbnail_url); ?>" alt="<?php the_title_attribute(); ?>" />
                                                <?php
                                                }
                                                ?>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="text-deep-black w-full">
                                        <div class="border-b pb-5">
                                            <div class="flex gap-8 mb-5">
                                                <span><?php echo get_the_date(); ?></span>

                                                <p class=" text-xs font-semibold tracking-wide uppercase">
                                                    <?php
                                                        $categories = get_the_category();
                                                        if ( !empty( $categories ) ):
                                                        foreach($categories as $cat): 
                                                    ?>
                                                        <a href="<?php echo get_tag_link($cat->term_id);?>"><?php echo $cat->name;?></a>
                                                    <?php endforeach; endif;?>
                                                        <span class="">— <?php echo get_the_date('jS F, Y');?></span>
                                                </p>
                                            </div>

                                            <a href="<?php the_permalink(); ?>">
                                                <h3 class="text-xl md:text-2xl font-Antonio transition-colors hover:duration-700 hover:text-header-dark-overlay">
                                                    <?php the_title(); ?>
                                                </h3>
                                            </a>
                                        </div>

                                        <div class="flex w-full mt-5">
                                            <div class="flex justify-center items-center mr-5 transition-colors hover:duration-700 hover:text-header-dark-overlay">
                                                <span><?php echo get_post_meta(get_the_ID(), 'views', true); ?> views</span>
                                            </div>

                                            <div class="flex justify-center items-center mr-5">
                                                <a href="<?php comments_link(); ?>">
                                                    <div class="flex justify-center items-center transition-colors hover:duration-700 hover:text-header-dark-overlay">
                                                        <span class="block"><?php echo get_comments_number(); ?></span>
                                                    </div>
                                                </a>
                                            </div>

                                            <div class="flex justify-center items-center self-end">
                                                <span><?php echo get_post_meta(get_the_ID(), 'like', true); ?> likes</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                    <?php endif; ?>
                            <?php $i++; ?>
                        <?php endwhile; endif; ?>

                    </div>
                </div>
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

            <?php
}
// If this is page index two, show only section 2
else {
 <div class="">
                <div class="bg-white px-5 py-8 text-light-white">
                    <div class="grid grid-cols-1 gap-10 text-center max-w-4xl mx-auto">

					<?php
						$paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1; // get the current page number
						$args = array(
							'post_type' => 'post',
							'paged' => $paged // set the current page number
						);
						$latest_posts = new WP_Query( $args );
						?>
						<?php if ( $latest_posts->have_posts() ) : ?>
						<?php while ( $latest_posts->have_posts() ) : $latest_posts->the_post(); ?>
                                <div class="flex flex-col gap-8 lg:flex-row justify-start text-left">
                                    <div class="w-full">
                                        <a href="<?php the_permalink(); ?>" class="block">
                                            <div class="w-full ">
                                                <?php
                                                if (has_post_thumbnail()) {
                                                    $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                                                ?>
                                                    <img class="object-cover w-full object-center " src="<?php echo esc_url($thumbnail_url); ?>" alt="<?php the_title_attribute(); ?>" />
                                                <?php
                                                }
                                                ?>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="text-deep-black w-full">
                                        <div class="border-b pb-5">
                                            <div class="flex gap-8 mb-5">
                                                <span><?php echo get_the_date(); ?></span>

                                                <p class=" text-xs font-semibold tracking-wide uppercase">
                                                    <?php
                                                        $categories = get_the_category();
                                                        if ( !empty( $categories ) ):
                                                        foreach($categories as $cat): 
                                                    ?>
                                                        <a href="<?php echo get_tag_link($cat->term_id);?>"><?php echo $cat->name;?></a>
                                                    <?php endforeach; endif;?>
                                                        <span class="">— <?php echo get_the_date('jS F, Y');?></span>
                                                </p>
                                            </div>

                                            <a href="<?php the_permalink(); ?>">
                                                <h3 class="text-xl md:text-2xl font-Antonio transition-colors hover:duration-700 hover:text-header-dark-overlay">
                                                    <?php the_title(); ?>
                                                </h3>
                                            </a>
                                        </div>

                                        <div class="flex w-full mt-5">
                                            <div class="flex justify-center items-center mr-5 transition-colors hover:duration-700 hover:text-header-dark-overlay">
                                                <span><?php echo get_post_meta(get_the_ID(), 'views', true); ?> views</span>
                                            </div>

                                            <div class="flex justify-center items-center mr-5">
                                                <a href="<?php comments_link(); ?>">
                                                    <div class="flex justify-center items-center transition-colors hover:duration-700 hover:text-header-dark-overlay">
                                                        <span class="block"><?php echo get_comments_number(); ?></span>
                                                    </div>
                                                </a>
                                            </div>

                                            <div class="flex justify-center items-center self-end">
                                                <span><?php echo get_post_meta(get_the_ID(), 'like', true); ?> likes</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        <?php endwhile; ?>
                    </div>
                </div>
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
    <?php
}
// Reset the post data
wp_reset_postdata();
?>
		</section>
	</main><!-- #main -->
<?php
get_footer("main");


