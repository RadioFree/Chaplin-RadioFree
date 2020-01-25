<?php get_header(); ?>

<?php
	echo '<div class="wdg-top">';
		if( is_active_sidebar( 'ajax_masonry_top' ) ) dynamic_sidebar( 'ajax_masonry_top' );
	echo '</div>';
?>

<main id="site-content">

	<?php

	if ( have_posts() ) :

		while ( have_posts() ) : the_post();

			get_template_part( 'content', get_post_type() );

			// Display related posts
			get_template_part( 'parts/related-posts' );

		endwhile;

	endif;

	?>

</main><!-- #site-content -->

<script type="text/javascript">
	jQuery(document).ready(function($){
		// using jQuery
		if( $(document).find('.wp-block-video video').length ) {	
			$(document).find('.wp-block-video video').mediaelementplayer(/* Options */);
		}
		
		if( $(document).find('.wp-block-audio audio').length ) {
			$(document).find('.wp-block-audio audio').mediaelementplayer(/* Options */);
		}
		
		//$(window).load(function(){
			$('.wp-block-audio figcaption').each(function(){
				var htm = $(this).html();
				$(this).html('<div>' +htm+ '</div>');
			});
		//});
	});
</script>

<?php echo '<div class="wdg-bottom">';
		if( is_active_sidebar( 'ajax_masonry_bottom' ) ) dynamic_sidebar( 'ajax_masonry_bottom' );
	echo '</div>';
?>

<?php get_footer(); ?>