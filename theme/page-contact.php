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
<main class="pt-10">
  <section class="pt-24 bg-light-white">

    <?php if (have_rows('contact_page_settings')) : ?>
      <?php while (have_rows('contact_page_settings')) : the_row(); ?>


	      <?php if (have_rows('conatct_me_section')) : ?>
            <?php while (have_rows('conatct_me_section')) : the_row();

              $conatct_me_section_id = get_sub_field('id');
              if ($conatct_me_section_id) { ?>
					<div class="max-w-6xl px-5 mx-auto text-left grid grid-cols-1 md:grid-cols-2 gap-10 pb-24">

				

							<div class="flex flex-col">

							<?php if (have_rows('contact_content')) : ?>
								<?php while (have_rows('contact_content')) : the_row(); ?>

								<h2 class="font-Antonio text-5xl font-bold mb-10 lg:mb-16 max-w-[455px] md:text-7xl uppercase leading-[3.4rem]">
									<!-- Replace with your dynamic title -->
									<?php if ($contact_content_heading = get_sub_field('heading')) : ?><?php echo esc_html($contact_content_heading); ?><?php endif; ?>
								</h2>

								<?php if (have_rows('contact_content_links')) : ?>
									<?php while (have_rows('contact_content_links')) : the_row(); ?>

									<?php
									$contact_content_link = get_sub_field('link');
									if ($contact_content_link) :
										$contact_content_link_url = $contact_content_link['url'];
										$contact_content_link_title = $contact_content_link['title'];
										$contact_content_link_target = $contact_content_link['target'] ? $contact_content_link['target'] : '_self';
									?>

										<div class="space-y-2">
										<!-- Social links -->
										<span class="font-Sohne-Bold text-xs uppercase block">
											<!-- Email link -->
											<a class="underline" href="<?php echo esc_url($contact_content_link_url); ?>" target="<?php echo esc_attr($contact_content_link_target); ?>">
											<span><?php echo esc_html($contact_content_link_title); ?></span>
											</a>
										</span>
										</div>

									<?php endif; ?>

									<?php endwhile; ?>
								<?php endif; ?>

								<?php endwhile; ?>
							<?php endif; ?>
							</div>

							<?php if (have_rows('contact_form')) : ?>
							<?php while (have_rows('contact_form')) : the_row(); ?>
								<div class="border p-4">
								<?php if ($contact_form = get_sub_field('form')) : ?><?php echo $contact_form; ?><?php endif; ?>
								</div>
							<?php endwhile; ?>
							<?php endif; ?>

					

					</div>

			
						<div class="py-2 bg-white">
						<!-- Marquee section -->
							<marquee class="flex space-x-[0.2]  font-semibold whitespace-nowrap">
						         <?php if ($contact_marquee = get_sub_field('contact_marquee')) : ?>
								    <?php echo $contact_marquee; ?>	
						         <?php endif; ?>
								
							</marquee>
						</div>
				


		     <?php
              }
            endwhile; ?>
          <?php endif; ?>

      <?php endwhile; ?>
    <?php endif; ?>

  </section>
</main><!-- #main -->


<?php
get_footer("main");
