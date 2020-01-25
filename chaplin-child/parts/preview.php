<article <?php post_class( 'preview preview-' . get_post_type() ); ?> id="post-<?php the_ID(); ?>">

	<?php
	
	$extra_video = get_post_meta($post->ID, "__cbc_video_url", true); // Plugins Video
	
	$audio = get_post_meta($post->ID, "audio_file", true);
	
	if ($audio) $audio = '<audio controls="controls"><source src="'.$audio.'" type="audio/mpeg" /></audio> <script>$("audio").mediaelementplayer();</script>';
	
	
	$embeds = get_media_embedded_in_content( $post->post_content );
	//$audio = $embeds[0]; // First Audio
	
	//print_r(get_post_meta($post->ID));
	
	$video = get_first_embed_media( $post->ID ); // First Video
	
	$img = get_first_img( $post );
	$gallery = get_gallery( $post );
	
	//$fallback_image_url = chaplin_get_fallback_image_url();

	if ($extra_video=="")
	{
		if ( ( has_post_thumbnail() && ! post_password_required() ) || $fallback_image_url ) : ?>

			<figure class="preview-media">

				<?php

				$aspect_ratio = get_theme_mod( 'chaplin_preview_image_aspect_ratio', '16x10' );

				if ( has_post_thumbnail() && ! post_password_required() ) {
					$image_size = chaplin_get_preview_image_size();
					$image_url = get_the_post_thumbnail_url( $post->ID, $image_size );
				} else {
					$image_url = $fallback_image_url;
				}

				if ( $aspect_ratio !== 'original' ) : ?>

					<a href="<?php the_permalink(); ?>" class="faux-image aspect-ratio-<?php echo $aspect_ratio; ?>" style="background-image: url( <?php echo esc_attr( $image_url ); ?> );"></a>

				<?php else : ?>

					<?php if( $video ) {
						echo $video;
					} else {  
							if ( has_post_thumbnail() && ! post_password_required() ) {
								echo '<a href="' .get_the_permalink(). '">';
									the_post_thumbnail( $post->ID, $image_size );
								echo '</a>';
								if($audio) {
									echo '<figure class="wp-block-audio">' .$audio. '</figure>';
								}
							}else {
								if($audio)	echo '<figure class="wp-block-audio">' .$audio. '</figure>';
							}
							?>
						</a>
					<?php } ?>

				<?php endif; ?>

			</figure><!-- .preview-media -->

		<?php else: ?>
			<?php if( $video || $audio || $img ) { ?>
				<figure class="preview-media">
					<?php if( $video ) {
						echo $video;
					} else {  
						if ( $img ) {
							if( $gallery) { ?>
								<div class="owl-carousel owl-theme gal-item" id="owl-<?php echo $post->ID; ?>">
									<?php foreach($gallery as $item) { ?>
										<div class="item" style="background-image: url('<?php echo $item;?>')"><a href="<?php echo get_the_permalink(); ?>"></a></div>
									<?php } ?>
								</div>
								<script>
									$('#owl-<?php echo $post->ID; ?>').owlCarousel({
										loop:true,
										margin:10,
										nav:true,
										items: 1,
									});
								</script>
							<?php 
							} else {
								echo '<a href="' .get_the_permalink(). '">';
									echo '<img class="wp-post-image" src="' .$img. '" />'; 
								echo '</a>';
							}
							if($audio)	echo '<figure class="wp-block-audio">' .$audio. '</figure>';
						}else {
							if($audio)	echo '<figure class="wp-block-audio">' .$audio. '</figure>';
						}
					} ?>
				</figure>
			<?php } ?>
		<?php endif; ?>
	<?php }else{ ?>
<figure class="preview-media"><?php echo preg_replace("/\s*[a-zA-Z\/\/:\.]*youtube.com\/watch\?v=([a-zA-Z0-9\-_]+)([a-zA-Z0-9\/\*\-\_\?\&\;\%\=\.]*)/i","<iframe width=\"100%\" height=\"198\" src=\"//www.youtube.com/embed/$1\" frameborder=\"0\" allowfullscreen></iframe>",$extra_video); ?></figure>
	<?php } ?>

	<header class="preview-header">

		<?php 
		the_title( '<h2 class="preview-title heading-size-3"><a href="' . get_the_permalink() . '">', '</a></h2>' );

		
		
		if ( get_theme_mod( 'chaplin_display_excerpts', false ) ) :

			$excerpt = get_the_excerpt();

			if ( $excerpt ) : 
				?>

				<div class="preview-excerpt">
					<?php echo apply_filters( 'the_excerpt', $excerpt ); ?>
				</div><!-- .preview-excerpt -->

				<?php 
			endif;
		endif;

		chaplin_the_post_meta( $post->ID, 'archive' );
		?>

	</header><!-- .preview-header -->

</article><!-- .preview -->