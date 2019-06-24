<?php
/**
 * View: Events Bar Mobile Search Toggle
 *
 * Override this template in your own theme by creating a file at:
 * [your-theme]/tribe/events/views/v2/events-bar/mobile/search-toggle.php
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
<div class="tribe-events-c-events-bar__mobile-search-toggle">
	<h3 class="tribe-common-a11y-visual-hide">
		<?php printf( esc_html__( '%s Search', 'the-events-calendar' ), tribe_get_event_label_singular() ); ?>
	</h3>

	<button class="tribe-events-c-events-bar__mobile-search-toggle-button">
		<span class="tribe-events-c-events-bar__mobile-search-toggle-button-icon tribe-common-svgicon tribe-common-svgicon--search"></span>
		<span class="tribe-events-c-events-bar__mobile-search-toggle-button-text">
			<?php esc_html_e( 'Search', 'the-events-calendar' ); ?>
		</span>
	</button>
</div>
