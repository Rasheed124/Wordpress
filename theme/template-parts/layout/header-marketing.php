<?php
/**
 * Template part for displaying the header landingpage
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package themeduro
 */

?>

<!-- Marketing Banner  -->
        <?php if( have_rows('marketing_banner') ): ?>
            <?php while( have_rows('marketing_banner') ): the_row(); 

	             $marketing_banner = get_sub_field('image');
				$image_marketing = $marketing_banner['sizes']['large']
            ?>
            
        <header  class="p-3 ">
           <img src="<?php echo $image_marketing ?>" alt="" className="">
        </header>

          <?php endwhile; ?>
            <?php endif; ?>