<?php

add_action( 'wp_enqueue_scripts', 'chaplin_enqueue_scripts' );
function chaplin_enqueue_scripts() {
 
    $parent_style = 'parent-style'; // This is 'chaplin-style' for the Twenty Fifteen theme.
 
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( $parent_style ), wp_get_theme()->get('Version') );
	wp_enqueue_style( 'owl-carousel', get_stylesheet_directory_uri() . '/assets/css/owl.carousel.min.css' );
	wp_enqueue_style( 'font-awesome', get_stylesheet_directory_uri() . '/assets/css/fontawesome/css/all.min.css' );
	wp_dequeue_script( 'chaplin-construct' );
	
	$theme_version = wp_get_theme()->get( 'Version' );
	$js_dependencies = array( 'jquery', 'imagesloaded' );
	wp_enqueue_script( 'chaplin-construct', get_stylesheet_directory_uri() . '/assets/js/construct.js', $js_dependencies, $theme_version );
	wp_enqueue_script( 'owl-carousel', get_stylesheet_directory_uri() . '/assets/js/owl.carousel.min.js', $js_dependencies, $theme_version );
}

add_action( 'wp_head', 'add_audio_player_style' );
function add_audio_player_style() { ?>
	<style type="text/css">
		<?php if( get_option('audio_player_icon_color') !== '' ) { ?>
			body .wp-block-audio .mejs-controls .mejs-play > button,
			body .wp-block-audio .mejs-controls .mejs-playpause-button.mejs-replay > button,
			body .wp-block-audio .mejs-controls .mejs-pause > button,
			body .wp-audio-player .mejs-controls .mejs-play > button,
			body .wp-audio-player .mejs-controls .mejs-playpause-button.mejs-replay > button,
			body .wp-audio-player .mejs-controls .mejs-pause > button {
				color: <?php echo get_option('audio_player_icon_color'); ?>
			}
		<?php } ?>
	
		<?php if( get_option('audio_player_icon_bg_color') !== '' ) { ?>
			body .wp-block-audio .mejs-controls .mejs-play > button,
			body .wp-block-audio .mejs-controls .mejs-playpause-button.mejs-replay > button,
			body .wp-block-audio .mejs-controls .mejs-pause > button,
			body .wp-audio-player .mejs-controls .mejs-play > button,
			body .wp-audio-player .mejs-controls .mejs-replay > button,
			body .wp-audio-player .mejs-controls .mejs-pause > button			{
				background-color: <?php echo get_option('audio_player_icon_bg_color'); ?>
			}
		<?php } ?>
		
		<?php if( get_option('audio_player_text_color') !== '' ) { ?>
			body .wp-block-audio > figcaption > div, .wp-audio-title > div,
			body .wp-block-audio .mejs-time.mejs-currenttime-container,
			body .wp-block-audio .mejs-time.mejs-duration-container,
			body .wp-audio-player > figcaption > div, .wp-audio-title > div,
			body .wp-audio-player .mejs-time.mejs-currenttime-container,
			body .wp-audio-player .mejs-time.mejs-duration-container {
				color: <?php echo get_option('audio_player_text_color'); ?>
			}
		<?php } ?>
		
		<?php if( get_option('audio_player_prg_bg_color') !== '' ) { ?>
			body .wp-block-audio .mejs-controls .mejs-time-rail .mejs-time-total > .mejs-time-loaded,
			body .wp-audio-player .mejs-controls .mejs-time-rail .mejs-time-total > .mejs-time-loaded {
				background-color: <?php echo get_option('audio_player_prg_bg_color'); ?>
			}
		<?php } ?>
		
		<?php if( get_option('audio_player_prg_color') !== '' ) { ?>
			body .wp-block-audio .mejs-controls .mejs-time-rail .mejs-time-total > .mejs-time-current,
			body .wp-audio-player .mejs-controls .mejs-time-rail .mejs-time-total > .mejs-time-current {
				background-color: <?php echo get_option('audio_player_prg_color'); ?>
			}
		<?php } ?>
		
		<?php if( get_option('audio_player_prg_hover_color') !== '' ) { ?>
			body .wp-block-audio .mejs-controls .mejs-time-rail .mejs-time-total > .mejs-time-hovered,
			body .wp-audio-player .mejs-controls .mejs-time-rail .mejs-time-total > .mejs-time-hovered {
				background-color: <?php echo get_option('audio_player_prg_hover_color'); ?>
			}
		<?php } ?>
		
		<?php if( get_option('audio_player_prg_boxshadow_color') !== '' || get_option('audio_player_prg_boxshadow_spread') !== '' || get_option('audio_player_prg_boxshadow_blur') !== '' ) { ?>
			body .grid-item .preview-media .wp-block-audio .mejs-container,
			body .wp-block-audio .mejs-container,
			body .ap-single-post .wp-audio-player .mejs-container {
				<?php if( get_option('audio_player_prg_boxshadow_color') !== '' && get_option('audio_player_prg_boxshadow_spread') !== '' && get_option('audio_player_prg_boxshadow_blur') !== '') { ?>
					box-shadow: 0px 0px <?php echo get_option('audio_player_prg_boxshadow_blur') .'px '. get_option('audio_player_prg_boxshadow_spread') .'px '. get_option('audio_player_prg_boxshadow_color'); ?>
				<?php } else if( get_option('audio_player_prg_boxshadow_color') !== '' && get_option('audio_player_prg_boxshadow_spread') ) { ?>
					box-shadow: 0px 0px 8px <?php echo get_option('audio_player_prg_boxshadow_spread') .'px '. get_option('audio_player_prg_boxshadow_color'); ?>
				<?php } else if( get_option('audio_player_prg_boxshadow_color') !== '' && get_option('audio_player_prg_boxshadow_blur') ) { ?>
					box-shadow: 0px 0px <?php echo get_option('audio_player_prg_boxshadow_spread') .'px 0px '. get_option('audio_player_prg_boxshadow_color'); ?>
				<?php } else if( get_option('audio_player_prg_boxshadow_spread') !== '' && get_option('audio_player_prg_boxshadow_blur') !== '' ) { ?>
					box-shadow: 0px 0px <?php echo get_option('audio_player_prg_boxshadow_blur') .'px '. get_option('audio_player_prg_boxshadow_spread') .'px'; ?> #7b7979;
				<?php } else if (get_option('audio_player_prg_boxshadow_blur') !== '') { ?>
					box-shadow: 0px 0px <?php echo get_option('audio_player_prg_boxshadow_blur') .'px'; ?> 8px #7b7979;
				<?php } else if (get_option('audio_player_prg_boxshadow_spread') !== '') { ?>
					box-shadow: 0px 0px 8px <?php echo get_option('audio_player_prg_boxshadow_spread') .'px'; ?> #7b7979;
				<?php } else if (get_option('audio_player_prg_boxshadow_color') !== '') { ?>
					box-shadow: 0px 0px 8px 0px <?php echo get_option('audio_player_prg_boxshadow_color'); ?>;
				<?php } ?>
			}
		<?php } ?>
	</style>
	<?php
}

if ( ! function_exists( 'chaplin_child_ajax_load_more' ) ) :
	function chaplin_child_ajax_load_more() {

		$query_args = json_decode( wp_unslash( $_POST['json_data'] ), true );
		
		$ajax_query = new WP_Query( $query_args );

		// Determine which preview to use based on the post_type
		$post_type = $ajax_query->get( 'post_type' );

		// Default to the "post" post type for previews
		if ( ! $post_type || is_array( $post_type ) ) {
			$post_type = 'post';
		}

		if ( $ajax_query->have_posts() ) :
			
			$row = $query_args['posts_per_page'] * $query_args['paged'];
			$i = 1;
			$col = (int)$_POST['col'];
			
			while ( $ajax_query->have_posts() ) : $ajax_query->the_post();

				?>

				<div class="grid-item" data-row="<?php echo $row; ?>">

					<?php get_template_part( 'parts/preview', $post_type ); ?>

				</div><!-- .grid-item -->
				
				<?php if( $i++ % $col == 0 ) {
					echo '<div class="grid-item grid-row" id="grid-row' .$row++. '" style="display: none"></div>';
				} ?>

				<?php

			endwhile;

		endif;

		wp_die();

	}
	add_action( 'wp_ajax_nopriv_chaplin_child_ajax_load_more', 'chaplin_child_ajax_load_more' );
	add_action( 'wp_ajax_chaplin_child_ajax_load_more', 'chaplin_child_ajax_load_more' );
endif;

function wp_audio_with_title( $html, $atts ) {
	$meta = wp_get_attachment_metadata(attachment_url_to_postid($atts['src']));
	$title = '<div class="wp-audio-title"><div>' .$meta['title']. '</div></div>';
	return '<div class="wp-audio-player">' .$title.$html. '</div>';
}

add_filter( 'wp_audio_shortcode', 'wp_audio_with_title', 10, 2 );




function get_first_embed_media($post_id) {

    $post = get_post($post_id);
    $content = do_shortcode( apply_filters( 'the_content', $post->post_content ) );
    $embeds = get_media_embedded_in_content( $content );

    if( !empty($embeds) ) {
        //check what is the first embed containg video tag, youtube or vimeo
        foreach( $embeds as $embed ) {
            if( strpos( $embed, 'video' ) || strpos( $embed, 'youtube' ) || strpos( $embed, 'vimeo' ) ) {
                return $embed;
            }
        }

    } else {
        //No video embedded found
        return false;
    }

}

function get_first_img($post) {
	$dom = new DOMDocument;
	@$dom->loadHTML($post->post_content);
	$images = $dom->getElementsByTagName('img');
	foreach ($images as $image) {
		return $image->getAttribute('src');
	}
	return false;
}

function get_gallery($post) {
	$dom = new DOMDocument;
	@$dom->loadHTML($post->post_content);
	$images = $dom->getElementsByTagName('img');
	$return = array();
	
	if( sizeof($images) > 1 ) {
		foreach ($images as $image) {
			$return[] = $image->getAttribute('src');
		}
	} else {
		return false;
	}
	
	return $return;
}

require_once( 'inc/customizer.php' );

function wporg_remove_all_dashboard_metaboxes() {
    // Remove Welcome panel
    remove_action( 'welcome_panel', 'wp_welcome_panel' );
    // Remove the rest of the dashboard widgets
    remove_meta_box( 'dashboard_primary', 'dashboard', 'side' );
    remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
    remove_meta_box( 'health_check_status', 'dashboard', 'normal' );
    remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' );
    remove_meta_box( 'dashboard_activity', 'dashboard', 'normal');
}
add_action( 'wp_dashboard_setup', 'wporg_remove_all_dashboard_metaboxes' );

// ALLOW WORDPRESS DASHICONS ON FRONTEND
add_action( 'wp_enqueue_scripts', 'load_dashicons_front_end' );
function load_dashicons_front_end() {
wp_enqueue_style( 'dashicons' );
}


