 <!-------------- BLOG -------------->
 <?php if( have_posts() ): while( have_posts() ): the_post();?>
    <div class="w-full bg-white shadow-md overflow-hidden">
        <?php if(has_post_thumbnail()):?>
        <img
            class="object-cover w-full h-56"
            src="<?php the_post_thumbnail_url();?>"
            alt="<?php the_title();?>"
            />
        <?php endif;?>
        <div class="relative px-5 py-7 flex flex-col">
            <h5 class="text-base font-medium text-gray-500"><?php echo get_the_date( 'jS F, Y' );?></h5>
            <h3 class="mt-4 text-xl font-medium">
                <?php the_title();?>
            </h3>
        
            <p class="mt-4 text-base text-gray">
                <?php the_excerpt() ;?>
            </p>
            <p class="mt-6 flex items-center justify-start">
                <a href="<?php the_permalink();?>" class="text-wine text-sm font-medium cursor-pointer">continue reading</a>
            </p>
        </div>
    </div>
<?php endwhile; else: endif; ?>