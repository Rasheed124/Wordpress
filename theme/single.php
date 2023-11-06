
<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package themeduro
 */

 get_header("landingpage");
 
?>
<main id="main">

            <!-- SECTION ONE -  BANNER -->
    <section class="overflow-x-hidden max-w-6xl mx-auto">
       <?php if( have_rows('section_one') ): ?>
        <?php while( have_rows('section_one') ): the_row(); 

					$id_sec_one = get_sub_field('id_section_one');


        ?>
        <div id="<?php echo $id_sec_one ?>"
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
					$testimonials = get_sub_field('testimonial');
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

                <div id="testimonial-carousel"
                    class="owl-carousel max-w-md mx-auto owl-theme  grid grid-cols-1 place-content-center place-items-center">

                    <?php foreach( $testimonials as $testimonial ): 
                        $title = get_the_title( $testimonial->ID );
                            $role_field = get_field( 'reviews_role', $testimonial->ID );
                        ?>
                        
                    <div class="item">
                        <div class="space-y-3 mt-10 bg-white/30  ">
                            <div class="border-l-4 border-header-dark-overlay px-5">
                                   <blockquote class="text-center xl:text-left italic text-base">
                                  <?php echo $testimonial->post_content ;?>
                                </blockquote>
                            </div>

                            <div
                                class="flex flex-col md:flex-row items-center md:justify-start justify-center  md:items-start">

                                           <div class="relative w-[70px] h-[70px] mr-2 ">
                                          
                                            <img src="<?php echo get_the_post_thumbnail_url($testimonial->ID, 'thumbnail') ;?>" alt="<?php echo $title_sec_one ;?>"
                                          
                                            class="max-w-full absolute top-0 left-0 object-cover object-center rounded-full">
                                        </div>


                                <p class="text-center md:text-left">
                                        <span class="block text-sm font-semibold"><?php echo $title ;?></span>
                                           <span class="block text-sm">
                                           
												<?php echo esc_html( $role_field ); ?>
                             
                                        </span>
                                </p>
                            </div>
                        </div>
                    </div>

                  <?php endforeach; ?>
                </div>
             
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
    <section class="px-6 lg:px-10 overflow-x-hidden bg-gray-100">

        <?php if( have_rows('section_two') ): ?>
        <?php while( have_rows('section_two') ): the_row(); 

					$id_sec_two = get_sub_field('id_section_two');

            ?>
            <div id="<?php echo $id_sec_two ?>"  class="text-center lg:max-w-6xl mx-auto max-w-lg py-14 lg:py-20 xl:py-28">
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
    <section class="px-6 lg:px-10">

        
            <?php if( have_rows('section_three') ): ?>
            <?php while( have_rows('section_three') ): the_row(); 

            	$heading_section_three = get_sub_field('heading_section_three');
            	$content_section_three = get_sub_field('content_section_three');
				$id_sec_three = get_sub_field('id_section_three');

				

            ?>
        <div id="<?php echo $id_sec_three ?>"  class="text-center lg:max-w-6xl mx-auto max-w-lg py-14 lg:py-20 xl:py-28">
            <!-- Content -->
            <div class="max-w-4xl mx-auto">
                <h2 class="text-2xl font-bold  lg:text-3xl">
                    <?php echo $heading_section_three ?>
                </h2>
              
           
            </div>

                <div class="py-8 max-w-5xl mx-auto flex justify-center items-center">


                <?php if( have_rows('content_section_three') ): ?>
                <?php while( have_rows('content_section_three') ): the_row(); 
                        // Get sub field values.
                        $image_sec_three = get_sub_field('image');
                        $button_sec_three = get_sub_field('button');
                        $image_items_3Pic = $image_sec_three['sizes']['large']
                       
                    ?>
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">

              
                    <!-- Image -->
                    <div class="mb-10 lg:mb-0">
                        <img src="<?php echo $image_items_3Pic ?>" alt="<?php echo $image_sec_three['alt'] ?>"
                        class="max-w-full xl:h-[60vh] h-min w-min">
                    </div>

               
                    <!-- Content -->
                    <div class="flex flex-col gap-6 items-center justify-center lg:justify-start lg:items-start ">

                       
              
                    <?php if( have_rows('items') ): ?>


                    <?php while( have_rows('items') ): the_row(); 

                    
                    ?>
                      <div class="flex items-center gap-3">

                            <span class="text-white text-base bg-header-dark-overlay rounded-full p-1">
                                  <?php the_sub_field("icon") ?>
                            </span>
                            <span class="font-medium text-left ">
                              <?php the_sub_field("title") ?>
                            </span>


                     </div>

                          <?php endwhile; ?>
                <?php endif; ?>

                        <div>
                            <a href="<?php echo esc_url( $button_sec_three['url'] ); ?>">
                                <button
                                    class="py-3 hover:border-header-dark-overlay duration-500 transition hover:bg-transparent px-8 border rounded-full border-transparent bg-header-dark-overlay text-xs sm:text-base block whitespace-nowrap font-medium">
                                    <?php echo esc_html( $button_sec_three['title'] ); ?>
                                </button>
                            </a>
                        </div>
                    </div>

                </div>
              <?php endwhile; ?>
            <?php endif; ?>


            </div>

         </div>
             <?php endwhile; ?>
            <?php endif; ?>
    </section>


        <!-- SECTION FOUR - CONTENT -->
    <section class="px-6 lg:px-10 bg-gray-100">
             <?php if( have_rows('section_four') ): ?>
            <?php while( have_rows('section_four') ): the_row(); 

            	$heading_section_four = get_sub_field('heading_section_four');
            	$paragraph_section_four = get_sub_field('paragraph_section_four');
				$id_sec_four = get_sub_field('id_section_four');
				

            ?>
        <div id="<?php echo $id_sec_four ?>"  class="text-center lg:max-w-6xl mx-auto max-w-lg py-14 lg:py-20 xl:py-28">
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
            <div class="py-8 flex justify-center items-center">
                <?php while( have_rows('content_section_four') ): the_row(); 

                ?>
                <div class="space-y-5 max-w-lg mx-auto  w-full flex flex-col justify-center items-center">
                    <!-- Cols -->
                    <?php if( have_rows('items') ): ?>

                        <?php while( have_rows('items') ): the_row(); 
                         
                            ?>
                    <div class=" space-y-5 ">

                       
                        <div class="flex items-start  gap-3 justify-center">

                         
                          <span class="text-2xl text-header-dark-overlay ">
                                    <?php the_sub_field("icon") ?>
                             
                          </span>


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
    <section class="px-6 lg:px-10">
           <?php if( have_rows('section_five') ): ?>
            <?php while( have_rows('section_five') ): the_row(); 
                    
            	$heading_section_five = get_sub_field('heading_section_five');
            	$paragraph_section_five = get_sub_field('paragraph_section_five');
            	$newsletter_section_five = get_sub_field('newsletter_section_five');
				$id_sec_five = get_sub_field('id_section_five');


            ?>
        <div id="<?php echo $id_sec_five ?>"  class="text-center lg:max-w-6xl mx-auto max-w-lg xl:pb-10 py-14 lg:py-20 xl:py-28">
            <div class="bg-gray-200 p-10 max-w-4xl mx-auto">


                <!-- Content -->
                <h2 class="text-2xl font-bold  lg:text-3xl">
                      <?php echo $heading_section_five ?>
                </h2>

                <div class="py-2 md:text-lg max-w-lg xl:max-w-2xl  py-2 mx-auto ">

                        <p>
                            <?php echo $paragraph_section_five ?>

                        </p>
                 </div>

                <!-- Form  -->
                <div class="py-4">
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


    
    <!-- SECTION SIX	 - CONTENT -->
    <section class="px-6 lg:px-10 bg-gray-100">
                    <!-- Content -->
         <?php if( have_rows('section_six') ): ?>
            <?php while( have_rows('section_six') ): the_row(); 
					// Get sub field values.
					$heading_section_six= get_sub_field('heading_section_six');
					$paragraph_sec_six= get_sub_field('paragraph_section_six');
					$button_sec_six= get_sub_field('button_section_six');
					$testimonials= get_sub_field('testimonial_section_six');
				    $id_sec_six = get_sub_field('id_section_six');
					
				?>
             <div id="<?php echo $id_sec_six ?>"  class="text-center lg:max-w-6xl mx-auto py-14 lg:py-20 xl:py-28">

                    <div class="mx-auto pb-10 max-w-lg">
                        <h2 class="text-2xl font-bold  lg:text-3xl">
                            <?php echo $heading_section_six ?>

                        </h2>
                        <p class="py-2 md:text-lg ">
                            <?php echo $paragraph_sec_six ?>

                        </p>
                    </div>

      
                    <div class="py-8 w-full flex justify-center items-center">
                        <div class="lg:max-w-6xl grid grid-cols-1 space-y-8 gap-10">
                            <!-- cols - 1  -->
                        
                            <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">
                                 <?php foreach( $testimonials as $testimonial ): 
                                        $title = get_the_title( $testimonial->ID );
                                       
                                         $role_field = get_field( 'reviews_role', $testimonial->ID );
                                        ?>
                                 
                                
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
                                        <?php echo $testimonial->post_content ;?>
                                    </blockquote>
                                    <div class="flex flex-col items-center lg:flex-row  ">
                                        <div class="relative  w-[70px] h-[70px] mr-2 ">
                                          
                                            <img src="<?php echo get_the_post_thumbnail_url($testimonial->ID, 'thumbnail') ;?>" alt="<?php echo $title ;?>"
                                          
                                            class="max-w-full absolute top-0 left-0 object-cover object-center rounded-full">
                                        </div>

                                        <p class="text-center lg:text-left pt-3">
                                            <span class="block text-sm font-semibold"><?php echo $title ;?></span>
                                           <span class="block text-sm">
                                           
												<?php echo esc_html( $role_field ); ?>
                             
                                        </span>
                                        
                                        </p>
                                    </div>
                                </div>

                               <?php endforeach; ?>
                            </div>

                            <a href="<?php echo esc_url( $button_sec_six['url'] ); ?>" class="flex   place-self-center justify-center items-center ">
                                <button
                                    class="py-3 sm:text-base  hover:border-header-dark-overlay duration-500 transition hover:bg-transparent px-8 border rounded-full border-transparent bg-header-dark-overlay text-xs block whitespace-nowrap font-medium">
                                        <?php echo esc_html( $button_sec_six['title'] ); ?>
                                </button>
                            </a>
                        </div>
                    </div>


              </div>
             <?php endwhile; ?>
            <?php endif; ?>
    </section>



        <!-- SECTION SEVEN	 - CONTENT -->
    <section class="px-6 lg:px-10  text-black  ">

             <?php if( have_rows('section_seven') ): ?>
            <?php while( have_rows('section_seven') ): the_row(); 
					// Get sub field values.
				    $id_sec_seven = get_sub_field('id_section_seven');

					$heading_sec_seven = get_sub_field('heading_section_seven');
				
                    $image_sec_seven = get_sub_field('image_section_seven');
                    $image_sec_7Pic = $image_sec_seven['sizes']['large']


				?>
             <div id="<?php echo $id_sec_seven ?>" class="text-center md:max-w-4xl mx-auto py-14 lg:py-20 xl:py-28">
                <div class="py-8 w-full flex flex-col justify-center items-center">
                    <div>
                        <img src="<?php echo $image_sec_7Pic ?>" alt="<?php echo $image_sec_seven['alt'] ?>" className="max-w-full w-24 h-24 rounded-full mb-2 md:mr-2">
                    
                    </div>

                    <div class="space-y-3 py-5">
                        <h3 class="text-lg lg:text-3xl font-bold font-Sohne-Bold">
                            <?php echo $heading_sec_seven ?>
                        </h3>
                        <?php if( have_rows('paragraph_section_seven') ): ?>
                        <?php while( have_rows('paragraph_section_seven') ): the_row(); 
                            // Get sub field values.
                            $paragraph_sec_seven = get_sub_field('paragraph');

		      	    	?>

                       <p class="py-2 md:text-lg ">
                            <?php echo $paragraph_sec_seven ?>
                        </p>

                    <?php endwhile; ?>
                    <?php endif; ?>

                        <?php if( have_rows('links_section_seven') ): ?>
                        <?php while( have_rows('links_section_seven') ): the_row(); 
                            // Get sub field values.
                            $link_title_sec_seven = get_sub_field('title');
                            ?>

                      <div class="py-2.5 ">
                             <h5 class="mb-5 font-bold text-lg">
                                <?php echo $link_title_sec_seven ?>
                             </h5>

                            <div class="flex gap-5 justify-center items-center">
                               <?php if( have_rows('social_link') ): ?>
                                    <?php while( have_rows('social_link') ): the_row(); 
                                        $links_sec_seven = get_sub_field('link');

                                       $arrayItem = [$links_sec_seven]; 

                                        foreach ($arrayItem as $item) {
                                            if (strpos($item["url"], "facebook") !== false) {
                                                // Display content for Facebook with anchor tag and classes
                                              
                                                echo '<a href="' . $item["url"] . '" class="inline-flex bg-header-dark-overlay text-white transition duration-300 hover:bg-header-dark-overlay/70 p-3 rounded-full">';
                                                echo '<i class="fa-brands fa-facebook-f"></i></a>';
                                             
                                            } elseif (strpos($item["url"], "twitter") !== false) {
                                                // Display content for Twitter with anchor tag and classes
                                              
                                                echo '<a href="' . $item["url"] . '" class="inline-flex bg-header-dark-overlay text-white transition duration-300 hover:bg-header-dark-overlay/70 p-3 rounded-full">';
                                                echo '<i class="fa-brands fa-twitter"></i></a>';
                                             
                                            } elseif (strpos($item["url"], "youtube") !== false) {
                                                // Display content for YouTube with anchor tag and classes
                                              
                                                echo '<a href="' . $item["url"] . '" class="inline-flex bg-header-dark-overlay text-white transition duration-300 hover-bg-header-dark-overlay/70 p-3 rounded-full">';
                                                echo '<i class="fa-brands fa-youtube"></i></a>';
                                             
                                            } elseif (strpos($item["url"], "instagram") !== false) {
                                                // Display content for Instagram with anchor tag and classes
                                              
                                                echo '<a href="' . $item["url"] . '" class="inline-flex bg-header-dark-overlay text-white transition duration-300 hover-bg-header-dark-overlay/70 p-3 rounded-full">';
                                                echo '<i class="fa-brands fa-instagram"></i></a>';
                                             
                                            } elseif (strpos($item["url"], "linkedin") !== false) {
                                                // Display content for LinkedIn with anchor tag and classes
                                              
                                                echo '<a href="' . $item["url"] . '" class="inline-flex bg-header-dark-overlay text-white transition duration-300 hover-bg-header-dark-overlay/70 p-3 rounded-full">';
                                                echo '<i class="fa-brands fa-linkedin"></i></a>';
                                             
                                            } elseif (strpos($item["url"], "pinterest") !== false) {
                                                // Display content for Pinterest with anchor tag and classes
                                              
                                                echo '<a href="' . $item["url"] . '" class="inline-flex bg-header-dark-overlay text-white transition duration-300 hover-bg-header-dark-overlay/70 p-3 rounded-full">';
                                                echo '<i class="fa-brands fa-pinterest"></i></a>';
                                             
                                            } else {
                                                // Display a default message for other URLs
                                                echo "Add Links";
                                            }
                                        }
                                                ?>
                                 
                              <?php endwhile; ?>
                            <?php endif; ?>

                           </div>
                       

                        </div>

                               
                      <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
           </div>

             <?php endwhile; ?>
            <?php endif; ?>
    </section>
</main>

<?php
get_footer();