
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
    <main id="main relative">

        <!-- SECTION ONE - BANNER -->
        <?php if (have_rows('section_one')) : ?>
            <?php while (have_rows('section_one')) : the_row();
            
                $id_section_one = get_sub_field('id_section_one');
               if ($id_section_one) { ?>

                <section id="<?php if ($id_section_one = get_sub_field('id_section_one')) : ?><?php echo esc_html($id_section_one); ?><?php endif; ?>"
                        class="overflow-x-hidden max-w-7xl mx-auto">

                    <div class="grid grid-cols-1 gap-8 lg:gap-10 md:grid-cols-2 md:place-content-center md:items-center py-14 lg:py-20 px-4 lg:px-10">
                        <!-- COLUMNS -->

                        <?php if (have_rows('content_section_one')) : ?>
                            <?php while (have_rows('content_section_one')) : the_row(); ?>

                                <div class="flex flex-col justify-center items-center md:justify-start">
                                    <div class="max-w-md mx-auto lg:max-w-none">
                                        <!-- HEADING -->
                                        <?php if ($heading = get_sub_field('heading')) : ?>
                                            <h3 class="font-bold pb-3 text-2xl lg:text-4xl text-black">
                                                <?php echo esc_html($heading); ?>
                                            </h3>
                                        <?php endif; ?>

                                        <!-- PARAGRAPH -->
                                        <?php if ($paragraph = get_sub_field('paragraph')) : ?>
                                            <p class="pb-5 font-semibold lg:text-lg xl:text-xl">
                                                <?php echo $paragraph; ?>
                                            </p>
                                        <?php endif; ?>

                                        <!-- BUTTONS -->
                                        <div class="flex gap-5 self-start py-5">
                                            <?php
                                            $link = get_sub_field('button-paid');
                                            if ($link) :
                                                $link_url = $link['url'];
                                                $link_title = $link['title'];
                                                $link_target = $link['target'] ? $link['target'] : '_self';
                                                ?>
                                                <a class="button" href="<?php echo esc_url($link_url); ?>"
                                                target="<?php echo esc_attr($link_target); ?>">
                                                    <button
                                                        class="py-3 hover:border-header-dark-overlay duration-500 transition hover:bg-transparent px-8 border rounded-full border-transparent bg-header-dark-overlay text-xs sm:text-base block whitespace-nowrap font-medium">
                                                        <?php echo esc_html($link_title); ?>
                                                    </button>
                                                </a>
                                            <?php endif; ?>

                                            <?php
                                            $link = get_sub_field('button-course');
                                            if ($link) :
                                                $link_url = $link['url'];
                                                $link_title = $link['title'];
                                                $link_target = $link['target'] ? $link['target'] : '_self';
                                                ?>
                                                <a class="button" href="<?php echo esc_url($link_url); ?>"
                                                target="<?php echo esc_attr($link_target); ?>">
                                                    <button
                                                        class="py-3 border-header-dark-overlay duration-500 transition bg-transparent px-8 border rounded-full text-xs sm:text-base whitespace-nowrap font-medium">
                                                        <?php echo esc_html($link_title); ?>
                                                    </button>
                                                </a>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                       <!-- <form action="" class="">
                                <div class="flex mx-auto flex-col md:flex-row justify-center items-center gap-3">
                                    <label for="email" class="w-full">
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

                                    <!-- Testimonials -->
                                    <div id="testimonials">
                                        <div class="swiper max-w-md mx-auto lg:max-w-none grid grid-cols-1 place-content-center place-items-center">
                                            <div class="swiper-wrapper">
                                                <?php
                                                if ($posts) :
                                                    $testimonials = get_sub_field('testimonial');
                                                    foreach ($testimonials as $testimonial) :
                                                        setup_postdata($testimonials);
                                                        $title = get_the_title($testimonial->ID);
                                                        $role_field = get_field('reviews_role', $testimonial->ID);
                                                        ?>
                                                        <div class="swiper-slide">
                                                            <div class="space-y-3 mt-10 bg-white/30  ">
                                                                <div class="border-l-4 border-header-dark-overlay px-5">
                                                                    <blockquote class="text-center md:text-left italic text-base">
                                                                        <?php echo $testimonial->post_content; ?>
                                                                    </blockquote>
                                                                </div>

                                                                <div
                                                                    class="flex flex-col md:flex-row items-center md:justify-start justify-center  md:items-start">
                                                                    <div class="relative w-[70px] h-[70px] mr-2 ">
                                                                        <img src="<?php echo get_the_post_thumbnail_url($testimonial->ID, 'thumbnail'); ?>"
                                                                            alt="<?php echo $title_sec_one; ?>"
                                                                            class="max-w-full absolute top-0 left-0 object-cover object-center rounded-full">
                                                                    </div>

                                                                    <p class="text-center md:text-left">
                                                                        <span class="block text-sm font-semibold"><?php echo $title; ?></span>
                                                                        <span class="block text-sm">
                                                                            <?php echo esc_html($role_field); ?>
                                                                        </span>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    <?php endforeach; ?>
                                                    <?php wp_reset_postdata(); ?>
                                                <?php endif; ?>
                                            </div>
                                            <!-- If we need pagination -->
                                            <div class="swiper-pagination"></div>
                                        </div>
                                    </div>

                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>

                        <!-- Image Container -->
                        <?php if (have_rows('image_section_one')) : ?>
                            <?php while (have_rows('image_section_one')) : the_row(); ?>

                                <div class="flex flex-col justify-center items-center   ">
                                    <div class="max-w-md lg:max-w-lg mx-auto relative">
                                        <div className="">
                                            <?php
                                            $image = get_sub_field('image');
                                            if ($image) : ?>
                                                <img src="<?php echo esc_url($image['url']); ?>" class="max-w-full "
                                                    alt="<?php echo esc_attr($image['alt']); ?>" />
                                            <?php endif; ?>
                                        </div>

                                        <div
                                            class="rounded-full w-[90px] h-[90px] right-6 sm:right-0 xl:right-5 -top-3 p-4 text-center text-black bg-header-dark-overlay absolute  flex justify-center items-center">
                                            <?php if ($image_text = get_sub_field('image_text')) : ?>
                                                <span class="block text-xl font-extrabold font-Antonio" id="banner-badge">
                                                    <?php echo esc_html($image_text); ?>
                                                </span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>

                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>

                </section>
                <?php
                 }
            endwhile; ?>
        <?php endif; ?>


        <!-- SECTION TWO - BENENEIT -->
        <?php if (have_rows('section_two')) : ?>
            <?php while (have_rows('section_two')) : the_row(); 
            
              $id_section_two = get_sub_field('id_section_two');
               if ($id_section_two) { ?>

                <section id="<?php if ($id_section_two = get_sub_field('id_section_two')) : ?><?php echo esc_html($id_section_two); ?><?php endif; ?>" class="px-6 lg:px-10 overflow-x-hidden bg-gray-100">
                    <div class="text-center lg:max-w-7xl mx-auto max-w-2xl py-14 lg:py-20">
                        <!-- Title -->
                        <?php if (have_rows('content_section_two')) : ?>
                            <?php while (have_rows('content_section_two')) : the_row(); ?>

                                <div class="max-w-4xl mx-auto">

                                    <?php if ($heading = get_sub_field('heading')) : ?>

                                        <h2 class="text-2xl font-bold lg:text-3xl">
                                            <?php echo esc_html($heading); ?>
                                        </h2>
                                    <?php endif; ?>

                                    <?php if ($paragraph = get_sub_field('paragraph')) : ?>

                                        <p class="py-2 md:text-lg lg:text-xl ">
                                            <?php echo $paragraph; ?>
                                        </p>
                                    <?php endif; ?>

                                </div>

                                <!-- Columns -->

                                <div class="py-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-5xl xl:max-w-7xl mx-auto">
                                    <!-- Col -->
                                    <?php if (have_rows('card')) : ?>
                                        <?php while (have_rows('card')) : the_row(); ?>

                                            <div class="space-y-3 flex flex-col justify-start items-center ">

                                                <?php
                                                $image = get_sub_field('image');
                                                if ($image) : ?>
                                                    <img src="<?php echo esc_url($image['url']); ?>" class="w-12 h-12" alt="<?php echo esc_attr($image['alt']); ?>" />
                                                <?php endif; ?>

                                                <?php if ($title = get_sub_field('title')) : ?>
                                                    <h4 class="font-medium sm:text-lg">
                                                        <?php echo esc_html($title); ?>
                                                    </h4>
                                                <?php endif; ?>

                                                <?php if ($description = get_sub_field('description')) : ?>
                                                    <p class="text-base">
                                                        <?php echo $description; ?>
                                                    </p>
                                                <?php endif; ?>
                                            </div>

                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </div>

                            <?php endwhile; ?>
                        <?php endif; ?>

                    </div>
                </section>

            <?php
                 }
            endwhile; ?>
        <?php endif; ?>


        <!-- SECTION THREE - INCLUDED -->
        <?php if (have_rows('section_three')) : ?>
            <?php while (have_rows('section_three')) : the_row(); 

                $id_section_three = get_sub_field('id_section_three');
               if ($id_section_three) { ?>

                <section id="<?php if ($id_section_three = get_sub_field('id_section_three')) : ?><?php echo esc_html($id_section_three); ?><?php endif; ?>" class="px-6 lg:px-10 ">

                    <div class="text-center lg:max-w-7xl mx-auto max-w-2xl py-14 lg:py-20 xl:py-28">
                        <!-- Content -->
                        <div class="max-w-4xl mx-auto">
                            <?php if ($heading_section_three = get_sub_field('heading_section_three')) : ?>
                                <h2 class="text-2xl font-bold  lg:text-3xl">
                                    <?php echo esc_html($heading_section_three); ?>
                                </h2>
                            <?php endif; ?>
                        </div>

                        <div class="py-8 max-w-5xl xl:max-w-7xl mx-auto flex justify-center items-center">
                            <?php if (have_rows('content_section_three')) : ?>
                                <?php while (have_rows('content_section_three')) : the_row(); ?>

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                                        <!-- Image -->
                                        <?php
                                        $image = get_sub_field('image');
                                        if ($image) : ?>
                                            <div class="mb-10 lg:mb-0 max-w-md lg:max-w-sm mx-auto">
                                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="max-w-full " />
                                            </div>
                                        <?php endif; ?>

                                        <!-- Content -->
                                        <div class="flex flex-col gap-6 lg:justify-start lg:items-start">
                                            <div class="max-w-lg mx-auto lg:w-full lg:max-w-none space-y-5">
                                                <?php if (have_rows('items')) : ?>
                                                    <?php while (have_rows('items')) : the_row(); ?>

                                                        <div class="flex items-start justify-start gap-3">
                                                            <?php if ($icon = get_sub_field('icon')) : ?>
                                                                <div class="text-white self-start flex justify-center items-center text-base bg-header-dark-overlay rounded-full w-7 h-7 ">
                                                                    <?php echo $icon; ?>
                                                                </div>
                                                            <?php endif; ?>
                                                            <?php if ($title = get_sub_field('title')) : ?>
                                                                <span class="font-medium text-left block ">
                                                                    <?php echo esc_html($title); ?>
                                                                </span>
                                                            <?php endif; ?>
                                                        </div>

                                                    <?php endwhile; ?>
                                                <?php endif; ?>
                                            </div>
                                            <?php
                                            $link = get_sub_field('button');
                                            if ($link) :
                                                $link_url = $link['url'];
                                                $link_title = $link['title'];
                                                $link_target = $link['target'] ? $link['target'] : '_self';
                                                ?>
                                                <div class="self-center lg:self-start">
                                                    <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>">
                                                        <button class="py-3 hover:border-header-dark-overlay duration-500 transition hover:bg-transparent px-8 border rounded-full border-transparent bg-header-dark-overlay text-xs sm:text-base block whitespace-nowrap font-medium">
                                                            <?php echo esc_html($link_title); ?>
                                                        </button>
                                                    </a>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>

                </section>
            <?php
                 }
            endwhile; ?>
        <?php endif; ?>




        <!-- SECTION FOUR - GUARANTEE -->
        <?php if (have_rows('section_eight')) : ?>
            <?php while (have_rows('section_eight')) : the_row(); 
            
              $id_section_eight = get_sub_field('id_section_eight');
               if ($id_section_eight) { ?>
                <section id="<?php if ($id_section_eight = get_sub_field('id_section_eight')) : ?><?php echo esc_html($id_section_eight); ?><?php endif; ?>" class="px-6 lg:px-10 bg-gray-100">

                    <div class="text-center lg:max-w-6xl mx-auto max-w-2xl py-14 lg:py-20 xl:py-28">
                        <!-- Content -->
                        <div class="max-w-4xl mx-auto">
                            <?php if ($heading_section_eight = get_sub_field('heading_section_eight')) : ?>
                                <h2 class="text-2xl font-bold  lg:text-3xl">
                                    <?php echo esc_html($heading_section_eight); ?>
                                </h2>
                            <?php endif; ?>
                        </div>

                        <?php if (have_rows('content_section_eight')) : ?>
                            <?php while (have_rows('content_section_eight')) : the_row(); ?>

                                <div class="py-8 max-w-5xl xl:max-w-7xl mx-auto flex justify-center items-center">

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-10 place-content-center place-items-center">
                                        <!-- Content -->
                                        <div class=" text-center space-y-4">
                                            <?php if ($sub_heading = get_sub_field('sub_heading')) : ?>
                                                <p class=" md:text-lg lg:text-2xl ">
                                                    <?php echo $sub_heading; ?>
                                                </p>
                                            <?php endif; ?>
                                            <?php
                                            $link = get_sub_field('button');
                                            if ($link) :
                                                $link_url = $link['url'];
                                                $link_title = $link['title'];
                                                $link_target = $link['target'] ? $link['target'] : '_self';
                                                ?>
                                                <a class="block" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                                            <?php endif; ?>
                                            <?php if ($paragraph = get_sub_field('paragraph')) : ?>
                                                <p class="  lg:text-lg "><?php echo $paragraph; ?></p>
                                            <?php endif; ?>
                                        </div>
                                        <!-- Image -->
                                        <div class=" ">
                                            <?php
                                            $image = get_sub_field('image');
                                            if ($image) : ?>
                                                <div class="max-w-md lg:max-w-sm  mx-auto">
                                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="max-w-full" />
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>

                            <?php endwhile; ?>
                        <?php endif; ?>

                    </div>

                </section>
               <?php
                 }
            endwhile; ?>
        <?php endif; ?>

          

        <!-- SECTION FIVE - BONUSES -->
        <?php if (have_rows('section_nine')) : ?>
            <?php while (have_rows('section_nine')) : the_row();

              $id_section_nine = get_sub_field('id_section_nine');
               if ($id_section_nine) { ?>
                <section id="<?php if ($id_section_nine = get_sub_field('id_section_nine')) : ?><?php echo esc_html($id_section_nine); ?><?php endif; ?>" class="px-6 lg:px-10 bg-gray-100">

                    <div class="text-center lg:max-w-6xl mx-auto max-w-2xl py-14 lg:py-20 xl:py-28">
                        <!-- Content -->
                        <div class="max-w-4xl mx-auto">
                            <?php if ($heading_section_nine = get_sub_field('heading_section_nine')) : ?>
                                <h2 class="text-2xl font-bold  lg:text-3xl">
                                    <?php echo esc_html($heading_section_nine); ?>
                                </h2>
                            <?php endif; ?>
                        </div>

                        <?php if (have_rows('content_section_nine')) : ?>
                            <?php while (have_rows('content_section_nine')) : the_row(); ?>
                                <div class="py-8 max-w-5xl mx-auto flex justify-center items-center">

                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-10 place-content-center place-items-center">
                                        <!-- Content -->
                                        <?php if (have_rows('items')) : ?>
                                            <?php while (have_rows('items')) : the_row(); ?>

                                                <?php
                                                $image = get_sub_field('image');
                                                if ($image) : ?>
                                                    <div class="max-w-md lg:max-w-sm  mx-auto">
                                                        <img src="<?php echo esc_url($image['url']); ?>" class="max-w-full " alt="<?php echo esc_attr($image['alt']); ?>" />
                                                    </div>
                                                <?php endif; ?>

                                            <?php endwhile; ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>

                    </div>

                </section>
             <?php
                 }
            endwhile; ?>
        <?php endif; ?>



        <!-- SECTION SIX - WHO BOOK IS FOR -->
        <?php if (have_rows('section_four')) : ?>
            <?php while (have_rows('section_four')) : the_row(); 
            
              $id_section_four = get_sub_field('id_section_four');
               if ($id_section_four) { ?>

                <section id="<?php if ($id_section_four = get_sub_field('id_section_four')) : ?><?php echo esc_html($id_section_four); ?><?php endif; ?>" class="px-6 lg:px-10">

                    <div class="text-center lg:max-w-6xl mx-auto max-w-lg py-14 lg:py-20 xl:py-28">
                        <!-- Content -->
                        <div class="max-w-4xl mx-auto">
                            <?php if ($heading_section_four = get_sub_field('heading_section_four')) : ?>
                                <h2 class="text-2xl font-bold  lg:text-2xl ">
                                    <?php echo esc_html($heading_section_four); ?>
                                </h2>
                            <?php endif; ?>

                            <?php if ($paragraph_section_four = get_sub_field('paragraph_section_four')) : ?>
                                <p class="py-2 md:text-lg lg:text-xl ">
                                    <?php echo $paragraph_section_four; ?>
                                </p>
                            <?php endif; ?>

                        </div>

                        <?php if (have_rows('content_section_four')) : ?>

                            <!-- Columns -->
                            <div class="py-8 flex justify-center items-center">
                                <?php while (have_rows('content_section_four')) : the_row(); ?>
                                    <div class="space-y-5 max-w-lg mx-auto  w-full flex flex-col justify-center items-center">
                                        <!-- Columns -->
                                        <?php if (have_rows('items')) : ?>
                                            <?php while (have_rows('items')) : the_row(); ?>
                                                <div class=" space-y-5 ">
                                                    <div class="flex items-start  gap-3 justify-center">
                                                        <?php if ($icon = get_sub_field('icon')) : ?>
                                                            <span class="text-2xl text-header-dark-overlay ">
                                                                <?php echo get_sub_field('icon'); ?>
                                                            </span>
                                                        <?php endif; ?>
                                                        <div class="text-left ">
                                                            <?php if ($title = get_sub_field('title')) : ?>
                                                                <h5 class="text-lg xl:text-xl font-bold ">
                                                                    <?php the_sub_field("title") ?>
                                                                </h5>
                                                            <?php endif; ?>
                                                            <?php if ($description = get_sub_field('description')) : ?>
                                                                <span class="font-medium block text-base lg:text-lg">
                                                                    <?php echo $description; ?>
                                                                </span>
                                                            <?php endif; ?>
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

                </section>
              <?php
                 }
            endwhile; ?>
        <?php endif; ?>



        <!-- SECTION SEVEN - FAQ -->
        <?php if (have_rows('section_ten')) : ?>
            <?php while (have_rows('section_ten')) : the_row();
            
              $id_section_ten = get_sub_field('id_section_ten');
               if ($id_section_ten) { ?>

                <section id="<?php if ($id_section_ten = get_sub_field('id_section_ten')) : ?><?php echo esc_html($id_section_ten); ?><?php endif; ?>" class="px-6 lg:px-10 bg-gray-100">

                    <div class="text-center lg:max-w-6xl mx-auto max-w-2xl py-14 lg:py-20 xl:py-28">
                        <!-- Content -->
                        <div class="max-w-4xl mx-auto">
                            <?php if ($heading_section_ten = get_sub_field('heading_section_ten')) : ?>
                                <h2 class="text-2xl font-bold  lg:text-3xl">
                                    <?php echo esc_html($heading_section_ten); ?>
                                </h2>
                            <?php endif; ?>
                        </div>

                        <?php if (have_rows('items')) : ?>
                            <div class="py-8 max-w-5xl xl:max-w-7xl mx-auto ">
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-10 ">
                                    <?php while (have_rows('items')) : the_row(); ?>

                                        <!-- Content -->
                                        <div class="text-left">
                                            <?php if ($title = get_sub_field('title')) : ?>
                                                <h4 class="font-bold text-lg md:text-xl  py-2 mb-5">
                                                    <?php echo esc_html($title); ?>
                                                </h4>
                                            <?php endif; ?>
                                            <div class="space-y-5 font-medium  md:text-lg">
                                                <?php if ($description = get_sub_field('description')) : ?>
                                                    <?php echo $description; ?>
                                                <?php endif; ?>
                                            </div>
                                        </div>

                                    <?php endwhile; ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>

                </section>
                 <?php
                 }
            endwhile; ?>
        <?php endif; ?>


        <!-- SECTION FIVE - FORM -->
        <?php if (have_rows('section_five')) : ?>
            <?php while (have_rows('section_five')) : the_row();
            
            $id_section_five = get_sub_field('id_section_five');
               if ($id_section_five) { ?>
                <section id="<?php if ($id_section_five = get_sub_field('id_section_five')) : ?><?php echo esc_html($id_section_five); ?><?php endif; ?>" class="px-6 lg:px-10">

                    <div class="text-center lg:max-w-6xl mx-auto max-w-lg xl:pb-10 py-14 lg:py-20 xl:py-28">
                        <div class="bg-gray-200 p-10 max-w-4xl mx-auto">

                            <!-- Content -->
                            <?php if ($heading_section_five = get_sub_field('heading_section_five')) : ?>
                                <h2 class="text-2xl font-bold  lg:text-3xl">
                                    <?php echo esc_html($heading_section_five); ?>
                                </h2>
                            <?php endif; ?>

                            <?php if ($paragraph_section_five = get_sub_field('paragraph_section_five')) : ?>
                                <div class="max-w-lg xl:max-w-2xl  py-2 mx-auto ">
                                    <p class="md:text-lg ">
                                        <?php echo $paragraph_section_five; ?>
                                    </p>
                                </div>
                            <?php endif; ?>

                            <!-- Form  -->
                            <?php if ($newsletter_section_five = get_sub_field('newsletter_section_five')) : ?>
                                <div class="py-4">
                                    <?php echo $newsletter_section_five; ?>
                                </div>
                            <?php endif; ?>

                            <!-- Commented out form section
                            <form action="" class="">
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
                            </form>
                            -->

                        </div>
                    </div>

                </section>
            <?php
                 }
            endwhile; ?>
        <?php endif; ?>


         <!-- SECTION SIX - REVIEWS -->
        <?php if (have_rows('section_six')) : ?>
            <?php while (have_rows('section_six')) : the_row(); 
            
              $id_section_six = get_sub_field('id_section_six');
               if ($id_section_six) { ?>

                <section id="<?php if ($id_section_six = get_sub_field('id_section_six')) : ?><?php echo esc_html($id_section_six); ?><?php endif; ?>"     class="px-6 lg:px-10 bg-gray-100">
                    <!-- Content -->

                    <div class="text-center lg:max-w-6xl mx-auto py-14 lg:py-20 xl:py-28">

                        <div class="mx-auto pb-10 max-w-lg">
                            <?php if ($heading_section_six = get_sub_field('heading_section_six')) : ?>
                                <h2 class="text-2xl font-bold  lg:text-3xl">
                                    <?php echo esc_html($heading_section_six); ?>
                                </h2>
                            <?php endif; ?>

                            <?php if ($paragraph_section_six = get_sub_field('paragraph_section_six')) : ?>
                                <p class="py-2 md:text-lg lg:text-xl ">
                                    <?php echo $paragraph_section_six; ?>
                                </p>
                            <?php endif; ?>

                        </div>


                        <div class="py-8 w-full flex justify-center items-center">
                            <div class="lg:max-w-6xl grid grid-cols-1 space-y-8 gap-10">
                                <!-- cols - 1  -->

                                <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">

                                    <?php
                                    if ($posts) : ?>
                                        <?php
                                        $testimonials = get_sub_field('testimonial_section_six');


                                        foreach ($testimonials as $testimonial) :
                                            setup_postdata($testimonials);
                                            $title = get_the_title($testimonial->ID);

                                            $role_field = get_field('reviews_role', $testimonial->ID);
                                        ?>

                                            <div class="flex flex-col relative items-center xl:items-start justify-center p-3 space-y-5   bg-gray-200">
                                                <div class="absolute self-center top-[-35px] flex justify-center items-center p-2.5 rounded-full bg-header-dark-overlay text-white">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-quote text-white" width="44" height="44" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z"></path>
                                                        <path d="M10 11h-4a1 1 0 0 1 -1 -1v-3a1 1 0 0 1 1 -1h3a1 1 0 0 1 1 1v6c0 2.667 -1.333 4.333 -4 5"></path>
                                                        <path d="M19 11h-4a1 1 0 0 1 -1 -1v-3a1 1 0 0 1 1 -1h3a1 1 0 0 1 1 1v6c0 2.667 -1.333 4.333 -4 5"></path>
                                                    </svg>
                                                </div>
                                                <blockquote class="text-center xl:text-left italic text-base">
                                                    <?php echo $testimonial->post_content; ?>
                                                </blockquote>
                                                <div class="flex flex-col items-center lg:flex-row  ">
                                                    <div class="relative  w-[70px] h-[70px] mr-2 ">
                                                        <img src="<?php echo get_the_post_thumbnail_url($testimonial->ID, 'thumbnail'); ?>" alt="<?php echo $title; ?>" class="max-w-full absolute top-0 left-0 object-cover object-center rounded-full">
                                                    </div>
                                                    <p class="text-center lg:text-left pt-3">
                                                        <span class="block text-sm font-semibold"><?php echo $title; ?></span>
                                                        <span class="block text-sm">
                                                            <?php echo esc_html($role_field); ?>
                                                        </span>
                                                    </p>
                                                </div>
                                            </div>

                                        <?php endforeach; ?>
                                        <?php wp_reset_postdata(); ?>
                                    <?php endif; ?>
                                </div>

                                <?php
                                $link = get_sub_field('button_section_six');
                                if ($link) :
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                ?>
                                    <a class="flex   place-self-center justify-center items-center " href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>">
                                        <button class="py-3 sm:text-base  hover:border-header-dark-overlay duration-500 transition hover:bg-transparent px-8 border rounded-full border-transparent bg-header-dark-overlay text-xs block whitespace-nowrap font-medium">
                                            <?php echo esc_html($link_title); ?>
                                        </button>
                                    </a>
                                <?php endif; ?>

                            </div>
                        </div>


                    </div>

                </section>
             <?php
                 }
            endwhile; ?>
        <?php endif; ?>


        <!-- SECTION SEVEN - Author -->
        <?php if (have_rows('section_seven')) : ?>
            <?php while (have_rows('section_seven')) : the_row(); 
            
                $id_section_seven = get_sub_field('id_section_seven');
               if ($id_section_seven) { ?>
                <section  id="<?php if ($id_section_seven = get_sub_field('id_section_seven')) : ?><?php echo esc_html($id_section_seven); ?><?php endif; ?>" class="px-6 lg:px-10  text-black  ">

                    <div class="text-center md:max-w-4xl mx-auto py-14 lg:py-20 xl:py-28">
                        <div class="py-8 w-full flex flex-col justify-center items-center">
                            <?php
                            $image_section_seven = get_sub_field('image_section_seven');
                            if ($image_section_seven) : ?>
                                <img src="<?php echo esc_url($image_section_seven['url']); ?>" alt="<?php echo esc_attr($image_section_seven['alt']); ?>" class="max-w-full w-24 h-24 lg:w-32 lg:h-32 rounded-full mb-2 md:mr-2" />
                            <?php endif; ?>


                            <div class="space-y-3 py-5">
                                <?php if ($heading_section_seven = get_sub_field('heading_section_seven')) : ?>
                                    <h3 class="text-lg lg:text-3xl font-bold font-Sohne-Bold">
                                        <?php echo esc_html($heading_section_seven); ?>
                                    </h3>
                                <?php endif; ?>

                                <?php if (have_rows('paragraph_section_seven')) : ?>
                                    <?php while (have_rows('paragraph_section_seven')) : the_row(); ?>


                                        <?php if ($paragraph = get_sub_field('paragraph')) : ?>

                                            <p class="py-2 md:text-lg lg:text-xl ">
                                                <?php echo $paragraph; ?>

                                            </p>
                                        <?php endif; ?>


                                    <?php endwhile; ?>
                                <?php endif; ?>

                                <?php if (have_rows('links_section_seven')) : ?>
                                    <?php while (have_rows('links_section_seven')) : the_row(); ?>

                                        <div class="py-2.5 ">

                                            <?php if ($title = get_sub_field('title')) : ?>
                                                <h5 class="mb-5 font-bold text-lg">
                                                    <?php echo esc_html($title); ?>

                                                </h5>
                                            <?php endif; ?>


                                            <div class="flex gap-5 justify-center items-center">

                                                <?php if (have_rows('social_link')) : ?>
                                                    <?php while (have_rows('social_link')) : the_row();
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

                </section>
             <?php
                 }
            endwhile; ?>
        <?php endif; ?>





</main>

<?php
get_footer();

