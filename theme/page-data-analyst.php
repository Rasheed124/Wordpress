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
						Data Analyst
					</h2>

					<div class="space-x-1">
						<a href="<?php echo get_home_url();?>">Home</a>
						<span>/</span>
						<a href="<?php echo get_home_url();?>/portfolio">Portfolio</a>
					</div>
					</div>
				</header>

<?php if (have_rows('data_analyst_settings')) : ?>
    <?php while (have_rows('data_analyst_settings')) : the_row();

        $id_data_analyst_settings = get_sub_field('id');
        if ($id_data_analyst_settings) { ?>

            <div class="bg-white px-5 py-16">

                <?php
                if ($posts) :
                    $data_analysts = get_sub_field('data_analyst');

                    foreach ($data_analysts as $data_analyst) :
                        setup_postdata($data_analyst);
                        $data_analyst_title = get_the_title($data_analyst->ID);
                        $data_analyst_permalink = get_permalink($data_analyst->ID);

                        $data_analyst_subTitle = get_field('sub_heading', $data_analyst->ID);
                        $data_analyst_card = get_field('marketing_card', $data_analyst->ID);

                ?>

                        <div class="grid grid-cols-1  sm:grid-cols-3  max-w-6xl mx-auto ">

                            <div class="mt-10">

                                <h3 class="font-bold text-2xl font-Antonio lg:text-4xl uppercase pb-2 ">

                                    <?php echo $data_analyst_title; ?>
                                </h3>

                                <h4 class="font-semibold capitalize text-lg ">
                                    <?php echo $data_analyst_subTitle; ?>

                                </h4>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 sm:col-start-2 sm:col-end-4 gap-9 my-10  ">
                                <?php
                                // Get the 'marketing_card' repeater field for the current 'digital_marketing' post
                                $marketing_cards = get_field('marketing_card', $data_analyst->ID);

                                if ($marketing_cards) :
                                    foreach ($marketing_cards as $marketing_card) :
                                ?>
                                        <div class="space-y-3  flex flex-col">
                                            <?php
                                            $marketing_card_image = $marketing_card['image'];
                                            if ($marketing_card_image) : ?>
                                                <div class="  w-full">
                                                    <img src="<?php echo esc_url($marketing_card_image['url']); ?>" alt="<?php echo esc_attr($marketing_card_image['alt']); ?>" class=" max-w-full" />
                                                </div>
                                            <?php endif; ?>

                                            <?php if ($marketing_card_title = $marketing_card['title']): ?>
                                                <h3 class="font-bold text-xl"><?php echo $marketing_card_title; ?></h3>
                                            <?php endif; ?>

                                            <?php if ($marketing_card_description = $marketing_card['description']) : ?>
                                                <p class="mb-4"><?php echo $marketing_card_description; ?></p>
                                            <?php endif; ?>

                                            <?php
                                            $marketing_card_link = $marketing_card['link'];
                                            if ($marketing_card_link) :
                                                $marketing_card_link_url = $marketing_card_link['url'];
                                                $marketing_card_link_title = $marketing_card_link['title'];
                                                $marketing_card_link_target = $marketing_card_link['target'] ? $marketing_card_link['target'] : '_self';
                                                ?>
                                                <a class="mt-6 pt-2 pb-0.5 border-b-0 border-deep-black block self-start  relative after:content-[''] after:absolute after:-bottom-0.5 after:left-0  after:w-0 after:h-0 after:transition-all after:duration-1000 after:bg-deep-black hover:after:w-full hover:after:h-0.5 font-semibold" href="<?php echo esc_url($marketing_card_link_url); ?>" target="<?php echo esc_attr($marketing_card_link_target); ?>"><?php echo esc_html($marketing_card_link_title); ?></a>
                                            <?php endif; ?>
                                        </div>
                                <?php endforeach;
                                endif; ?>
                            </div>
                        </div>

                <?php
                    endforeach;
                    wp_reset_postdata(); // Reset global post data
                endif; ?>

            </div>

    <?php
        }
    endwhile; ?>
<?php endif; ?>

	
		</section>
	</main><!-- #main -->


<?php
get_footer("main");
