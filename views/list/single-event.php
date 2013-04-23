<?php 
/**
 * List Single Event
 * This file contains one event in the list
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/list/single-event.php
 * *
 * @package TribeEventsCalendar
 * @since  3.0
 * @author Modern Tribe Inc.
 *
 */
?>

<?php 

$venue_name = tribe_get_meta( 'tribe_event_venue_name' );
$venue_address = tribe_get_meta( 'tribe_event_venue_address' );

 ?>

<!-- Event Cost -->
<?php if ( tribe_get_cost() ) : ?> 
	<div class="tribe-events-event-cost">
		<span><?php echo tribe_get_cost(); ?></span>
	</div>
<?php endif; ?>

<!-- Event Title -->
<?php do_action( 'tribe_events_list_before_the_event_title' ) ?>
<h2 class="tribe-events-list-event-title entry-title summary">
	<a class="url" href="<?php echo tribe_get_event_link() ?>" title="<?php the_title() ?>" rel="bookmark">
		<?php the_title() ?>
	</a>
</h2>
<?php do_action( 'tribe_events_list_after_the_event_title' ) ?>

<!-- Event Meta -->
<?php do_action( 'tribe_events_list_before_the_meta' ) ?>
<div class="tribe-events-event-meta">

	<!-- Schedule & Recurrence Details -->
	<div class="updated published time-details">
		<?php echo tribe_events_event_schedule_details() ?>
		<?php echo tribe_events_event_recurring_info_tooltip() ?>
	</div>
	
	<!-- Venue Display Info -->
	<div class="tribe-events-venue-details">
		<?php echo $venue_name ?>
		<?php if ($venue_address) : ?>
			, <?php echo $venue_address ?>
		<?php endif; ?>
	</div> <!-- .tribe-events-venue-details -->

</div><!-- .tribe-events-event-meta -->
<?php do_action( 'tribe_events_list_after_the_meta' ) ?>

<!-- Event Image -->
<?php echo tribe_event_featured_image(null, 'large') ?>

<!-- Event Content -->
<?php do_action( 'tribe_events_list_before_the_content' ) ?>
<div class="tribe-events-list-event-description tribe-events-content entry-summary">
	<?php the_excerpt() ?>
	<a href="<?php echo tribe_get_event_link() ?>" class="tribe-events-read-more"><?php _e('Find out more', 'tribe-events-calendar') ?> &raquo;</a>
</div><!-- .tribe-events-list-event-description -->
<?php do_action('tribe_events_list_after_the_content') ?>
