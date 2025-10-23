<?php
/**
 * Template part for displaying content of about us page.
 *
 * @link https://developer.wordpress.org/themes/template-files-section/partial-and-miscellaneous-template-files/
 *
 * @package Academy Medical
 * @since 1.0.0
 */

list($am_var_author_avatar,$am_var_author_name) = AcademyMedical::get_author_data( get_the_ID() );

// Post Tags & Categories.
$am_var_post_tag = get_the_tags( get_the_ID() );

?>


<div class="post-box-meta d-flex justify-content-between">
	<div class="post-date">
		<?php the_time( AcademyMedical_PROJECT_DTFORMAT ); ?>
	</div>
	<?php if ( $am_var_post_tag ) { ?>
		<div class="ac-post-cat">
		<?php foreach ( $am_var_post_tag as $am_var_category ) { ?>
			<a href="<?php echo esc_url( get_category_link( $am_var_category ) ); ?>"><?php echo esc_html( $am_var_category->name ); ?></a>
		<?php } ?>
		</div>
	<?php } ?>
</div>
