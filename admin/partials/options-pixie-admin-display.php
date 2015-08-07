<?php

/**
 * Provide a dashboard view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://www.bytepixie.com/options-pixie/
 * @since      1.0
 *
 * @package    Options_Pixie
 * @subpackage Options_Pixie/admin/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<div class="wrap">
	<h2>
		<?php
		echo apply_filters( 'options_pixie_admin_title', __( 'Options Pixie', 'options-pixie' ) );
		if ( ! empty( $_REQUEST['s'] ) ) {
			printf( ' <span class="subtitle">' . __( 'Search results for &#8220;%s&#8221;' ) . '</span>', esc_attr( $_REQUEST['s'] ) );
		}
		?>
	</h2>

	<?php $options_pixie_list_table->views(); ?>

	<form id="options-pixie-form" method="post">
		<?php
		if ( ! empty( $_REQUEST['blog_id'] ) ) {
			?>
			<input type="hidden" name="current_blog_id" id="current-blog-id" value="<?php echo esc_attr( $_REQUEST['blog_id'] ) ?>"/>
			<?php
		}
		if ( ! empty( $_REQUEST['record_type'] ) ) {
			?>
			<input type="hidden" name="record_type" value="<?php echo esc_attr( $_REQUEST['record_type'] ) ?>"/>
			<?php
		}
		if ( ! empty( $_REQUEST['page'] ) ) {
			?>
			<input type="hidden" name="page" value="<?php echo esc_attr( $_REQUEST['page'] ) ?>"/>
			<?php
		}
		$options_pixie_list_table->search_box( __( 'Search', 'options-pixie' ), 'option' );
		$options_pixie_list_table->display();
		?>
	</form>
</div>
