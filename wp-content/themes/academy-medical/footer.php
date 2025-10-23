<?php
/**
 * The template for displaying website footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Academy Medical
 * @since 1.0.0
 */

list( $am_var_post_id, $bst_fields, $am_option_fields ) = AcademyMedical::defaults();
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
<div class="footer-ctn">
	<div class="footer-inner">
		<div class="footer-top">
			<div class="footer-brand">
				<a href="#" class="footer-logo">
					<?php echo '<img src="' . esc_url( get_template_directory_uri() ) . '/assets/src/images/uploads/acmed-wht.svg" alt="Logo">'; ?>
				</a>
				<p>Simplifying the federal procurement process</p>
				<div class="footer-social">
					<a href="#"><?php echo '<img src="' . esc_url( get_template_directory_uri() ) . '/assets/src/images/facebook-icon.svg" alt="Facebook">'; ?></a>
					<a href="#"><?php echo '<img src="' . esc_url( get_template_directory_uri() ) . '/assets/src/images/linkedin-icon.svg" alt="LinkedIn">'; ?></a>
					<a href="#"><?php echo '<img src="' . esc_url( get_template_directory_uri() ) . '/assets/src/images/twitter-icon.svg" alt="Twitter">'; ?></a>
					<a href="#"><?php echo '<img src="' . esc_url( get_template_directory_uri() ) . '/assets/src/images/instagram-icon.svg" alt="Instagram">'; ?></a>
				</div>
			</div>
			<div class="footer-links">
				<div class="footer-col">
					<h4>Company Info</h4>
					<ul>
						<li><strong>UEI:</strong> HGEGAA2B93W9</li>
						<li><strong>DUNS:</strong> 190309067</li>
						<li><strong>CAGE:</strong> 67AN4</li>
						<li><strong>Surgical Implants Next Generation:</strong> 36C10G24D0024</li>
						<li><strong>MSPV BPA:</strong> 36C24122A0078</li>
						<li><strong>FSS:</strong> 36F79718D0372</li>
						<li><strong>Med/Surg DAPA:</strong> SP0200-15-H-0052</li>
						<li><strong>Equipment DAPA:</strong> SP0200-15-H-0050</li>
						<li><strong>eCAT Med/Surg:</strong> SPE2DE-22-D-0015</li>
						<li><strong>eCAT Equipment:</strong> SPE2DH-22-D-0019</li>
					</ul>
				</div>
				<div class="footer-col">
					<h4>Academy Medical</h4>
					<ul>
						<li>2600 North Loop West</li>
						<li>STE 200A</li>
						<li>Houston, TX 7792</li>
						<li>888.860.0561</li>
						<li>888.909.7767 fax</li>
						<li><a href="mailto:info@academymedical.net">info@academymedical.net</a></li>
					</ul>
					<div class="footer-cert">
						<?php echo '<img src="' . esc_url( get_template_directory_uri() ) . '/assets/src/images/footer-logo-02.png" alt="Logo">'; ?>
					</div>
				</div>
				<div class="footer-col">
					<h4>Quicklinks</h4>
					<ul>
						<li><a href="#">For Buyers</a></li>
						<li><a href="#">For Sellers</a></li>
						<li><a href="#">Supplier Network</a></li>
						<li><a href="#">Our Company</a></li>
						<li><a href="#">Industry News</a></li>
						<li><a href="#">Contact Us</a></li>
					</ul>
					<div class="footer-cert">
						<?php echo '<img src="' . esc_url( get_template_directory_uri() ) . '/assets/src/images/footer-logo-01.png" alt="Logo">'; ?>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-bottom">
			<p>Copyright © 2024</p>
			<ul>
				<li><a href="#">Sitemap</a></li>
				<li><a href="#">Terms of Use</a></li>
				<li><a href="#">Privacy Policy</a></li>
			</ul>
		</div>
	</div>
</div>


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
