<?php
/**
 * Template part for displaying content of about us page.
 *
 * @link https://developer.wordpress.org/themes/template-files-section/partial-and-miscellaneous-template-files/
 *
 * @package Academy Medical
 * @since 1.0.0
 */

list($am_var_author_avatar,$am_var_author_name) = AcademyMedical ::get_author_data( get_the_ID() );
// Post Tags & Categories.
$am_var_post_tags       = get_the_tags( $am_var_post_id );
$am_var_post_categories = get_categories( $am_var_post_id );

?>

	<div class="post-box-meta">
		<div class="post-author-ctn d-flex">
			<?php if ( $am_var_author_avatar ) { ?>
				<div class="post-author-img"
					style="background-image: url(<?php echo esc_html( $am_var_author_avatar ); ?>); width:50px; height:50px; background-size:cover">
				</div>
			<?php } ?>
			<div class="author-meta">
				<?php if ( $am_var_author_name ) { ?>
					<div class="post-author-name"><?php esc_html_e( 'By:', 'AcademyMedical _td' ); ?> <?php echo esc_html( $am_var_author_name ); ?></div>
				<?php } ?>
				<div class="post-meta-date"><?php the_time( AcademyMedical _PROJECT_DTFORMAT ); ?></div>
			</div>
		</div>
	</div>
