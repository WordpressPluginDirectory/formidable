<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( 'You are not allowed to call this page directly.' );
}

if ( isset( $args['field']['post_field'] ) && $args['field']['post_field'] === 'post_category' ) {
	?>
	<div class="frm-inline-message" id="frm_has_hidden_options_<?php echo esc_attr( $args['field']['id'] ); ?>">
		<?php FrmAppHelper::kses_echo( FrmFieldsHelper::get_term_link( $args['field']['taxonomy'] ), array( 'a' ) ); ?>
	</div>
	<?php
} else {
	$this->show_field_options( $args );
}
