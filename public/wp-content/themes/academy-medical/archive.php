<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Academy Medical
 * @since 1.0.0
 */

// Include header.
get_header();

list( $am_var_post_id, $bst_fields, $am_option_fields ) = AcademyMedical::defaults();

?>
<section id="hero-section" class="hero-section hero-section-default">
	<!-- Hero Start -->
	<div class="hero-single">
		<div class="wrapper">
			<h1><?php the_archive_title(); ?></h1>
		</div>
	</div>
	<!-- Hero End -->
</section>
<section id="page-section" class="page-section">
	<!-- Content Start -->
	<div class="wrapper">
		<div class="<?php AcademyMedical::have_post_class( 'three-columns' ); ?>">
			<?php
			global $wp_query;
			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post();
					// Include specific template for the content.
					get_template_part( 'partials/content-archive', get_post_type() );
				}
			} else {
				// If no content, include the "No posts found" template.
				get_template_part( 'partials/content', 'none' );
			}
			?>
		</div>
		<div class="ts-40"></div>
		<?php
		if ( have_posts() ) {
			if ( class_exists( 'AcademyMedical' ) && $wp_query->max_num_pages > 1 ) {
				?>
				<div class="center-align">
					<?php AcademyMedical::pagination( $wp_query->max_num_pages ); ?>
				</div>
				<?php
			}
		}
		?>
		<div class="ts-80"></div>
	</div>
	<!-- Content End -->
</section>
<?php get_footer(); ?>
