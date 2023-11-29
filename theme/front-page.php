<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no `home.php` file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Durodola_Abdulhad
 */

get_header();

?>

																									
<main id="home-main">

  <?php if (have_rows('home_page_settings')) : ?>
    <?php while (have_rows('home_page_settings')) : the_row(); ?>

      <!-- BANNER SECTION -->
      <section>
        <div class="flex flex-col pt-10 text-center">
          <!-- HEADER CONTENT -->
          <div class="max-w-sm sm:max-w-lg md:max-w-3xl mx-auto mb-10 p-2 lg:py-16">
            <div class="leading-[10rem] flex justify-center items-center">
              <?php
              $custom_logo_id = get_theme_mod('custom_logo');
              $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
              if (has_custom_logo()) {
                echo '<img class="w-20 h-20" src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '">';
              } else {
                echo '<h1 class="text-[5rem] text-light-white sm:whitespace-nowrap sm:text-[4.0rem] lg:text-[7rem] xl:text-[10rem] sm:px-5 font-Antonio leading-[7rem] lg:tracking-[-0.5rem] uppercase">' . get_bloginfo('name') . '</h1>';
              }
              ?>
            </div>
          </div>

          <?php if (have_rows('banner_section')) : ?>
            <?php while (have_rows('banner_section')) : the_row();

              $banner_section_id = get_sub_field('id');
              if ($banner_section_id) { ?>

                <div class="flex flex-col justify-center md:flex-row md:justify-between space-y-2 md:space-y-0 md:space-x-3 mb-10 px-5 xl:px-20">
                  <div class="xl:w-full xl:max-w-lg xl:flex xl:flex-col xl:justify-start xl:items-start">
                    <p class="text-xs uppercase">
                      <?php if ($adress = get_sub_field('adress')) : ?><?php echo esc_html($adress); ?><?php endif; ?>
                    </p>
                  </div>
                  <div class="xl:w-full xl:max-w-lg xl:flex xl:flex-col xl:justify-start xl:items-center">
                    <p class="text-xs space-x-3 uppercase">
                      <?php if ($banner_section_skills = get_sub_field('skills')) : ?><?php echo esc_html($banner_section_skills); ?><?php endif; ?>
                    </p>
                  </div>
                  <div class="xl:w-full xl:max-w-lg xl:flex xl:flex-col xl:justify-center xl:items-end">
                    <?php
                    $link = get_sub_field('social_link');
                    if ($link) :
                      $link_url = $link['url'];
                      $link_title = $link['title'];
                      $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                      <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>">
                        <p class="text-xs uppercase">
                          <?php echo esc_html($link_title); ?>
                        </p>
                      </a>
                    <?php endif; ?>
                  </div>
                </div>

                <!-- HEADER BANNER IMAGE -->
                <div class="hidden relative bg-cover bg-center bg-no-repeat min-h-[45vh] xl:flex justify-center items-center">
                  <?php
                  // Check if the current page has a featured image
                  if (has_post_thumbnail()) {
                    // Get the featured image HTML
                    $thumbnail_id = get_post_thumbnail_id();
                    $image_url = wp_get_attachment_image_src($thumbnail_id, 'full');
                    $alt_text = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);

                    // Output the featured image
                    echo '<img src="' . esc_url($image_url[0]) . '" alt="' . esc_attr($alt_text) . '" class="w-full">';
                  }
                  ?>
                </div>

              <?php
              }
            endwhile; ?>
          <?php endif; ?>

        </div>
      </section>

      <!-- SKILLS SECTION -->
      <section class="py-16 lg:py-20">

        <?php if (have_rows('skills_section')) : ?>
          <?php while (have_rows('skills_section')) : the_row();

            $id_skills_section = get_sub_field('id');
            if ($id_skills_section) { ?>
              <div class="flex flex-col max-w-6xl mx-auto">
                <div class="text-center py-7 px-5">
                  <h2 class="font-Sohne-Bold text-lg pb-3 mb-5 xl:mb-0 uppercase">
                    <?php if ($skills_section_heading = get_sub_field('heading')) : ?><?php echo esc_html($skills_section_heading); ?><?php endif; ?>
                  </h2>
                  <div class="hidden xl:block xl:mb-16 xl:px-2">
                    <h3 class="font-migra-light italic font-thin text-3xl xl:text-6xl">
                      <?php if ($skills_section_sub_heading = get_sub_field('sub_heading')) : ?><?php echo esc_html($skills_section_sub_heading); ?><?php endif; ?>
                    </h3>
                  </div>

                  <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-5 xl:gap-10 w-full px-5">

                    <?php
                    if ($posts) :
                      $skills = get_sub_field('skills');
                      foreach ($skills as $skill) :
                        setup_postdata($skills);
                        $title = get_the_title($skill->ID);
                    ?>
                        <div class="mb-5 md:mb-0">
                          <div class="mb-5  ">
                            <img src="<?php echo get_the_post_thumbnail_url($skill->ID, 'thumbnail'); ?>" alt="Skill Image 1" class=" max-w-full" />
                          </div>
                          <div class="space-y-5">
                            <h4 class="font-Antonio text-lg text-left xl:text-xl font-bold uppercase">
                              <?php echo $title; ?>
                            </h4>
                            <p class="text-lg text-left">
                              <?php echo $skill->post_content; ?>
                            </p>
                          </div>
                        </div>
                    <?php endforeach; ?>
                    <?php wp_reset_postdata(); ?>
                  <?php endif; ?>

                  </div>
                </div>

                <a href="/contact" class="self-center mt-10">
                  <div class="group cursor-pointer font-Antonio inline-flex">
                    <div class="mr-2 uppercase text-xl transition duration-700 group-hover:text-header-dark-overlay">
                      Get in touch
                    </div>
                    <div class="relative group-hover:text-header-dark-overlay self-end p-4 py-3 overflow-hidden font-medium transition duration-700 ease-out text-2xl">
                      <div class="">
                        <span class="absolute inset-0 flex items-center justify-end w-full h-full text-white duration-500 group-hover:translate-x-[100%] bg-transparent -translate-x-[20%] ease">
                          <div class="relative btn overflow-x-hidden flex justify-center items-center gap-3 text-lg">
                            <span>
                              &rarr;
                            </span>
                          </div>
                        </span>
                        <span class="absolute inset-0 flex items-center justify-end w-full h-full text-white duration-500 -translate-x-[100%] bg-transparent group-hover:translate-x-0 ease">
                          <div class="relative btn overflow-x-hidden flex justify-center items-center gap-3 text-lg font-Antonio">
                            <span>
                              &rarr;
                            </span>
                          </div>
                        </span>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            <?php
            }
          endwhile; ?>
        <?php endif; ?>

      </section>

      <!-- PROJECTS SECTION -->
      <section class="py-16 lg:py-20">

        <?php if (have_rows('projects_section')) : ?>
          <?php while (have_rows('projects_section')) : the_row();

            $id_projects_section = get_sub_field('id');
            if ($id_projects_section) { ?>

              <div class="flex flex-col max-w-6xl mx-auto">

                <div class="text-center mb-10 px-5">
                  <h2 class="text-sm md:text-base pb-3 xl:mb-0">
                    <?php if ($projects_section_heading = get_sub_field('heading')) : ?><?php echo esc_html($projects_section_heading); ?><?php endif; ?>
                  </h2>
                </div>

                <div class="grid grid-cols-1 place-content-center place-items-center w-full px-5">
                  <!-- ANALYST -->

                  <?php
                  if ($posts) :
                    $projects = get_sub_field('projects');
                    $counter = 1; // Initialize the counter
                    foreach ($projects as $project) :
                      setup_postdata($projects);
                      $project_title = get_the_title($project->ID);
                      $project_permalink = get_permalink($project->ID);
                  ?>

                      <a href="<?php echo esc_url($project_permalink); ?>" class="mb-5 md:flex md:flex-col md:justify-center md:items-center">
                        <div class="flex flex-row">
                          <span class="self-start mr-3 mt-3">0<?php echo $counter; ?></span>
                          <h4 class="font-Antonio font-bold text-6xl lg:text-8xl uppercase relative after:content-[''] after:absolute after:-bottom-4 after:left-0 after:w-0 after:h-0 after:transition-all after:duration-700 after:bg-light-white hover:after:w-full hover:after:h-1">
                            <?php echo $project_title; ?>
                          </h4>
                        </div>
                      </a>

                  <?php
                      $counter++; // Increment the counter
                    endforeach; ?>
                    <?php wp_reset_postdata(); ?>
                  <?php endif; ?>

                </div>

                <a href="/portfolio" class="self-center mt-10">
                  <div class="group cursor-pointer font-Antonio inline-flex">
                    <div class="mr-2 uppercase text-xl transition duration-700 group-hover:text-header-dark-overlay">
                      View more
                    </div>
                    <div class="relative group-hover:text-header-dark-overlay self-end p-4 py-3 overflow-hidden font-medium transition duration-700 ease-out text-2xl">
                      <div class="">
                        <span class="absolute inset-0 flex items-center justify-end w-full h-full text-white duration-500 group-hover:translate-x-[100%] bg-transparent -translate-x-[20%] ease">
                          <div class="relative btn overflow-x-hidden flex justify-center items-center gap-3 text-lg">
                            <span>
                              &rarr;
                            </span>
                          </div>
                        </span>
                        <span class="absolute inset-0 flex items-center justify-end w-full h-full text-white duration-500 -translate-x-[100%] bg-transparent group-hover:translate-x-0 ease">
                          <div class="relative btn overflow-x-hidden flex justify-center items-center gap-3 text-lg font-Antonio">
                            <span>
                              &rarr;
                            </span>
                          </div>
                        </span>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
        <?php
            }
          endwhile; ?>
        <?php endif; ?>
     </section>


      <!-- TESTIMONIALS SECTION -->
    <section class="py-16 lg:py-20" id="testimonials">
      <?php if (have_rows('testimonial_section')) : ?>
        <?php while (have_rows('testimonial_section')) : the_row();

          $id_testimonial_section = get_sub_field('id');
          if ($id_testimonial_section) { ?>

            <div class="flex flex-col max-w-6xl mx-auto px-5">
               <div class="swiper  grid grid-cols-1 place-content-center place-items-center">
                  <div class="swiper-wrapper">
           
                      <div class="swiper-slide">
                          <div class="text-center">
                            <h3 class="text-2xl uppercase font-bold font-Antonio"> Durodola</h3>
                            <div class="max-w-4xl mx-auto flex flex-col justify-center items-center my-7">
                              <span class="block">
                                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
                                </svg>
                              </span>
                              <p class="font-libre-baskerville px-3 lg:px-10 my-10 text-2xl">  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ratione beatae vero, eaque corrupti laborum magnam fuga quam optio suscipit provident!
                                
                              </p>
                              <span class="block">
                                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                                </svg>
                              </span>
                            </div>
                            <h4 class="capitalize"> Adeola</h4>
                          </div>
                      </div>
                      <div class="swiper-slide">
                          <div class="text-center">
                            <h3 class="text-2xl uppercase font-bold font-Antonio"> Durodola</h3>
                            <div class="max-w-4xl mx-auto flex flex-col justify-center items-center my-7">
                              <span class="block">
                                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
                                </svg>
                              </span>
                              <p class="font-libre-baskerville px-3 lg:px-10 my-10 text-2xl">  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ratione beatae vero, eaque corrupti laborum magnam fuga quam optio suscipit provident!

                              </p>
                              <span class="block">
                                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                                </svg>
                              </span>
                            </div>
                            <h4 class="capitalize"> Adeola</h4>
                          </div>
                      </div>
                      <div class="swiper-slide">
                          <div class="text-center">
                            <h3 class="text-2xl uppercase font-bold font-Antonio"> Durodola</h3>
                            <div class="max-w-4xl mx-auto flex flex-col justify-center items-center my-7">
                              <span class="block">
                                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
                                </svg>
                              </span>
                              <p class="font-libre-baskerville px-3 lg:px-10 my-10 text-2xl">  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ratione beatae vero, eaque corrupti laborum magnam fuga quam optio suscipit provident!

                              </p>
                              <span class="block">
                                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                                </svg>
                              </span>
                            </div>
                            <h4 class="capitalize"> Adeola</h4>
                          </div>
                      </div>
                
               
                  </div>
               <div class="swiper-button-prev"></div>
             <div class="swiper-button-next"></div>
              </div>

            </div>

          <?php
          }
        endwhile; ?>
      <?php endif; ?>
    </section>


      <!-- PRODUCT SECTION -->
    <section class="py-16 lg:py-20">
      <!-- product_section -->
              <?php if (have_rows('product_section')) : ?>
          <?php while (have_rows('product_section')) : the_row();

            $id_product_section = get_sub_field('id');
            if ($id_product_section) { ?>

      <div class="flex flex-col max-w-6xl mx-auto">
        <!-- Replace the following content with your actual content -->
        <div class="py-7 px-5">
          <div class="grid grid-cols-1 md:grid-cols-2 gap-14 w-full px-5">


             <?php if (have_rows('product_gallery')) : ?>
          <?php while (have_rows('product_gallery')) : the_row();

           
            ?>
                 <?php
                                        $product_gallery_image = get_sub_field('image');
                                        if ($product_gallery_image) : ?>
                                          

                                                <div class="w-full flex flex-col justify-center order-1">
              
                              <div class="max-w-lg relative lg:max-w-xl mx-auto">
                                <img src="<?php echo esc_url($product_gallery_image['url']); ?>" alt="<?php echo esc_attr($product_gallery_image['alt']); ?>" class="max-w-full " />

                                              
                                                </div>
                                              </div>
                                        <?php endif; ?>
        

                                    <?php
                                        $product_gallery_link = get_sub_field('link');
                                        if ($product_gallery_link) : ?>

            <div class="relative w-full order-1">
          
              <iframe
                width="560"
                height="315"
                src="<?php echo $product_gallery_link; ?>"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen
                title="Youtube video"
                class="aspect-[16/9] h-full w-full p-0"
              ></iframe>

              
            </div>


             <?php endif; ?>




              <?php endwhile; ?>
        <?php endif; ?>

        <?php if (have_rows('product_content')) : ?>
          <?php while (have_rows('product_content')) : the_row();

           
            ?>
            <!-- CONTENT -->
            <div class="flex flex-col text-left space-y-3 md:order-1">
              <h2 class="font-Sohne-Bold text-lg uppercase">
                         <?php if ($product_content_heading = get_sub_field('heading')) : ?><?php echo esc_html($product_content_heading); ?><?php endif; ?>
              </h2>
              <h3 class="font-bold font-libre-baskerville text-2xl">
                      <?php if ($product_content_sub_heading = get_sub_field('sub_heading')) : ?><?php echo esc_html($product_content_sub_heading); ?><?php endif; ?>
              </h3>
              <p class="py-3 text-base text-justify lg:text-lg">
                      <?php if ($product_content_desc = get_sub_field('description')) : ?><?php echo $product_content_desc; ?><?php endif; ?>
              </p>
              <div class="grid grid-cols-2 gap-4 py-4">

                 <?php if (have_rows('tags')) : ?>
                    <?php while (have_rows('tags')) : the_row(); ?>
                <h4 class="text-lg flex flex-wrap gap-1 items-center">
                  <span>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="icon icon-tabler icon-tabler-circle-check-filled text-header-dark-overlay"
                      width="24"
                      height="24"
                      viewBox="0 0 24 24"
                      stroke-width="2"
                      stroke="currentColor"
                      fill="none"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    >
                      <path
                        stroke="none"
                        d="M0 0h24v24H0z"
                        fill="none"
                      ></path>
                      <path
                        d="M17 3.34a10 10 0 1 1 -14.995 8.984l-.005 -.324l.005 -.324a10 10 0 0 1 14.995 -8.336zm-1.293 5.953a1 1 0 0 0 -1.32 -.083l-.094 .083l-3.293 3.292l-1.293 -1.292l-.094 -.083a1 1 0 0 0 -1.403 1.403l.083 .094l2 2l.094 .083a1 1 0 0 0 1.226 0l.094 -.083l4 -4l.083 -.094a1 1 0 0 0 -.083 -1.32z"
                        stroke-width="0"
                        fill="currentColor"
                      ></path>
                    </svg>
                  </span>
                  <span class="font-medium whitespace-normal xl:whitespace-nowrap">
                       <?php if ($product_content_tag_heading = get_sub_field('tag_title')) : ?><?php echo esc_html($product_content_tag_heading); ?><?php endif; ?>
                  </span>
                </h4>
                <?php endwhile; ?>
               <?php endif; ?>
              </div>


         
              <?php
                    $product_section_link = get_sub_field('button');
                    if ($product_section_link) :
                      $product_section_link_url = $link['url'];
                      $product_section_link_title = $link['title'];
                      $product_section_link_target = $link['target'] ? $product_section_link['target'] : '_self';
                    ?>
                      <a class="self-start" href="<?php echo esc_url($product_section_link_url); ?>" target="<?php echo esc_attr($product_section_link_target); ?>">
                           
                <div class="group cursor-pointer font-Antonio inline-flex">
                  <div class="mr-2 uppercase text-xl transition duration-700 group-hover:text-header-dark-overlay">
                         <?php echo esc_html($product_section_link_title); ?>
                  </div>
                  <div class="relative group-hover:text-header-dark-overlay self-end p-4 py-3 overflow-hidden font-medium transition duration-700 ease-out text-2xl">
                    <div class="">
                      <span class="absolute inset-0 flex items-center justify-end w-full h-full text-white duration-500 group-hover:translate-x-[100%] bg-transparent -translate-x-[20%] ease">
                        <div class="relative btn overflow-x-hidden flex justify-center items-center gap-3 text-lg">
                          <span>
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              fill="none"
                              viewBox="0 0 24 24"
                              stroke="currentColor"
                              class="text-3xl text-white group-hover:text-header-dark-overlay"
                            >
                              <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M9 5l7 7-7 7"
                              ></path>
                            </svg>
                          </span>
                        </div>
                      </span>
                      <span class="absolute inset-0 flex items-center justify-end w-full h-full text-white duration-500 -translate-x-[100%] bg-transparent group-hover:translate-x-0 ease">
                        <div class="relative btn overflow-x-hidden flex justify-center items-center gap-3 text-lg font-Antonio">
                          <span>
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              fill="none"
                              viewBox="0 0 24 24"
                              stroke="currentColor"
                              class="text-3xl text-white group-hover:text-header-dark-overlay"
                            >
                              <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M9 5l7 7-7 7"
                              ></path>
                            </svg>
                          </span>
                        </div>
                      </span>
                    </div>
                  </div>
                </div>
          

                      </a>
                    <?php endif; ?>
            </div>
       <?php endwhile; ?>
        <?php endif; ?>

          </div>
        </div>
        <!-- Repeat the above structure for each product -->
      </div>

            <?php
            }
          endwhile; ?>
        <?php endif; ?>
   </section>


      <!-- BLOG SECTION -->
    <section class="py-16 lg:py-20">

                   <?php if (have_rows('blog_section')) : ?>
          <?php while (have_rows('blog_section')) : the_row();

            $id_blog_section = get_sub_field('id');
            if ($id_blog_section) { ?>
      <div class="flex flex-col max-w-6xl mx-auto">
        <div class="px-5 text-center">
          <h4 class="font-Antonio text-2xl">
                <?php if ($blog_section_heading = get_sub_field('heading')) : ?><?php echo esc_html($blog_section_heading); ?><?php endif; ?>
          </h4>

          <div class="my-10 grid grid-cols-1 gap-10 sm:grid-cols-2 md:grid-cols-3">
                     <?php
                    if ($posts) :
                      $blog_posts = get_sub_field('post');
                      foreach ($blog_posts as $blog_post) :
                        setup_postdata($blog_posts);
                        $blog_post_title = get_the_title($blog_post->ID);
                      $blog_post_permalink = get_permalink($blog_post->ID);

                    ?>
            <!-- Recent Post -->
              <div class="flex flex-col justify-center text-left">

                <div class="grid grid-cols-1 gap-5">
                  <div class="pb-4">
                    <a href="<?php echo esc_url($blog_post_permalink); ?>">
                      <div class="max-w-xl mx-auto w-full">
                    
                            <img src="<?php echo get_the_post_thumbnail_url($blog_post->ID, 'thumbnail'); ?>" alt="<?php echo $blog_post_title; ?>" class=" max-w-full" />
                      </div>
                    </a>
                  </div>

                  <div class="">
                    <div class="border-b pb-5">
                      <div class="flex gap-8 mb-5">
                        <span>Your Date</span>
                        <span>Your Read Time min reads</span>
                      </div>
                      <a href="/post/your-post-slug">
                        <h3 class="text-xl md:text-2xl  font-Antonio transition-colors hover:duration-700 hover:text-header-dark-overlay">
                           <?php echo $blog_post_title; ?>
                        </h3>
                      </a>
                    </div>

                    <div class="flex w-full  mt-5">
                      <div class="flex justify-center items-center mr-5 transition-colors hover:duration-700 hover:text-header-dark-overlay">
                        <span class="mr-2">
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            class="text-3xl text-white group-hover:text-header-dark-overlay"
                          >
                            <path
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              stroke-width="2"
                              d="M9 5l7 7-7 7"
                            ></path>
                          </svg>
                        </span>
                        <span>Your Views views</span>
                      </div>

                      <div class="flex justify-center items-center mr-5">
                        <a href="/post/your-post-slug">
                          <div class="flex justify-center items-center transition-colors hover:duration-700 hover:text-header-dark-overlay ">
                            <span class="mr-2">
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                class="text-3xl text-white group-hover:text-header-dark-overlay"
                              >
                                <path
                                  stroke-linecap="round"
                                  stroke-linejoin="round"
                                  stroke-width="2"
                                  d="M9 5l7 7-7 7"
                                ></path>
                              </svg>
                            </span>
                            <span class="block">Your Comment</span>
                          </div>
                        </a>
                      </div>

                      <div class="flex justify-center items-center self-end ">
                        <a href="/post/your-post-slug">
                          <div class="flex justify-center items-center transition-colors hover:duration-700 hover:text-header-dark-overlay ">
                            <span class="mr-2  transition-colors hover:duration-700 hover:text-header-dark-overlay">
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                class="text-3xl text-white"
                              >
                                <path
                                  stroke-linecap="round"
                                  stroke-linejoin="round"
                                  stroke-width="2"
                                  d="M9 5l7 7-7 7"
                                ></path>
                              </svg>
                            </span>
                            <span>Your Likes</span>
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

                           <?php endforeach; ?>
                    <?php wp_reset_postdata(); ?>
                  <?php endif; ?>
          </div>

          <a href="/blog" class="self-center mt-10">
            <div class="group cursor-pointer font-Antonio inline-flex">
              <div class="mr-2 uppercase text-xl transition duration-700 group-hover:text-header-dark-overlay">
                View more
              </div>
              <div class="relative group-hover:text-header-dark-overlay self-end p-4 py-3 overflow-hidden font-medium transition duration-700 ease-out  text-2xl">
                <div class="">
                  <span class="absolute inset-0 flex items-center justify-end w-full h-full text-white duration-500 group-hover:translate-x-[100%] bg-transparent -translate-x-[20%] ease">
                    <div class="relative btn overflow-x-hidden flex justify-center items-center gap-3 text-lg ">
                      <span>
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          fill="none"
                          viewBox="0 0 24 24"
                          stroke="currentColor"
                          class="text-3xl text-white group-hover:text-header-dark-overlay"
                        >
                          <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M9 5l7 7-7 7"
                          ></path>
                        </svg>
                      </span>
                    </div>
                  </span>
                  <span class="absolute inset-0 flex items-center justify-end w-full h-full text-white duration-500 -translate-x-[100%]  bg-transparent group-hover:translate-x-0 ease">
                    <div class="relative btn overflow-x-hidden flex justify-center items-center gap-3 text-lg font-Antonio">
                      <span>
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          fill="none"
                          viewBox="0 0 24 24"
                          stroke="currentColor"
                          class="text-3xl text-white group-hover:text-header-dark-overlay"
                        >
                          <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M9 5l7 7-7 7"
                          ></path>
                        </svg>
                      </span>
                    </div>
                  </span>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>

      
            <?php
            }
          endwhile; ?>
        <?php endif; ?>
  </section>






    <?php endwhile; ?>
  <?php endif; ?>

</main><!-- #main -->



<?php
get_footer();
?>