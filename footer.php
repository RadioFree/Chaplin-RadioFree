           <style>
	
	
	/* ADDING SUPPORT FOR THE NEWSLETTER PLUGIN WIDGET */

.tnp-email::-webkit-input-placeholder::before {
	content:"Line 1\A";align-content
	}
	
.tnp-email {
  	top: -0px;
  position: relative;
  line-height: 2.0em !important;
	color: inherit;
	margin: 0 0 .8rem .8rem;
	display: flex;
	justify-content: space-between;
	width:72% !important;
	border: 2px;
	border-color: white;
}
.tnp-field label {
    display: none !important;
}
input.tnp-submit { 
	display: block;
  top: -40px;
  position: relative;
  line-height: 2.0em !important;
	margin: 0 0 .8rem .8rem;
	display: flex;
	justify-content: space-between;
  width: 26% !important;
	float: right !important;
}
.tnp-field.tnp-field-button {
  top: -20px !important;
  position: relative;
}
	.tnp-submit {
background-color: <?php echo get_theme_mod( 'chaplin_buttons_background_color' ); ?> !important;
	border-color: <?php echo get_theme_mod( 'chaplin_buttons_background_color' ); ?> !important;
}
	.tnp-email {
		color: <?php echo get_theme_mod( 'chaplin_primary_text_color' ); ?> !important;
background-color: transparent !important;
	border-color: <?php echo get_theme_mod( 'chaplin_buttons_background_color' ); ?> !important;
}
	.tnp-widget input.tnp-submit {
	color: <?php echo get_theme_mod( 'chaplin_buttons_text_color' ); ?> !important;  
			   }
	</style>


<?php

		$only_content_templates = array( 'template-only-content.php', 'template-full-width-only-content.php' );
		$show_footer = apply_filters( 'chaplin_show_header_footer_on_only_content_templates', false );

		// Don't output the markup of the footer on the only content templates, unless filtered to do so
		if ( ! is_page_template( $only_content_templates ) || $show_footer ) : ?>
		
			<footer id="site-footer" role="contentinfo">

				<?php if ( is_active_sidebar( 'footer-one' ) || is_active_sidebar( 'footer-two' ) ) : ?>

					<div class="footer-widgets-outer-wrapper border-color-border section-inner">
					
						<div class="footer-widgets-wrapper grid tcols-2">

							<?php if ( is_active_sidebar( 'footer-one' ) ) : ?>
								<div class="footer-widgets column-one grid-item">
									<?php dynamic_sidebar( 'footer-one' ); ?>
								</div>
							<?php endif; ?>

							<?php if ( is_active_sidebar( 'footer-two' ) ) : ?>
								<div class="footer-widgets column-two grid-item">
									<?php dynamic_sidebar( 'footer-two' ); ?>
								</div>
							<?php endif; ?>

						</div><!-- .footer-widgets-wrapper -->
						
					</div><!-- .footer-widgets-outer-wrapper -->

				<?php endif; 

				$has_footer_menu = has_nav_menu( 'footer-menu' );

				$footer_inner_classes = '';

				if ( $has_footer_menu ) {
					$footer_inner_classes .= ' has-footer-menu';
				}
				
				?>

				<div class="footer-inner section-inner<?php echo esc_attr( $footer_inner_classes ); ?>">

					<?php if ( $has_footer_menu ) : ?>

						<ul class="footer-menu reset-list-style">
							<?php
							wp_nav_menu( array(
								'container' 		=> '',
								'depth'				=> 1,
								'items_wrap' 		=> '%3$s',
								'theme_location' 	=> 'footer-menu',
							) );
							?>
						</ul><!-- .site-nav -->

					<?php endif; ?>
					<!-- .footer-credits -->
			

				
								 <?php
wp_nav_menu( array( 
    'theme_location' => 'left-footer-menu', 
    'container_class' => 'left-footer-menu myLinkToTop' ) ); 
?>
					
				</div><!-- .footer-bottom -->

			</footer><!-- #site-footer -->

			<?php 
		endif;
		
		wp_footer(); 
		
		?>




	<script>
  jQuery(function(){
   jQuery('li.menu-item-has-children > a:first-child').on('click',function(event){
    
    event.preventDefault()
    jQuery(this).parent().find('ul').toggle(300);
    //Hide menu when clicked outside
    jQuery(this).parent().find('ul').onclick(function(){  
      var thisUI = jQuery(this);
      jQuery('html').click(function(){
        thisUI.hide();
        jQuery('html').unbind('click');
      });
    });    
    
  });
  
});
  </script>

<script>
    jQuery('.myLinkToTop').click(function () {
    jQuery('html, body').animate({scrollTop:jQuery(document).height()}, 'slow');
    return true;
});
jQuery('.myMenuLink').click(function () {
    jQuery('html, body').animate({scrollTop:0}, 'slow');
    return true;
});
</script>
<script>
	jQuery(".header-toggles").on("click",function(){
  jQuery(".menu-modal.cover-modal").toggleClass("t_menu")  
})

jQuery(".menu-modal-toggles").on("click",function(){
  jQuery(".menu-modal.cover-modal").removeClass("t_menu")  
})

jQuery(".menu-item .sub-menu-toggle").on("click",function(){
	jQuery(this).toggleClass("active");
 
})
</script>




    </body>
</html>
