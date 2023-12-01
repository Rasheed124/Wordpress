<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Durodola_Abdulhad
 */

get_header("main");
?>
<section class="bg-white py-16">
    <?php if (have_rows('design_settings')) : ?>
        <?php while (have_rows('design_settings')) : the_row(); ?>

            <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-5 py-10 px-4 mt-16">
                <!-- IMAGES & VIDEOS -->
                <div class="space-y-5 flex flex-col justify-center items-center">
                    <?php if (have_rows('design_gallery')) : ?>
                        <?php while (have_rows('design_gallery')) : the_row(); ?>
                            <div class="space-y-5">
                                <?php
                                    $image = get_sub_field('image');
                                    if ($image) : ?>
                                        <img src="<?php echo esc_url($image['url']); ?>" class="mb-5 h-full w-full" alt="<?php echo esc_attr($image['alt']); ?>" />
                                    <?php endif; ?>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>

                <!-- CONTENT -->
                <?php if (have_rows('design_content')) : ?>
                    <?php while (have_rows('design_content')) : the_row(); ?>
                        <div class="space-y-5 px-5 sticky top-32">
                            <!-- Title -->
                            <h2 class="text-6xl font-Antonio uppercase text-deep-black font-bold">
                                <?php if ($design_content_heading = get_sub_field('heading')) : ?><?php echo esc_html($design_content_heading); ?><?php endif; ?>
                            </h2>
                            <div class="space-y-3">
                                <h4 class="text-xl uppercase text-deep-black font-bold font-Antonio">
                                    <?php if ($design_content_sub_heading = get_sub_field('sub_heading')) : ?><?php echo esc_html($design_content_sub_heading); ?><?php endif; ?>
                                </h4>
                                <p><?php if ($design_content_description = get_sub_field('description')) : ?><?php echo $design_content_description; ?><?php endif; ?></p>
                            </div>
                            <div class="grid grid-cols-2 gap-5 place-items-start max-w-[380px] mb-5">
                                <!-- Skills -->
                                <?php if (have_rows('design_skill')) : ?>
                                    <?php while (have_rows('design_skill')) : the_row(); ?>
                                        <p class="text-lg flex justify-center items-start">
                                            <span class="block">
                                                <span class="block font-bold text-2xl mt-1 "><i class="fa-solid fa-check"></i></span>
                                            </span>
                                            <span class="block self-center text-lg lg:ml-2"><?php if ($design_skill = get_sub_field('the_skill')) : ?><?php echo $design_skill; ?><?php endif; ?></span>
                                        </p>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                                <!-- Additional skills go here -->
                            </div>

                            <!-- KEY RESULT -->
                            <div>
                                <?php if ($design_result_container = get_sub_field('design_result')) : ?>
                                    <h3 class="text-2xl uppercase text-deep-black font-bold font-Antonio mb-3">
                                        KEY RESULTS
                                    </h3>
                                    <div class="grid grid-cols-1  place-items-start max-w-md">
                                        <!-- Key Results -->
                                        <?php if (have_rows('design_result')) : ?>
                                            <?php while (have_rows('design_result')) : the_row(); ?>
                                                <?php if ($design_result = get_sub_field('result')) : ?>
                                                    <p class="text-lg font-Sohne-Bold border-b border-dotted border-light-overlay pb-3">
                                                        <?php echo $design_result; ?>
                                                    </p>
                                                <?php endif; ?>
                                            <?php endwhile; ?>
                                        <?php endif; ?>
                                        <!-- Additional key results go here -->
                                    </div>
                                <?php endif; ?>
                            </div>

                            <!-- TESTIMONIAL -->
                            <div>
                                <?php if ($design_testimonial_container = get_sub_field('design_testimonial')) : ?>
                                    <h3 class="text-2xl uppercase text-deep-black font-bold font-Antonio mb-3">
                                        CLIENT TESTIMONIAL
                                    </h3>
                                    <?php if ($design_testimonial = get_sub_field('design_testimonial')) : ?>
                                        <p class="text-lg pb-3 "><?php echo $design_testimonial; ?></p>
                                    <?php endif; ?>
                                <?php endif; ?>
                            </div>

                            <!-- TESTIMONIAL INFO -->
                            <div class="font-Antonio">
                                <div>
                                    <?php if ($design_link_container = get_sub_field('design_link')) : ?>
                                        <h4 class="text-md font-bold pb-3 ">
                                            CLIENT:
                                            <span class="ml-2">
                                                <!-- Client Link -->
                                                <?php
                                                    $design_link = get_sub_field('design_link');
                                                    if ($design_link) :
                                                        $design_link_url = $design_link['url'];
                                                        $design_link_title = $design_link['title'];
                                                        $design_link_target = $design_link['target'] ? $design_link['target'] : '_self';
                                                ?>
                                                        <a class=" underline" href="<?php echo esc_url($design_link_url); ?>" target="<?php echo esc_attr($design_link_target); ?>">
                                                            <?php echo esc_html($design_link_title); ?>
                                                        </a>
                                                    <?php endif; ?>
                                            </span>
                                        </h4>
                                    <?php endif; ?>
                                </div>

                                <div>
                                    <h4 class="text-md font-bold pb-3 ">
                                        DATE:
                                        <span class="ml-2"><?php echo get_the_date('F j, Y');?></span>
                                    </h4>
                                </div>

                                <div>
                                    <?php if ($design_share_container = get_sub_field('design_share')) : ?>
                                        <h4 class="text-md font-bold pb-3 font-Antonio ">
                                            SHARE:
                                            <?php if (have_rows('design_share')) : ?>
                                                <?php while (have_rows('design_share')) : the_row(); ?>
                                                    <span class="font-Sohne-Bold text-xs ml-2 space-x-1">
                                                        <?php
                                                            $share_link_link = get_sub_field('share_link');
                                                            if ($share_link_link) :
                                                                $share_link_link_url = $share_link_link['url'];
                                                                $share_link_link_title = $share_link_link['title'];
                                                                $share_link_link_target = $share_link_link['target'] ? $share_link_link['target'] : '_self';
                                                        ?>
                                                            <a class=" underline" href="<?php echo esc_url($share_link_link_url); ?>" target="<?php echo esc_attr($share_link_link_target); ?>">
                                                                <?php echo esc_html($share_link_link_title); ?>
                                                            </a>
                                                        <?php endif; ?>
                                                    </span>
                                                <?php endwhile; ?>
                                            <?php endif; ?>
                                        </h4>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>

        <?php endwhile; ?>
    <?php endif; ?>
</section>


<?php
get_footer("main");
