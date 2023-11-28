<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Durodola_Abdulhad
 */

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function durodola_abdulhad_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'durodola_abdulhad_pingback_header' );

/**
 * Changes comment form default fields.
 *
 * @param array $defaults The default comment form arguments.
 *
 * @return array Returns the modified fields.
 */
function durodola_abdulhad_comment_form_defaults( $defaults ) {
	$comment_field = $defaults['comment_field'];

	// Adjust height of comment form.
	$defaults['comment_field'] = preg_replace( '/rows="\d+"/', 'rows="5"', $comment_field );

	return $defaults;
}
add_filter( 'comment_form_defaults', 'durodola_abdulhad_comment_form_defaults' );

/**
 * Filters the default archive titles.
 */
function durodola_abdulhad_get_the_archive_title() {
	if ( is_category() ) {
		$title = __( 'Category Archives: ', 'durodola-abdulhad' ) . '<span>' . single_term_title( '', false ) . '</span>';
	} elseif ( is_tag() ) {
		$title = __( 'Tag Archives: ', 'durodola-abdulhad' ) . '<span>' . single_term_title( '', false ) . '</span>';
	} elseif ( is_author() ) {
		$title = __( 'Author Archives: ', 'durodola-abdulhad' ) . '<span>' . get_the_author_meta( 'display_name' ) . '</span>';
	} elseif ( is_year() ) {
		$title = __( 'Yearly Archives: ', 'durodola-abdulhad' ) . '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'durodola-abdulhad' ) ) . '</span>';
	} elseif ( is_month() ) {
		$title = __( 'Monthly Archives: ', 'durodola-abdulhad' ) . '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'durodola-abdulhad' ) ) . '</span>';
	} elseif ( is_day() ) {
		$title = __( 'Daily Archives: ', 'durodola-abdulhad' ) . '<span>' . get_the_date() . '</span>';
	} elseif ( is_post_type_archive() ) {
		$cpt   = get_post_type_object( get_queried_object()->name );
		$title = sprintf(
			/* translators: %s: Post type singular name */
			esc_html__( '%s Archives', 'durodola-abdulhad' ),
			$cpt->labels->singular_name
		);
	} elseif ( is_tax() ) {
		$tax   = get_taxonomy( get_queried_object()->taxonomy );
		$title = sprintf(
			/* translators: %s: Taxonomy singular name */
			esc_html__( '%s Archives', 'durodola-abdulhad' ),
			$tax->labels->singular_name
		);
	} else {
		$title = __( 'Archives:', 'durodola-abdulhad' );
	}
	return $title;
}
add_filter( 'get_the_archive_title', 'durodola_abdulhad_get_the_archive_title' );

/**
 * Determines whether the post thumbnail can be displayed.
 */
function durodola_abdulhad_can_show_post_thumbnail() {
	return apply_filters( 'durodola_abdulhad_can_show_post_thumbnail', ! post_password_required() && ! is_attachment() && has_post_thumbnail() );
}

/**
 * Returns the size for avatars used in the theme.
 */
function durodola_abdulhad_get_avatar_size() {
	return 60;
}

/**
 * Create the continue reading link
 *
 * @param string $more_string The string shown within the more link.
 */
function durodola_abdulhad_continue_reading_link( $more_string ) {

	if ( ! is_admin() ) {
		$continue_reading = sprintf(
			/* translators: %s: Name of current post. */
			wp_kses( __( 'Continue reading %s', 'durodola-abdulhad' ), array( 'span' => array( 'class' => array() ) ) ),
			the_title( '<span class="sr-only">"', '"</span>', false )
		);

		$more_string = '<a href="' . esc_url( get_permalink() ) . '">' . $continue_reading . '</a>';
	}

	return $more_string;
}

// Filter the excerpt more link.
add_filter( 'excerpt_more', 'durodola_abdulhad_continue_reading_link' );

// Filter the content more link.
add_filter( 'the_content_more_link', 'durodola_abdulhad_continue_reading_link' );

/**
 * Outputs a comment in the HTML5 format.
 *
 * This function overrides the default WordPress comment output in HTML5
 * format, adding the required class for Tailwind Typography. Based on the
 * `html5_comment()` function from WordPress core.
 *
 * @param WP_Comment $comment Comment to display.
 * @param array      $args    An array of arguments.
 * @param int        $depth   Depth of the current comment.
 */
function durodola_abdulhad_html5_comment( $comment, $args, $depth ) {
	$tag = ( 'div' === $args['style'] ) ? 'div' : 'li';

	$commenter          = wp_get_current_commenter();
	$show_pending_links = ! empty( $commenter['comment_author'] );

	if ( $commenter['comment_author_email'] ) {
		$moderation_note = __( 'Your comment is awaiting moderation.', 'durodola-abdulhad' );
	} else {
		$moderation_note = __( 'Your comment is awaiting moderation. This is a preview; your comment will be visible after it has been approved.', 'durodola-abdulhad' );
	}
	?>
	<<?php echo esc_attr( $tag ); ?> id="comment-<?php comment_ID(); ?>" <?php comment_class( $comment->has_children ? 'parent' : '', $comment ); ?>>
		<article id="div-comment-<?php comment_ID(); ?>" class="comment-body">
			<footer class="comment-meta">
				<div class="comment-author vcard">
					<?php
					if ( 0 !== $args['avatar_size'] ) {
						echo get_avatar( $comment, $args['avatar_size'] );
					}
					?>
					<?php
					$comment_author = get_comment_author_link( $comment );

					if ( '0' === $comment->comment_approved && ! $show_pending_links ) {
						$comment_author = get_comment_author( $comment );
					}

					printf(
						/* translators: %s: Comment author link. */
						wp_kses_post( __( '%s <span class="says">says:</span>', 'durodola-abdulhad' ) ),
						sprintf( '<b class="fn">%s</b>', wp_kses_post( $comment_author ) )
					);
					?>
				</div><!-- .comment-author -->

				<div class="comment-metadata">
					<?php
					printf(
						'<a href="%s"><time datetime="%s">%s</time></a>',
						esc_url( get_comment_link( $comment, $args ) ),
						esc_attr( get_comment_time( 'c' ) ),
						esc_html(
							sprintf(
							/* translators: 1: Comment date, 2: Comment time. */
								__( '%1$s at %2$s', 'durodola-abdulhad' ),
								get_comment_date( '', $comment ),
								get_comment_time()
							)
						)
					);

					edit_comment_link( __( 'Edit', 'durodola-abdulhad' ), ' <span class="edit-link">', '</span>' );
					?>
				</div><!-- .comment-metadata -->

				<?php if ( '0' === $comment->comment_approved ) : ?>
				<em class="comment-awaiting-moderation"><?php echo esc_html( $moderation_note ); ?></em>
				<?php endif; ?>
			</footer><!-- .comment-meta -->

			<div <?php durodola_abdulhad_content_class( 'comment-content' ); ?>>
				<?php comment_text(); ?>
			</div><!-- .comment-content -->

			<?php
			if ( '1' === $comment->comment_approved || $show_pending_links ) {
				comment_reply_link(
					array_merge(
						$args,
						array(
							'add_below' => 'div-comment',
							'depth'     => $depth,
							'max_depth' => $args['max_depth'],
							'before'    => '<div class="reply">',
							'after'     => '</div>',
						)
					)
				);
			}
			?>
		</article><!-- .comment-body -->
	<?php
}





//custom post (Grpahics)
function graphicdesigns_post_type() {
	$args = array (
		'labels'      => array(
			'name'          => 'GraphicDesigns',
			'singular_name' => 'GraphicDesign',
		),
		'public'      => true,
		'hierarchical' => true,
		'has_archive' => true,
		'rewrite'     => array( 'slug' => 'graphics-visual-design' ),
		'supports' =>  array('title', 'editor', 'thumbnail', 'custom-fields'),
		
	);
	register_post_type('graphicsdesign', $args );
}
add_action('init', 'graphicdesigns_post_type');

//custom post (Product Design)
function productdesign_post_type() {
	$args = array (
		'labels'      => array(
			'name'          => 'ProductDesigns',
			'singular_name' => 'ProductDesign',
		),
		'public'      => true,
		'hierarchical' => true,
		'has_archive' => true,
		'rewrite'     => array( 'slug' => 'ui-ux-product-design' ),
		'supports' =>  array('title', 'editor', 'thumbnail', 'custom-fields'),
		
	);
	register_post_type('productdesigns', $args );
}
add_action('init', 'productdesign_post_type');



/** Skill Settings */
function skills_post_type() {

    $labels = array(
        'name'                  => _x( 'Skills', 'Post type general name', 'skill' ),
        'singular_name'         => _x( 'Skill', 'Post type singular name', 'skill' ),
        'menu_name'             => _x( 'Skills', 'Admin Menu text', 'skill' ),
        'name_admin_bar'        => _x( 'Skill', 'Add New on Toolbar', 'skill' ),
       
    );     
    $args = array(
        'labels'             => $labels,
        'description'        => 'Skill custom post type.',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'skill' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 20,
		'menu_icon'   => 'dashicons-hammer',
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'custom-fields' ),
        'show_in_rest'       => true
    );
     
    register_post_type( 'Skills', $args );
}
add_action( 'init', 'skills_post_type' );


/** Testimonials */
function testimonial_post_type() {

    $labels = array(
        'name'                  => _x( 'Testimonials', 'Post type general name', 'testimonial' ),
        'singular_name'         => _x( 'Testimonial', 'Post type singular name', 'testimonial' ),
        'menu_name'             => _x( 'Testimonials', 'Admin Menu text', 'testimonial' ),
        'name_admin_bar'        => _x( 'Testimonial', 'Add New on Toolbar', 'testimonial' ),
       
    );     
    $args = array(
        'labels'             => $labels,
        'description'        => 'Testimonial custom post type.',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'testimonial' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 20,
		'menu_icon'   => 'dashicons-testimonial',
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'custom-fields' ),
        'show_in_rest'       => true
    );
     
    register_post_type( 'testimonials', $args );
}
add_action( 'init', 'testimonial_post_type' );

