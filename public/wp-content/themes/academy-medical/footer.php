<?php
/**
 * The template for displaying website footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Academy Medical
 * @since 1.0.0
 */

list( $am_var_post_id, $bst_fields, $am_option_fields ) = AcademyMedical ::defaults();
// Default Footer Options.
$am_var_footer_scripts = $am_option_fields['footer_scripts'] ?? '';



// Schema Markup - ACF variables.
$am_var_schema_check = $am_option_fields['am_var_schema_check'] ?? null;
if ( $am_var_schema_check ) {
	$am_var_schema_business_name       = $am_option_fields['am_var_schema_business_name'] ?? null;
	$am_var_schema_business_legal_name = $am_option_fields['am_var_schema_business_legal_name'] ?? null;
	$am_var_schema_street_address      = $am_option_fields['am_var_schema_street_address'] ?? null;
	$am_var_schema_locality            = $am_option_fields['am_var_schema_locality'] ?? null;
	$am_var_schema_region              = $am_option_fields['am_var_schema_region'] ?? null;
	$am_var_schema_postal_code         = $am_option_fields['am_var_schema_postal_code'] ?? null;
	$am_var_schema_map_short_link      = $am_option_fields['am_var_schema_map_short_link'] ?? null;
	$am_var_schema_latitude            = $am_option_fields['am_var_schema_latitude'] ?? null;
	$am_var_schema_longitude           = $am_option_fields['am_var_schema_longitude'] ?? null;
	$am_var_schema_opening_hours       = $am_option_fields['am_var_schema_opening_hours'] ?? null;
	$am_var_schema_telephone           = $am_option_fields['am_var_schema_telephone'] ?? null;
	$am_var_schema_business_email      = $am_option_fields['am_var_schema_business_email'] ?? null;
	$am_var_schema_business_logo       = $am_option_fields['am_var_schema_business_logo'] ?? null;
	$am_var_schema_price_range         = $am_option_fields['am_var_schema_price_range'] ?? null;
	$am_var_schema_type                = $am_option_fields['am_var_schema_type'] ?? null;
}
// Custom - ACF variables.

$am_var_ftrop_title     = $am_option_fields['am_var_ftrop_title'] ?? null;
$am_var_ftrop_text      = $am_option_fields['am_var_ftrop_text'] ?? null;
$am_var_ftrop_copyright = $am_option_fields['am_var_ftrop_copyright'] ?? null;
$am_var_social_profiles = $am_option_fields['am_var_social_profiles'] ?? null;

?>
<?php get_template_part( 'partials/cta' ); ?>
</main>
<footer id="footer-section" class="footer-section">
	<!-- Footer Start -->
	<div class="footer-ctn">
		<div class="wrapper">

			<div class="footer-widgets d-flex justify-content-between flex-wrap">
				<div class="single-widget">
					<div class="footer-logo">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/build/images/site-logo-white.svg"
								alt="Logo" />
						</a>
					</div>
					<?php if ( $am_var_ftrop_title ) { ?>
					<h5><?php echo html_entity_decode( $am_var_ftrop_title ); ?></h5>
					<?php } ?>
					<?php if ( $am_var_ftrop_text ) { ?>
					<div class="address"><?php echo html_entity_decode( $am_var_ftrop_text ); ?></div>
					<?php } ?>
					<div class="social-icons d-flex">
						<?php AcademyMedical ::the_social_icons( $am_var_social_profiles ); ?>
					</div>
				</div>
				<div class="single-widget">
					<div class="footer-nav">
						<?php
							wp_nav_menu(
								array(
									'theme_location' => 'footer-nav-one',
									'fallback_cb'    => 'AcademyMedical ::nav_fallback',
								)
							);
							?>
					</div>
				</div>
				<div class="single-widget">
					<div class="footer-nav">
						<?php
							wp_nav_menu(
								array(
									'theme_location' => 'footer-nav-two',
									'fallback_cb'    => 'AcademyMedical ::nav_fallback',
								)
							);
							?>
					</div>
				</div>
				<div class="single-widget">
					<div class="footer-nav">
						<?php
							wp_nav_menu(
								array(
									'theme_location' => 'footer-nav-three',
									'fallback_cb'    => 'AcademyMedical ::nav_fallback',
								)
							);
							?>
					</div>
				</div>
			</div>
			<div class="am-s72"></div>
			<div class="footer-bottom d-flex align-items-center justify-content-between">
				<?php if ( $am_var_ftrop_copyright ) { ?>
				<div class="copy-right"><?php echo esc_html( $am_var_ftrop_copyright ); ?></div>
				<?php } ?>
				<div class="legal-nav">
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'legal-nav',
								'fallback_cb'    => 'AcademyMedical ::nav_fallback',
							)
						);
						?>
				</div>
			</div>
		</div>
	</div>
	<!-- Footer End -->
	<?php
	if ( $am_var_schema_check ) {
		?>
	<script type="application/ld+json">
	{
		"@context": "http://schema.org",
		"@type": "<?php echo esc_html( $am_var_schema_type ); ?>",
		"address": {
			"@type": "PostalAddress",
			"addressLocality": "<?php echo esc_html( $am_var_schema_locality ); ?>",
			"addressRegion": "<?php echo esc_html( $am_var_schema_region ); ?>",
			"postalCode": "<?php echo esc_html( $am_var_schema_postal_code ); ?>",
			"streetAddress": "<?php echo esc_html( $am_var_schema_street_address ); ?>"
		},
		"hasMap": "<?php echo esc_html( $am_var_schema_map_short_link ); ?>",
		"geo": {
			"@type": "GeoCoordinates",
			"latitude": "<?php echo esc_html( $am_var_schema_latitude ); ?>",
			"longitude": "<?php echo esc_html( $am_var_schema_longitude ); ?>"
		},
		"name": "<?php echo esc_html( $am_var_schema_business_name ); ?>",
		"openingHours": "<?php echo esc_html( $am_var_schema_opening_hours ); ?>",
		"telephone": "<?php echo esc_html( $am_var_schema_telephone ); ?>",
		"email": "<?php echo esc_html( $am_var_schema_business_email ); ?>",
		"url": "<?php echo esc_url( home_url() ); ?>",
		"image": "<?php echo esc_html( $am_var_schema_business_logo ); ?>",
		"legalName": "<?php echo esc_html( $am_var_schema_business_legal_name ); ?>",
		"priceRange": "<?php echo esc_html( $am_var_schema_price_range ); ?>"
	}
	</script> <?php } ?>
</footer>
<?php wp_footer(); ?>
<?php
if ( '' !== $am_var_footer_scripts ) {
	?>
<div style="display: none;">
	<?php echo html_entity_decode( $am_var_footer_scripts, ENT_QUOTES ); ?>
</div>
<?php } ?>
</body>

</html>
