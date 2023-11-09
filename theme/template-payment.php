<?php
/**
 * Template Name: Payment 
 *

 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package durotheme
 */

get_header();
?>


    <main id="main">


        <section id="count-down" class="px-6 lg:px-10 overflow-x-hidden bg-gray-100">
            <div class="text-center lg:max-w-7xl mx-auto max-w-2xl py-14 lg:py-20">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                    <?php the_content(); ?>

                <?php endwhile; endif; ?>
            
            </div>
        </section>




</main>


<?php
get_footer();