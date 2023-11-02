<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package themeduro
 */

 get_header("landingpage");


 /** ACF FIELDS*/

  /** Testimonial Postion*/
 
?>
<main id="main">

    <!-- SECTION ONE -  BANNER -->
    <section id="home" class="overflow-x-hidden max-w-6xl mx-auto">
        <div
            class="grid grid-cols-1 gap-8 lg:gap-10 md:grid-cols-2 md:place-content-center md:items-center py-14 lg:py-20 xl:py-28 px-6 lg:px-10">
            <!-- COLUMNS -->
            <!--  -->

            <?php if( have_rows('content-side-sec-one') ): ?>
            <?php while( have_rows('content-side-sec-one') ): the_row(); 
					// Get sub field values.
					$heading = get_sub_field('heading');
					$desc = get_sub_field('description');
				?>
            <div class=" flex flex-col justify-center items-center md:justify-start">
                <div class="max-w-md mx-auto">
                    <h3 class="font-bold pb-5 text-3xl  lg:text-4xl  text-black">
                        <?php echo $heading ?>
                    </h3>
                    <p class="pb-5 font-semibold ">
                        <?php echo $desc ?>
                    </p>

                    <div class="flex gap-5 self-start pb-5">
                        <a href="#">
                            <button
                                class="py-3 hover:border-header-dark-overlay duration-500 transition hover:bg-transparent px-8 border rounded-full border-transparent bg-header-dark-overlay text-xs sm:text-base block whitespace-nowrap font-medium">
                                Buy for $20
                            </button>
                        </a>
                        <a href="/contact">
                            <button
                                class="py-3 border-header-dark-overlay duration-500 transition bg-transparent px-8 border rounded-full text-xs sm:text-base whitespace-nowrap font-medium">
                                Learn More
                            </button>
                        </a>
                    </div>
                </div>


                <!-- Testimonials -->

                <?php 
							$args = array( 'post_type' => 'Reviews', 'posts_per_page' => 3 );
							$the_query = new WP_Query( $args ); 
							?>
                <?php if ( $the_query->have_posts() ) : ?>
                <div id="testimonial-carousel"
                    class="owl-carousel max-w-md mx-auto owl-theme  grid grid-cols-1 place-content-center place-items-center">

                    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                    <div class="item">
                        <div class="space-y-3 mt-10 bg-white/30  ">
                            <div class="border-l-4 border-header-dark-overlay px-5">
                                <p>
                                    <?php the_content(); ?>
                                </p>
                            </div>

                            <div
                                class="flex flex-col md:flex-row items-center md:justify-start justify-center  md:items-start">

                                <div class="relative w-[70px] h-[70px] mr-2">
                                    <?php if(has_post_thumbnail()):?>
                                    <img src="<?php the_post_thumbnail_url();?>" alt="<?php the_title();?>"
                                        class="absolute top-0 left-0 object-cover object-center rounded-full">
                                    <?php endif;?>
                                </div>

                                <p class="text-center md:text-left">
                                    <span class="block font-bold"><?php  the_title(); ?></span>

                                    <?php 
											$testmonial_pos = get_field('testimonial');
											if($testmonial_pos):
										?><span class="block"><?php echo $testmonial_pos;?></span>
                                    <?php endif; ?>
                                </p>
                            </div>
                        </div>
                    </div>

                    <?php endwhile;
				     wp_reset_postdata(); ?>

                </div>
                <?php else:  ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                <?php endif; ?>
            </div>

            <?php endwhile; ?>
            <?php endif; ?>


            <?php if( have_rows('image_side_sec_one') ): ?>
            <?php while( have_rows('image_side_sec_one') ): the_row(); 
					// Get sub field values.
					$image_side_sec_one = get_sub_field('image');
					$image_sec_1Pic = $image_side_sec_one['sizes']['large']
				
				?>


            <div class="flex flex-col justify-center items-center">
                <div className="">
                    <img src="<?php echo $image_sec_1Pic ?>" alt="" className="max-w-full  h-autp">

                </div>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </section>

    <!-- SECTION TWO - CONTENT -->
    <section id="about" class="px-6 lg:px-10 overflow-x-hidden bg-gray-100">
        <div class="text-center lg:max-w-6xl mx-auto max-w-lg py-14 lg:py-20 xl:py-28">
            <!-- Title -->


            <?php if( have_rows('content_side_sec_two') ): ?>
            <?php while( have_rows('content_side_sec_two') ): the_row(); 
					// Get sub field values.
					$title_sec_two = get_sub_field('title');
					$desc_sec_two = get_sub_field('description');
				?>
            <div class="max-w-4xl mx-auto">
                <h2 class="text-2xl font-bold  lg:text-3xl">

                    <?php echo $title_sec_two ?>
                </h2>
                <p class="py-2 md:text-lg ">
                    <?php echo $desc_sec_two ?>

                </p>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
            <!-- Columns -->

            <?php 
					$args = array( 'post_type' => 'Cards', 'posts_per_page' => 4 );
					$the_query = new WP_Query( $args ); 
					?>
            <?php if ( $the_query->have_posts() ) : ?>
            <div class="py-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-5xl mx-auto">
                <!-- Col -->
                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <div class="space-y-3 flex flex-col justify-center items-center">
               
                        <?php if(has_post_thumbnail()):?>
                        <img src="<?php the_post_thumbnail_url();?>" alt="<?php the_title();?>"
                            class="w-12 h-12">
                        <?php endif;?>
  

                    <h4 class="font-medium">
                        <?php  the_title(); ?>
                    </h4>
                    <p class="text-base">
                        <?php the_content(); ?>
                    </p>
                </div>

                <?php endwhile;
						wp_reset_postdata(); ?>

            </div>
            <?php else:  ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>
        </div>
    </section>

    <!-- SECTION THREE - CONTENT -->
    <section id="solution" class="px-6 lg:px-10">
        <div class="text-center lg:max-w-6xl mx-auto max-w-lg py-14 lg:py-20 xl:py-28">
            <!-- Content -->

            <?php if( have_rows('content_side_sec_three') ): ?>
            <?php while( have_rows('content_side_sec_three') ): the_row(); 
					// Get sub field values.
					$title_sec_three = get_sub_field('title');
					$desc_sec_three = get_sub_field('description');
				?>
            <div class="max-w-4xl mx-auto">
                <h2 class="text-2xl font-bold  lg:text-3xl">
                    <?php echo $title_sec_three ?>
                </h2>
                <p class="py-2 md:text-lg ">
                    <?php echo $desc_sec_three ?>

                </p>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
            <!-- Columns -->
            <div class="py-8 max-w-5xl mx-auto flex justify-center items-center">


                <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">

                    <?php if( have_rows('image_side_sec_three') ): ?>
                    <?php while( have_rows('image_side_sec_three') ): the_row(); 
							$image_sec_three = get_sub_field('image');
							$image_sec_3Pic = $image_sec_three['sizes']['large']

						?>
                    <!-- Image -->
                    <div class="mb-10 lg:mb-0">
                        <img src="<?php echo $image_sec_3Pic ?>" alt="" className="max-w-full xl:h-[20vh] mx-auto ">
                    </div>

                    <?php endwhile; ?>
                    <?php endif; ?>
                    <!-- Content -->
                    <div class="flex flex-col gap-6 items-center justify-center lg:justify-start lg:items-start ">

                        <?php 
					$args = array( 'post_type' => 'Books', 'posts_per_page' => 6 );
					$the_query = new WP_Query( $args ); 
					?>
                        <?php if ( $the_query->have_posts() ) : ?>
                        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                        <div class="flex items-center gap-3">

                            <span class="text-white bg-header-dark-overlay rounded-full p-1">
                                <?php if(has_post_thumbnail()):?>
                                <img src="<?php the_post_thumbnail_url();?>" alt="<?php the_title();?>"
                                    class="w-4  h-4">
                                <?php endif;?>
                            </span>
                            <span class="font-medium text-left ">
                                <?php  the_title(); ?>

                            </span>


                        </div>

                        <?php endwhile;
						wp_reset_postdata(); ?>
                        <?php else:  ?>
                        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                        <?php endif; ?>

                        <div>
                            <a href="#">
                                <button
                                    class="py-3 hover:border-header-dark-overlay duration-500 transition hover:bg-transparent px-8 border rounded-full border-transparent bg-header-dark-overlay text-xs sm:text-base block whitespace-nowrap font-medium">
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
        <?php if( have_rows('content_side_sec_four') ): ?>
            <?php while( have_rows('content_side_sec_four') ): the_row(); 
					// Get sub field values.
					$title_sec_four = get_sub_field('title');
					$desc_sec_four = get_sub_field('description');
				?>
            <div class="max-w-4xl mx-auto">
                <h2 class="text-2xl font-bold  lg:text-2xl ">
                    <?php echo $title_sec_three ?>
                </h2>
                <p class="py-2 md:text-lg">
                       <?php echo $desc_sec_four ?>
                </p>
            </div>
             <?php endwhile; ?>
            <?php endif; ?>
            <!-- Columns -->
            <div class="py-8 max-w-5xl flex justify-center items-center">
                <div class="space-y-5 w-full max-w-md mx-auto flex flex-col justify-center items-center">
                    <!-- Cols -->
                    <?php 
					$args = array( 'post_type' => 'Audiences', 'posts_per_page' => 5 );
					$the_query = new WP_Query( $args ); 
					?>
                    <div class=" space-y-5 lg:max-w-md mx-auto">

                        <?php if ( $the_query->have_posts() ) : ?>
                        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                        <div class="flex items-start  gap-3 justify-center">

                            <div class="self-center">
                                <?php if(has_post_thumbnail()):?>
                                <img src="<?php the_post_thumbnail_url();?>" alt="<?php the_title();?>" class="w-8 h-8 " >
                               
                                <?php endif;?>
                            </div>

                            <div class="text-left ">
                                <h5 class="text-lg xl:text-xl font-bold ">
                                    <?php  the_title(); ?>
                                </h5>
                                <span class="font-medium block text-base lg:text-lg">
                                    <?php the_content(); ?>
                                </span>
                            </div>
                        </div>


                        <?php endwhile;
						wp_reset_postdata(); ?>
                        <?php else:  ?>
                        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                        <?php endif; ?>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- SECTION FIVE - CONTENT -->
    <section id="solution" class="px-6 lg:px-10">
        <div class="text-center lg:max-w-6xl mx-auto max-w-lg xl:pb-10 py-14 lg:py-20 xl:py-28">
            <div class="bg-gray-200 p-10 max-w-4xl mx-auto">

             <?php if( have_rows('content_side_sec_five') ): ?>
            <?php while( have_rows('content_side_sec_five') ): the_row(); 
					// Get sub field values.
					$title_sec_five = get_sub_field('title');
					$desc_sec_five = get_sub_field('description');
					$newsletter_sec_five = get_sub_field('newsletter');
				?>
                <!-- Content -->
                <h2 class="text-2xl font-bold  lg:text-3xl">
                      <?php echo $title_sec_five ?>
                </h2>
                <p class="py-2 md:text-lg max-w-xl mx-auto ">
                     <?php echo $desc_sec_five ?>
                </p>

                <!-- Form  -->
                <div>
                     <?php echo $newsletter_sec_five?>
                </div>
                <!-- <form action="" class="">
                    <div class="flex md:max-w-xl mx-auto flex-col md:flex-row justify-center items-center gap-3">
                        <label for="email" class="w-full md:flex-[50%]">
                            <input title="Email" type="text" placeholder="Your Email"
                                class="border-1 w-full outline-none focus:shadow-md focus:border-header-dark-overlay transition duration-500 p-2.5 rounded-md" />
                        </label>
                        <a href="#">
                            <button
                                class="py-2.5 text-lg hover:border-header-dark-overlay duration-500 transition px-8 border rounded-md border-transparent bg-header-dark-overlay sm:text-base block whitespace-nowrap font-medium">
                                Send
                            </button>
                        </a>
                    </div>
                </form> -->

            <?php endwhile; ?>
            <?php endif; ?>
            </div>
        </div>
    </section>

    <!-- SECTION SIX	 - CONTENT -->
    <section id="solution" class="px-6 lg:px-10 bg-gray-100">
        <div class="text-center lg:max-w-6xl mx-auto py-14 lg:py-20 xl:py-28">
            <!-- Content -->
         <?php if( have_rows('content_side_sec_six') ): ?>
            <?php while( have_rows('content_side_sec_six') ): the_row(); 
					// Get sub field values.
					$title_sec_six= get_sub_field('title');
					$desc_sec_six= get_sub_field('description');
					
				?>
            <div class="mx-auto pb-10 max-w-lg">
                <h2 class="text-2xl font-bold  lg:text-3xl">
                     <?php echo $title_sec_six ?>

                </h2>
                <p class="py-2 md:text-lg ">
                     <?php echo $desc_sec_six ?>

                </p>
            </div>

             <?php endwhile; ?>
            <?php endif; ?>
            <div class="py-8 w-full flex justify-center items-center">
                <div class="lg:max-w-6xl grid grid-cols-1 space-y-8 gap-10">
                    <!-- cols - 1  -->
                    <?php 
								$args = array( 'post_type' => 'Reviews', 'posts_per_page' => 3 );
								$the_query = new WP_Query( $args ); 
								?>
                    <?php if ( $the_query->have_posts() ) : ?>
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">

                        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                        <div
                            class="flex flex-col relative items-center xl:items-start justify-center p-3 space-y-5   bg-gray-200">
                            <div
                                class="absolute self-center top-[-35px] flex justify-center items-center p-2.5 rounded-full bg-header-dark-overlay text-white">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon-tabler icon-tabler-quote text-white" width="44" height="44"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path
                                        d="M10 11h-4a1 1 0 0 1 -1 -1v-3a1 1 0 0 1 1 -1h3a1 1 0 0 1 1 1v6c0 2.667 -1.333 4.333 -4 5">
                                    </path>
                                    <path
                                        d="M19 11h-4a1 1 0 0 1 -1 -1v-3a1 1 0 0 1 1 -1h3a1 1 0 0 1 1 1v6c0 2.667 -1.333 4.333 -4 5">
                                    </path>
                                </svg>
                            </div>
                            <blockquote class="text-center xl:text-left italic text-base">
                                <?php the_content(); ?>
                            </blockquote>
                            <div class="flex flex-col lg:flex-row  ">
                                <div class="relative w-[70px] h-[70px] mr-2 ">
                                    <?php if(has_post_thumbnail()):?>
                                    <img src="<?php the_post_thumbnail_url();?>" alt="<?php the_title();?>"
                                        class="max-w-full absolute top-0 left-0 object-cover object-center rounded-full">
                                    <?php endif;?>
                                </div>

                                <p class="text-center md:text-left pt-3">
                                    <span class="block text-sm font-bold"><?php  the_title(); ?></span>
                                    <?php 
																	$review_pos = get_field('reviews_label');
																	if($review_pos):
																?><span class="block text-sm"><?php echo $review_pos;?></span>
                                    <?php endif; ?>
                                </p>
                            </div>
                        </div>

                        <?php endwhile;
										wp_reset_postdata(); ?>

                    </div>
                    <?php else:  ?>
                    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                    <?php endif; ?>

                    <a href="#" class="flex   place-self-center justify-center items-center ">
                        <button
                            class="py-3 sm:text-base lg:text-lg hover:border-header-dark-overlay duration-500 transition hover:bg-transparent px-8 border rounded-full border-transparent bg-header-dark-overlay text-xs block whitespace-nowrap font-medium">
                            Get your own today
                        </button>
                    </a>

                </div>
            </div>
    </section>

    <!-- SECTION SEVEN	 - CONTENT -->
    <section class="px-6 lg:px-10  text-black ">
        <div class="text-center md:max-w-4xl mx-auto py-14 lg:py-20 xl:py-28">

             <?php if( have_rows('content_side_sec_seven') ): ?>
            <?php while( have_rows('content_side_sec_seven') ): the_row(); 
					// Get sub field values.
					$title_sec_seven = get_sub_field('title');
					$desc_sec_seven  = get_sub_field('description');
					$links_sec_seven  = get_sub_field('links');
                    $image_sec_seven = get_sub_field('image');
                    $image_sec_7Pic = $image_sec_seven['sizes']['large']


				?>
            <div class="py-8 w-full flex flex-col justify-center items-center">
                <div>
                    <img src="<?php echo $image_sec_7Pic ?>" alt="<?php echo $title_sec_seven ?>" className="max-w-full w-24 h-24 rounded-full mb-2 md:mr-2">
                 
                </div>

                <div class="space-y-3 py-5">
                    <h3 class="text-lg lg:text-3xl font-bold font-Sohne-Bold">
                         <?php echo $title_sec_seven ?>
                    </h3>
                    <p class="text-base lg:text-lg">
                           <?php echo $desc_sec_seven ?>
                    </p>

                    <div class="py-2.5 flex flex-row gap-6 justify-center items-center">
                         <a href="#"
                            class="bg-header-dark-overlay text-white transition duration-300 hover:bg-header-dark-overlay/70 p-3  rounded-full ">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-facebook"
                                width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3">
                                </path>
                            </svg>
                        </a>
                        <a href="#"
                            class="bg-header-dark-overlay text-white transition duration-300 hover:bg-header-dark-overlay/70 p-3  rounded-full ">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-facebook"
                                width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3">
                                </path>
                            </svg>
                        </a>
                        <a href="#"
                            class="bg-header-dark-overlay text-white transition duration-300 hover:bg-header-dark-overlay/70 p-3  rounded-full ">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-facebook"
                                width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3">
                                </path>
                            </svg>
                        </a>

                    </div>
                </div>
            </div>

            <?php endwhile; ?>
            <?php endif; ?>

        </div>
    </section>


</main><!-- #main -->
<!-- #primary -->





<?php
get_footer();