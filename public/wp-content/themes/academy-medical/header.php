<?php
/**
 * The template for displaying website header
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Academy Medical
 * @since 1.0.0
 */

list( $am_var_post_id, $bst_fields, $am_option_fields ) = AcademyMedical::defaults();

// Page Tags - Advanced custom fields variables.
$am_var_tracking = $am_option_fields['custom_scripts'] ?? '';
$am_var_ccss     = $am_option_fields['custom_css'] ?? '';
$am_var_hscripts = $am_option_fields['head_scripts'] ?? '';
$am_var_bscripts = $am_option_fields['body_scripts'] ?? '';

$am_var_tbar_vsblty     = $am_option_fields['am_var_tbar_vsblty'] ?? null;
$am_var_tbar_btn     = $am_option_fields['am_var_tbar_btn'] ?? null;
$am_var_tbar_text    = $am_option_fields['am_var_tbar_text'] ?? null;


$am_var_tohdr_btn     = $am_option_fields['am_var_tohdr_btn'] ?? null;
$am_var_tohdr_btn_two = $am_option_fields['am_var_tohdr_btn_two'] ?? null;
$am_var_tbar_vsblty   = $am_option_fields['am_var_tbar_vsblty'] ?? null;
$am_var_tbar_text     = $am_option_fields['am_var_tbar_text'] ?? null;
$am_var_tbar_btn      = $am_option_fields['am_var_tbar_btn'] ?? null;
// Page variables - Advanced custom fields variables.

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimal-ui" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<?php
		// Add Head Scripts.
	if ( AcademyMedical::if_live() ) {

		if ( '' !== $am_var_hscripts ) {
			echo html_entity_decode( $am_var_hscripts, ENT_QUOTES );
		}
	}
	?>
	<link rel="apple-touch-icon" sizes="180x180"
		href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/build/images/pwa/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32"
		href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/build/images/pwa/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16"
		href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/build/images/pwa/favicon-16x16.png">
	<link rel="icon" sizes="any"
		href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/build/images/pwa/favicon.ico">
	<link rel="icon" type="image/svg+xml"
		href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/build/images/pwa/icon.svg">
	<link rel="manifest"
		href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/build/images/pwa/site.webmanifest">
	<meta name="theme-color" content="#0047FE">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="application-name" content="Academy Medical">
	<!-- Windows Phone -->
	<meta name="msapplication-navbutton_color" content="#0047FE">
	<meta name="msapplication-TileColor" content="#0047FE">
	<meta name="msapplication-tap-highlight" content="no">
	<meta name="msapplication-TileImage"
		content="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/build/images/pwa/pwa-icon-144.png">
	<!-- iOS Safari -->
	<meta name="apple-mobile-web-app-status-bar-style" content="#0047FE">
	<?php
		// Tracking Code.
	if ( '' !== $am_var_tracking ) {
		echo html_entity_decode( $am_var_tracking, ENT_QUOTES );
	}

		// Custom CSS.
	if ( '' !== $am_var_ccss ) {
		echo '<style type="text/css">';
		echo html_entity_decode( $am_var_ccss, ENT_QUOTES );
		echo '</style>';
	}
	?>
	<?php wp_head(); ?> <script>
	"serviceWorker" in navigator && window.addEventListener("load", function() {
		navigator.serviceWorker.register("/sw.js").then(function(e) {
			console.log("ServiceWorker registration successful with scope: ", e.scope)
		}, function(e) {
			console.log("ServiceWorker registration failed: ", e)
		})
	});
	jQuery(document).ready(function() {
		if (jQuery('#top-bar-ajax').length > 0) {
			jQuery('#top-bar-ajax').topBar();
		}
	});
	</script>

</head>

<body <?php body_class(); ?>> <?php wp_body_open(); ?>
	<?php
	if ( AcademyMedical::if_live() ) {
		if ( '' !== $am_var_bscripts ) {
			?>
			<div style="display: none;">
				<?php echo html_entity_decode( $am_var_bscripts, ENT_QUOTES ); ?>
			</div>
		<?php }
	}
	?>

	<a class="skip-link screen-reader-text"
		href="#page-section"><?php esc_html_e( 'Skip to content', 'AcademyMedical_td' ); ?></a>
	<header class="header-section">
		<div class="top-bar center-align" id="top-bar-ajax">
			<div class="header-wrapper">
				<div class="catalogs">
					<div class="single-catalog">
						<a href="#">
							VA Catalog</a>
					</div>
					<div class="single-catalog">
						<a href="#">
							DOD Catalog</a>
					</div>
				</div>
			</div>
			<div class="top-bar-cross">
				<span>
								<?php
									echo '<img src="' . esc_url( get_template_directory_uri() ) . '/assets/src/images/topbar-cross-icon.svg">';
								?>
				</span>
			</div>
		</div>
		<div class="header-wrapper header-inner d-flex align-items-center justify-content-between">
			<div class="header-logo logo">
					<?php
									echo '<img src="' . esc_url( get_template_directory_uri() ) . '/assets/src/images/site-logo.svg">';
								?>
			</div>
			<div class="right-header header-navigation">
				<div class="nav-overlay">
					<div class="nav-container">
						<div class="header-nav">
							<ul>
								<li><a href="toolkit.html">For Buyers</a></li>
								<li class="menu-item current-menu-item menu-item-has-children">
									<a href="#">For Sellers</a>
									<ul class="sub-menu">
										<li><a href="./AcademyMedical /gravity-form.html">For Buyers</a></li>
										<li><a href="./AcademyMedical /hubspot-form.html">For Sellers</a></li>
									</ul>
								</li>
								<li><a href="./AcademyMedical /html-formatting-tags.html">Supplier Network</a></li>
								<li><a href="./AcademyMedical /wordpress-blocks.html">Our Company</a></li>
								<li><a href="./AcademyMedical /wordpress-blocks.html">Industry News</a></li>

								<li><a href="./AcademyMedical /wordpress-blocks.html">Contact us</a></li>

							</ul>
							<div class="header-btns desktop-hide">
								<a href="#" class="button" title="Get In touch">Get In touch</a>
							</div>
						</div>
					</div>
				</div>
				<div class="menu-btn">
					<span class="top"></span>
					<span class="middle"></span>
					<span class="bottom"></span>
				</div>
			</div>
			<div class="header-btns">

				<a href="#" class="search-icon top-search">	<?php
									echo '<img src="' . esc_url( get_template_directory_uri() ) . '/assets/src/images/search-icon.svg">';
								?></a>
				<a href="#" class="button" title="Get In touch">Get In touch</a>

			</div>
		</div>
		<div class="search-form-new">
			<div class="search-inner-content">
				<div class="search-inner-content--text">
					SEARCH SITE </div>
				<form role="search" method="get" id="searchform" action="#">
					<div id="search-top">
						<input type="text" name="s" class="keyword" onkeyup="fetch()" autocomplete="off"
							autofocus="autofocus" aria-label="Search" placeholder="Search">
						<div class="clear"></div>
					</div>
				</form>
				<div class="search-close">
					<svg xmlns="http://www.w3.org/2000/svg" width="57" height="57" viewBox="0 0 57 57" fill="none">
						<rect class="bg-path" x="0.922852" y="28.5" width="39" height="39" rx="19.5"
							transform="rotate(-45 0.922852 28.5)" fill="#F1EEE2"></rect>
						<g opacity="0.5">
							<rect class="bg-path-white" x="22.8432" y="23.5503" width="1" height="15"
								transform="rotate(-45 22.8432 23.5503)" fill="#141414"></rect>
							<rect class="bg-path-white" x="23.5503" y="34.1567" width="1" height="15"
								transform="rotate(-135 23.5503 34.1567)" fill="#141414"></rect>
						</g>
					</svg>
				</div>
			</div>
		</div>
	</header>
	<!-- Main Area Start -->
	<main id="main-section" class="main-section">
