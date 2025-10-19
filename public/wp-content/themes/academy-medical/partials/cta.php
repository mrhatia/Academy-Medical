<?php
/**
 * Template part for footer cta
 *
 * @link https://developer.wordpress.org/themes/template-files-section/partial-and-miscellaneous-template-files/
 *
 * @package Academy Medical
 * @since 1.0.0
 */

list( $am_var_post_id, $bst_fields, $am_option_fields, $bst_queried_object ) = AcademyMedical ::defaults();

$am_var_to_cta_headline = $am_option_fields['am_var_to_cta_headline'] ?? null;

$am_var_page_cta_pagevisibility = $bst_fields['am_var_page_cta_pagevisibility'] ?? null;
$am_var_ftrcta_headline         = $bst_fields['am_var_page_cta_headline'] ?? $am_var_to_cta_headline;
?>

<section id="cta-section" class="cta-section">
	<!-- cta Start -->
	<div class="cta-single">
		<div class="wrapper">
			<h4><?php echo esc_html( $am_var_ftrcta_headline ); ?></h4>
		</div>
	</div>
	<!-- cta End -->
</section>
