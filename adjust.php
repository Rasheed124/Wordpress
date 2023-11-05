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
















            <!-- SECTION ONE -  BANNER -->
    <section id="home" class="overflow-x-hidden max-w-6xl mx-auto">
       <?php if( have_rows('section_one') ): ?>
        <?php while( have_rows('section_one') ): the_row(); 

        ?>
        <div
            class="grid grid-cols-1 gap-8 lg:gap-10 md:grid-cols-2 md:place-content-center md:items-center py-14 lg:py-20 xl:py-28 px-6 lg:px-10">
            <!-- COLUMNS -->
            <!--  -->
            <?php if( have_rows('content_section_one') ): ?>
            <?php while( have_rows('content_section_one') ): the_row(); 
					// Get sub field values.
					$heading_sec_one = get_sub_field('heading');
					$paragraph_sec_one = get_sub_field('paragraph');
					$button_paid_sec_one = get_sub_field('button-paid');
					$button_course_sec_one = get_sub_field('button-course');
					$testimonial_sec_one = get_sub_field('testimonial');
				?>
            <div class=" flex flex-col justify-center items-center md:justify-start">
                <div class="max-w-md mx-auto">
                    <h3 class="font-bold pb-5 text-3xl  lg:text-4xl  text-black">
                        <?php echo $heading_sec_one ?>
                    </h3>
                    <p class="pb-5 font-semibold ">
                        <?php echo $paragraph_sec_one ?>
                    </p>

                    <div class="flex gap-5 self-start py-5">
                        <a href="<?php echo esc_url( $button_paid_sec_one['url'] ); ?>">
                            <button
                                class="py-3 hover:border-header-dark-overlay duration-500 transition hover:bg-transparent px-8 border rounded-full border-transparent bg-header-dark-overlay text-xs sm:text-base block whitespace-nowrap font-medium">
                                <?php echo esc_html( $button_paid_sec_one['title'] ); ?>
                            </button>
                        </a>
                        <a href="<?php echo esc_url( $button_course_sec_one['url'] ); ?>">
                            <button
                                class="py-3 border-header-dark-overlay duration-500 transition bg-transparent px-8 border rounded-full text-xs sm:text-base whitespace-nowrap font-medium">
                                 <?php echo esc_html( $button_course_sec_one['title'] ); ?>

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


            <?php if( have_rows('image_section_one') ): ?>
            <?php while( have_rows('image_section_one') ): the_row(); 
					// Get sub field values.
                    $image_side_text_sec_one = get_sub_field('image_text');
					$image_side_sec_one = get_sub_field('image');
					$image_sec_1Pic = $image_side_sec_one['sizes']['large']
					

				
				?>


            <div class="flex flex-col justify-center items-center">
                <div className="relative">
                    <img src="<?php echo $image_sec_1Pic ?>" alt="" className="max-w-full  h-auto">
                    <div class="p-5 w-10 h-10 absolute -top-10 text-2xl text-white bg-header-dark-overlay left-0 border border-red-600 ">
                         <?php echo $image_side_text_sec_one ?>
                    </div>
                </div>
            </div>

            <?php endwhile; ?>
            <?php endif; ?>
        </div>
               <?php endwhile; ?>
            <?php endif; ?>
    </section>
    

        <!-- SECTION TWO - CONTENT -->
    <section id="about" class="px-6 lg:px-10 overflow-x-hidden bg-gray-100">

        <?php if( have_rows('section_two') ): ?>
        <?php while( have_rows('section_two') ): the_row(); 
            ?>
            <div class="text-center lg:max-w-6xl mx-auto max-w-lg py-14 lg:py-20 xl:py-28">
                <!-- Title -->
                <?php if( have_rows('content_section_two') ): ?>
                <?php while( have_rows('content_section_two') ): the_row(); 
                        // Get sub field values.
                        $heading_sec_two = get_sub_field('heading');
                        $paragraph_sec_two = get_sub_field('paragraph');
                       
                    ?>
                <div class="max-w-4xl mx-auto">
                    <h2 class="text-2xl font-bold  lg:text-3xl">

                        <?php echo $heading_sec_two ?>
                    </h2>
                    <p class="py-2 md:text-lg ">
                        <?php echo $paragraph_sec_two ?>

                    </p>
                </div>
            
                <!-- Columns -->

                <div class="py-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-5xl mx-auto">
                    <!-- Col -->
                    <?php if( have_rows('card') ): ?>


                    <?php while( have_rows('card') ): the_row(); 

                    	$image_card_sec_two = get_sub_field('image');
					    $image_card_2Pic = $image_card_sec_two['sizes']['large']
                    ?>
                        <div class="space-y-3 flex flex-col justify-center items-center">
                    
                
                                <img src="<?php echo $image_card_2Pic ?>" alt="<?php echo $image_card_sec_two['alt'] ?>"
                                    class="w-12 h-12">
                        
        

                            <h4 class="font-medium">
                              <?php the_sub_field("title") ?>
                            </h4>
                            <p class="text-base">
                              <?php the_sub_field("description") ?>
                             
                            </p>
                        </div>

                   <?php endwhile; ?>
                <?php endif; ?>
                </div>

                <?php endwhile; ?>
                <?php endif; ?>
            
            </div>
             <?php endwhile; ?>
            <?php endif; ?>
    </section>


        <!-- SECTION THREE - CONTENT -->
    <section id="solution" class="px-6 lg:px-10">

        
            <?php if( have_rows('section_three') ): ?>
            <?php while( have_rows('section_three') ): the_row(); 

            	$heading_section_three = get_sub_field('heading_section_three');
				

            ?>
        <div class="text-center lg:max-w-6xl mx-auto max-w-lg py-14 lg:py-20 xl:py-28">
            <!-- Content -->
            <div class="max-w-4xl mx-auto">
                <h2 class="text-2xl font-bold  lg:text-3xl">
                    <?php echo $heading_section_three ?>
                </h2>
              
           
            </div>

               <?php if( have_rows('content_section_three') ): ?>

         
            <!-- Columns -->
            <div class="py-8 max-w-5xl mx-auto flex justify-center items-center">

                <?php while( have_rows('content_section_three') ): the_row(); 

                    $image_section_three = get_sub_field('image');
                    $button_section_three = get_sub_field('button');
					$image_sec_3Pic = $image_section_three['sizes']['large']

                ?>
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
				
                    <!-- Image -->
                    <div class="mb-10 lg:mb-0">
                        <img src="<?php echo $image_sec_3Pic ?>" alt="<?php echo $image_section_three['alt'] ?>" className="max-w-full h-auto">
                    </div>

              
                    <!-- Content -->
                    <div class="flex flex-col gap-6 items-center justify-center lg:justify-start lg:items-start ">

                  <?php if( have_rows('items') ): ?>

                        <?php while( have_rows('items') ): the_row(); 

                            $items_image_section_three = get_sub_field('image');
                            $items_image_sec_3Pic = $items_image_section_three['sizes']['large']
                     


                        ?>
                        <div class="flex items-center gap-3">

                            <span class="text-white bg-header-dark-overlay rounded-full p-1">
                         
                                <img src="<?php echo $items_image_sec_3Pic ?>" alt="<?php echo $items_image_section_three['alt'] ?>"
                                    class="w-4  h-4">
                               
                            </span>
                            <span class="font-medium text-left ">
                              <?php the_sub_field("title") ?>
                                
                            </span>


                        </div>

                  <?php endwhile; ?>
                 <?php endif; ?>
                        <div>
                            <a href="<?php echo esc_url( $button_section_three['url'] ); ?>">
                                <button
                                    class="py-3 hover:border-header-dark-overlay duration-500 transition hover:bg-transparent px-8 border rounded-full border-transparent bg-header-dark-overlay text-xs sm:text-base block whitespace-nowrap font-medium">
                                     <?php echo esc_html( $button_section_three['title'] ); ?>
                                </button>
                            </a>
                        </div>
                    </div>

                </div>



                   <?php endwhile; ?>


            </div>

            <?php endif; ?>
        </div>

             <?php endwhile; ?>
            <?php endif; ?>
    </section>


        <!-- SECTION FOUR - CONTENT -->
    <section id="reviews" class="px-6 lg:px-10 bg-gray-100">
             <?php if( have_rows('section_four') ): ?>
            <?php while( have_rows('section_four') ): the_row(); 

            	$heading_section_four = get_sub_field('heading_section_four');
            	$paragraph_section_four = get_sub_field('paragraph_section_four');
				

            ?>
        <div class="text-center lg:max-w-6xl mx-auto max-w-lg py-14 lg:py-20 xl:py-28">
            <!-- Content -->
                 
            <div class="max-w-4xl mx-auto">
                <h2 class="text-2xl font-bold  lg:text-2xl ">
                    <?php echo $heading_section_four ?>
                   
                </h2>
                <p class="py-2 md:text-lg">
                    <?php echo $paragraph_section_four ?>
                       
                </p>
            </div>
               <?php if( have_rows('content_section_four') ): ?>
             
            <!-- Columns -->
            <div class="py-8 max-w-5xl flex justify-center items-center">
                <?php while( have_rows('content_section_four') ): the_row(); 

                ?>
                <div class="space-y-5 w-full max-w-md mx-auto flex flex-col justify-center items-center">
                    <!-- Cols -->
                    <?php if( have_rows('items') ): ?>

                        <?php while( have_rows('items') ): the_row(); 
                            $items_image_section_four = get_sub_field('image');
                            $items_image_sec_4Pic = $items_image_section_four['sizes']['large']
                     

                            ?>
                    <div class=" space-y-5 lg:max-w-md mx-auto">

                       
                        <div class="flex items-start  gap-3 justify-center">

                            <div class="self-center">
                               

                                 <img src="<?php echo $items_image_sec_4Pic ?>" alt="<?php echo $items_image_section_four['alt'] ?>"
                                    class="w-8 h-8">
                              
                            </div>

                            <div class="text-left ">
                                <h5 class="text-lg xl:text-xl font-bold ">
                                    <?php the_sub_field("title") ?>
                                </h5>
                                <span class="font-medium block text-base lg:text-lg">
                                    <?php the_sub_field("description") ?>
                                </span>
                            </div>
                        </div>


            
                    </div>

                    <?php endwhile; ?>
                   <?php endif; ?>


                </div>
                 <?php endwhile; ?>

            </div>

            <?php endif; ?>

        </div>
            <?php endwhile; ?>
            <?php endif; ?>
    </section>


        <!-- SECTION FIVE - CONTENT -->
    <section id="solution" class="px-6 lg:px-10">
           <?php if( have_rows('section_five') ): ?>
            <?php while( have_rows('section_five') ): the_row(); 
                    
            	$heading_section_five = get_sub_field('heading_section_five');
            	$paragraph_section_five = get_sub_field('paragraph_section_five');
            	$newsletter_section_five = get_sub_field('newsletter_section_five');

            ?>
        <div class="text-center lg:max-w-6xl mx-auto max-w-lg xl:pb-10 py-14 lg:py-20 xl:py-28">
            <div class="bg-gray-200 p-10 max-w-4xl mx-auto">


                <!-- Content -->
                <h2 class="text-2xl font-bold  lg:text-3xl">
                      <?php echo $heading_section_five ?>
                </h2>
                <p class="py-2 md:text-lg max-w-xl mx-auto ">
                     <?php echo $paragraph_section_five ?>
                </p>

                <!-- Form  -->
                <div>
                     <?php echo $newsletter_section_five?>
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

        
            </div>
        </div>

            <?php endwhile; ?>
            <?php endif; ?>
    </section>

