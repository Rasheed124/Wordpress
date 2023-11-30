<?php
/**
 * The header for our theme
 *
 * This is the template that displays the `head` element and everything up
 * until the `#content` element.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Durodola_Abdulhad
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">


	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body >

<?php wp_body_open(); ?>



<section>
    <?php if (have_rows('resume_page_settings')) : ?>
        <?php while (have_rows('resume_page_settings')) : the_row(); ?>

            <?php
            $id_resume_page_settings = get_sub_field('id');
            if ($id_resume_page_settings) :
            ?>

                <div class="overflow-y-hidden w-full h-full">
                    <?php
                    $file = get_sub_field('resume');
                    if ($file) :
                    ?>
                        <iframe class="overflow-y-hidden" src="<?php echo esc_url($file['url']); ?>" width="100%" height="800px"></iframe>
                    <?php endif; ?>
                </div>

            <?php endif; ?>

        <?php endwhile; ?>
    <?php endif; ?>
</section>







</body>
</html>
