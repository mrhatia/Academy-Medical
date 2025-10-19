<?php
/**
 * Block Name: Media Alongside Text
 *
 * The template for displaying the custom gutenberg block named Media Alongside Text.
 *
 * @link https://www.advancedcustomfields.com/resources/blocks/
 *
 * @package Academy Medical
 * @since 1.0.0
 */

AcademyMedical ::block(
	$block,
	function ( $bst_block_id, $bst_block_name, $bst_block_fields, $am_option_fields ) {

		// Block variables.
		$am_var_blk_mat_title        = $bst_block_fields['am_var_blk_mat_title'] ?? null;
		$am_var_blk_mat_text        = $bst_block_fields['am_var_blk_mat_text'] ?? null;
		$am_var_blk_mat_button        = $bst_block_fields['am_var_blk_mat_button'] ?? null;
		$am_var_blk_mat_image        = $bst_block_fields['am_var_blk_mat_image'] ?? null;
		$am_var_blk_mat_img_location        = ("left" === $bst_block_fields['am_var_blk_mat_img_location']) ? "image-at-left" : "image-at-right";
		?>

			<div class="iat-section two-columns justify-content-between align-items-center <?php echo $am_var_blk_mat_img_location; ?>">
				<div class="iat-image column" tabindex="0" role="img" aria-label="Image illustrating the content of this block">
					<?php if ( $am_var_blk_mat_image ) { ?>
						<?php AcademyMedical ::the_attachment_image( $am_var_blk_mat_image, 1000 ); ?>
					<?php } ?>
				</div>
				<div class="iat-text column">
					<?php if ( AcademyMedical ::is_block_title( $am_var_blk_mat_title ) ) { ?>
						<?php AcademyMedical ::the_block_title( $am_var_blk_mat_title, 'heading-2' ); ?>
					<?php } ?>
					<?php if ( $am_var_blk_mat_text ) {  ?>
						<?php echo html_entity_decode( $am_var_blk_mat_text ); ?>
					<?php } ?>
					<?php if ( $am_var_blk_mat_button ) { ?>
						<?php echo AcademyMedical ::button( $am_var_blk_mat_button, 'button' ); ?>
					<?php } ?>
				</div>
			</div>

		<?php
	}
);

