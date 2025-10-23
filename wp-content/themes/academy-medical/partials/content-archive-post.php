<?php
/**
 * Template part for displaying posts in an archive
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Academy Medical
 * @since 1.0.0
 */

list( $am_var_post_id, $bst_fields, $am_option_fields ) = AcademyMedical::defaults();

?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'post-box column' ); ?>>
	<div class="post-box-img post-image">
		<a href="<?php echo esc_url( get_the_permalink() ); ?>">
			<?php AcademyMedical::the_featured_image( $am_var_post_id, 900 ); ?>
		</a>
	</div>
	<div class="post-content">
		<?php get_template_part( 'partials/post-meta-archive' ); ?>
		<div class="post-box-title post-title">
			<h4 id="post-<?php the_ID(); ?>" class="post-title-archive">
				<a href="<?php echo esc_url( get_the_permalink() ); ?>"> <?php echo esc_html( get_the_title() ); ?></a>
			</h4>
		</div>
		<div class="post-box-excerpt">
			<p><?php echo AcademyMedical::excerpt_nomore( 130 ); ?> </p>
		</div>
		<a href="<?php echo esc_url( get_the_permalink() ); ?>" class="learn-more"><?php esc_html_e( 'Learn More', 'AcademyMedical_td' ); ?></a>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
