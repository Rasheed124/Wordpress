  <div class="px-5">
                <div class="swiper-container">
                  <div class="swiper-wrapper">

                    <?php
                    if ($posts) :
                      $testimonials = get_sub_field('testimonial');
                      foreach ($testimonials as $testimonial) :
                        setup_postdata($testimonials);
                        $testimonial_title = get_the_title($testimonial->ID);
                        $testimonial_role_field = get_field('testimonial_role', $testimonial->ID);
                    ?>
                        <!-- Testimonials -->
                        <div class="swiper-slide">
                          <div class="text-center">
                            <h3 class="text-2xl uppercase font-bold font-Antonio"> <?php echo $testimonial_title; ?></h3>
                            <div class="max-w-4xl mx-auto flex flex-col justify-center items-center my-7">
                              <span class="block">
                                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
                                </svg>
                              </span>
                              <p class="font-libre-baskerville px-3 lg:px-10 my-10 text-2xl">  <?php echo $testimonial->post_content; ?></p>
                              <span class="block">
                                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                                </svg>
                              </span>
                            </div>
                            <h4 class="capitalize"> <?php echo esc_html($testimonial_role_field); ?></h4>
                          </div>
                        </div>

                    <?php endforeach; ?>
                    <?php wp_reset_postdata(); ?>
                  <?php endif; ?>

                  </div>
                  <!-- <div class="swiper-pagination"></div>
                  <div class="swiper-button-next"></div>
                  <div class="swiper-button-prev"></div> -->
                </div>
              </div>