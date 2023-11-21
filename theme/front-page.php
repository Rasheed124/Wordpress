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
        <div class="flex flex-col max-w-6xl mx-auto">
          <div class="text-center mb-10 px-5">
            <h2 class="text-sm md:text-base pb-3 xl:mb-0">SELECT PROJECT</h2>
          </div>

          <div class="grid grid-cols-1 w-full px-5">
          <!--  ANALYST -->
        
            <div class="mb-5 md:flex md:flex-col md:justify-center md:items-center">
              <div class="flex flex-row">
                <span class="self-start mr-3 mt-3">01</span>
                <h4 class="font-Antonio font-bold text-6xl lg:text-8xl uppercase relative after:content-[''] after:absolute after:-bottom-4 after:left-0 after:w-0 after:h-0 after:transition-all after:duration-700 after:bg-light-white hover:after:w-full hover:after:h-1">
                Analyst 
                </h4>
              </div>
            </div>
        
            <!--  DIGITAL MARKETING -->
        
            <div class="mb-5 md:flex md:flex-col md:justify-center md:items-center">
              <div class="flex flex-row">
                <span class="self-start mr-3 mt-3">02</span>
                <h4 class="font-Antonio font-bold text-7xl lg:text-8xl uppercase relative after:content-[''] after:absolute after:-bottom-4 after:left-0 after:w-0 after:h-0 after:transition-all after:duration-700 after:bg-light-white hover:after:w-full hover:after:h-1">
                Marketing 
                </h4>
              </div>
            </div>
        
          <!--  DIGITAL GRAPHICS VISUAL DESIGN -->
        
            <div class="mb-5 md:flex md:flex-col md:justify-center md:items-center">
              <div class="flex flex-row">
                <span class="self-start mr-3 mt-3">03</span>
                <h4 class="font-Antonio font-bold text-7xl lg:text-8xl uppercase relative after:content-[''] after:absolute after:-bottom-4 after:left-0 after:w-0 after:h-0 after:transition-all after:duration-700 after:bg-light-white hover:after:w-full hover:after:h-1">
                Design 
                </h4>
              </div>
            </div>
        
          <!--  PRODUCT DESIGN -->
        
            <div class="mb-5 md:flex md:flex-col md:justify-center md:items-center">
              <div class="flex flex-row">
                <span class="self-start mr-3 mt-3">04</span>
                <h4 class="font-Antonio font-bold text-4xl lg:text-8xl uppercase relative after:content-[''] after:absolute after:-bottom-4 after:left-0 after:w-0 after:h-0 after:transition-all after:duration-700 after:bg-light-white hover:after:w-full hover:after:h-1">
                Product  
                </h4>
              </div>
            </div>
        
          <!-- Repeat similar blocks for other projects -->
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
    </section>


    <?php endwhile; ?>
  <?php endif; ?>

</main><!-- #main -->



<?php
get_footer();
