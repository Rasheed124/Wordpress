<?php
/** 

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
						Graphics Design
					</h2>

					<div class="space-x-1">
						<a href="<?php echo get_home_url();?>">Home</a>
						<span>/</span>
						<a href="<?php echo get_home_url();?>/portfolio">Portfolio</a>
					</div>
					</div>
				</header>

				
        <?php if (have_rows('graphics_design_settings')) : ?>
          <?php while (have_rows('graphics_design_settings')) : the_row();

            $id_graphics_design_settings = get_sub_field('id');
            if ($id_graphics_design_settings) { ?>

			<div class="">
				<div class="bg-white px-5 py-8 text-light-white ">
			
					<div class="grid grid-cols-1 gap-9 md:grid-cols-2 lg:grid-cols-3 ">
					
			
                  <?php
                  if ($posts) :
                    $graphics_designs = get_sub_field('graphics_design');
             
                    foreach ($graphics_designs as $graphics_design) :
                      setup_postdata($graphics_designs);
                      $graphics_design_title = get_the_title($graphics_design->ID);
                      $graphics_design_permalink = get_permalink($graphics_design->ID);
                  ?>


				
				  	<!--  DIGITAL GRAPHICS VISUAL DESIGN -->
					<a href="<?php echo esc_url($graphics_design_permalink); ?>" class="block">
						<div style="background-image: url('<?php echo get_the_post_thumbnail_url($graphics_design->ID, 'thumbnail'); ?>'); background-size: cover; background-position: center;" class="min-h-screen z-10 cursor-pointer overflow-hidden  relative bg-cover  transition duration-700 bg-no-repeat bg-center bg-black bg-blend-overlay bg-opacity-40 hover:bg-opacity-30">
							<div class="absolute z-10 left-10 bottom-10 ">
								<h1 class="font-Antonio uppercase text-2xl transition-all duration-500 hover:underline font-bold">
								 <?php echo $graphics_design_title; ?>
								</h1>
							</div>
						</div>
					</a>


                 

                  <?php
                    
                    endforeach; ?>
                    <?php wp_reset_postdata(); ?>
                  <?php endif; ?>

					
				
					</div>
				</div>
			
			</div>
		
			       <?php
            }
          endwhile; ?>
        <?php endif; ?>
		</section>
	</main><!-- #main -->



<?php
get_footer("main");
