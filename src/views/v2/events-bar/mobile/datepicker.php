<?php
/**
 * View: Events Bar Mobile Datepicker
 *
 * Override this template in your own theme by creating a file at:
 * [your-theme]/tribe/events/views/v2/events-bar/mobile/datepicker.php
 *
 * See more documentation about our views templating system.
 *
 * @link {INSERT_ARTCILE_LINK_HERE}
 *
 * @version TBD
 *
 */

// If we didn't have a view setup we cannot print today's link
if ( ! $this->get( 'view' ) ) {
	return false;
}

?>
<div class="tribe-events-c-events-bar__mobile-datepicker" data-js="tribe-events-mobile-datepicker">
	<span class="tribe-common-h3 tribe-common-h3--alt tribe-events-c-top-bar__today-title">
		<time datetime="<?php echo esc_attr( date( 'Y-m-d', time() ) ); ?>"><?php echo date( 'F jS, Y', time() ); ?></time>
	</span>
</div>
