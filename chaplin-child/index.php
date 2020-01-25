<?php get_header(); ?>

<!-- Global site tag (gtag.js) - Google Ads: 873421793 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-873421793"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-873421793');
</script>


<meta http-equiv="Content-Security-Policy" content="default-src 'none'; img-src 'self'; script-src 'self'; style-src 'self';">
<meta http-equiv="Referrer-Policy" content="no-referrer, strict-origin-when-cross-origin">

<main id="site-content" role="main">

	<?php

	$useragent=$_SERVER['HTTP_USER_AGENT'];
	$mobile = false;

if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))) {
		$mobile = true;
	}


	$archive_title = '';
	$archive_subtitle = '';
	
	if ( is_search() ) {
		global $wp_query;
		/* Translators: %s = The search query */
		$archive_title = sprintf( _x( 'Search: %s', '%s = The search query', 'chaplin' ), '&ldquo;' . get_search_query() . '&rdquo;' );
		if ( $wp_query->found_posts ) {
			/* Translators: %s = Number of results */
			$archive_subtitle = sprintf( _nx( 'We found %s result for your search.', 'We found %s results for your search.',  $wp_query->found_posts, '%s = Number of results', 'chaplin' ), $wp_query->found_posts );
		} else {
			$archive_subtitle = __( 'We could not find any results for your search. You can give it another try through the search form below.', 'chaplin' );
		}
	} else {
		$archive_title = get_the_archive_title();
		$archive_subtitle = get_the_archive_description( '<div>', '</div>' ); 
	}

	// Check if we're hiding the archive header on the blog page
	$show_home_header = get_theme_mod( 'chaplin_show_archive_header_on_home', true );
	
	if ( ( ! is_home() || is_home() && $show_home_header ) && ( $archive_title || $archive_subtitle ) ) : ?>
		
		<header class="archive-header section-inner">

			<?php if ( $archive_title ) : ?>
				<h1 class="archive-title"><?php echo wp_kses_post( $archive_title ); ?></h1>
			<?php endif; ?>

			<?php if ( $archive_subtitle ) : ?>
				<div class="archive-subtitle section-inner thin max-percentage intro-text"><?php echo wp_kses_post( wpautop( $archive_subtitle ) ); ?></div>
			<?php endif; ?>
			
		</header><!-- .archive-header -->

	<?php endif; ?>

	<div class="posts section-inner">
		<style type="text/css">
			.grid-item .preview-title a {
				text-transform: <?php echo get_theme_mod( 'chaplin_child_ajax_grid_post_headings_letter_case' ); ?>
			}
		</style>
		<?php if ( have_posts() ) : 

			$post_grid_column_classes = chaplin_get_post_grid_column_classes();
			$col = $mobile ? 1: (int)substr($post_grid_column_classes, -1);
			?>

			<div class="posts-grid grid load-more-target <?php echo $post_grid_column_classes; ?>" data-col="<?php echo $col; ?>">
				
				<?php $i = 1; $row = 1; ?>
				
				<?php while ( have_posts() ) : the_post(); ?>

					<div class="grid-item" data-row="<?php echo $row; ?>">
						
						<?php get_template_part( 'parts/preview', get_post_type() ); ?>

					</div><!-- .grid-item -->

					<?php if( $i++ % $col == 0 ) {
						echo '<div class="grid-item grid-row" id="grid-row' .$row++. '" style="display: none"></div>';
					} ?>
					
				<?php endwhile; ?>
				
				<?php echo '<div class="grid-item grid-row" id="grid-row' .$row++. '" style="display: none"></div>'; ?>
				
			</div><!-- .posts-grid -->

		<?php elseif ( is_search() ) : ?>

			<div class="no-search-results-form">

				<?php get_search_form(); ?>

			</div><!-- .no-search-results -->

		<?php endif; ?>
	
	</div><!-- .posts -->

	<?php get_template_part( 'pagination' ); ?>

</main><!-- #site-content -->

<script type="text/javascript">
	jQuery(document).ready(function ($){
		
		$(window).load( function(){
			if( $(document).find('.wp-block-audio audio').length ) {
				$(document).find('.wp-block-audio audio').mediaelementplayer(/* Options */);
			}
		});
		
		$(document).on('click', '.grid-item .preview-media a,.grid-item .preview-header a', function(e){
			e. preventDefault();
			
			var _document = $(document);
			var _this = $(this);
			var item_row = $(this).closest('.grid-item').data('row');
					
			_document.find('.grid-row').each( function(){
				$(this).hide().html('');
			});
			
			_document.find('.grid-item').each( function(){
				$(this).find('.preview-header').show();
			});
			
			setTimeout(function() { _this.closest('.grid-item').find('.preview-header').hide(); }, 300);
			
			//_document.find('#grid-row' + item_row).show().html('<div class="ap-single-post"><div class="ap-load-container"><span class="ap-loader"></span></div></div>');
			
			//$grid.isotope('layout');
			
			jQuery.ajax({
				type: "GET",
				url: _this.attr('href'),
				success: function(response){
					
					var parser = new DOMParser();
					var htmlDoc = parser.parseFromString(response, 'text/html');
					
					var stateObj = { foo: "bar" };
					var title = jQuery(response).filter('title').text();
					history.pushState(stateObj, title, _this.attr('href'));
					
					var body_classes = htmlDoc.body.getAttribute('class');
					
					if (~body_classes.indexOf("has-full-width-content")) {
						_document.find('#grid-row' + item_row).show().html('<div class="ap-single-post has-full-width-content">' +htmlDoc.getElementsByTagName("body")[0].innerHTML+ '</div>');
					} else {
						_document.find('#grid-row' + item_row).show().html('<div class="ap-single-post">' +htmlDoc.getElementsByTagName("body")[0].innerHTML+ '</div>');
					}
					
					_document.find('#grid-row' + item_row + ' .skip-link').remove();
					_document.find('#grid-row' + item_row + ' .ap-single-post > header').remove();
					_document.find('#grid-row' + item_row + ' footer').remove();
					_document.find('#grid-row' + item_row + ' #wpadminbar').hide();
					
					$('html, body').animate({
						scrollTop: $('#grid-row' + item_row).offset().top - 200
					}, 500);

					$.getScript("https://www.radiofree.org/wp-content/plugins/ccb-youtube/assets/front-end/js/video-player.js", function() {
   						//loaded
					});

				}
			});
			
		});
	});
</script>

<?php get_footer(); ?>