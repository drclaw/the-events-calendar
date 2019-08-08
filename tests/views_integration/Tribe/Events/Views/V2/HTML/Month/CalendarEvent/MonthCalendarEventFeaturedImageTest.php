<?php
namespace Tribe\Events\Views\V2\Views\HTML\Month\CalendarEvent;

use Tribe\Test\Products\WPBrowser\Views\V2\HtmlTestCase;

class MonthCalendarEventFeaturedImageTest extends HtmlTestCase {

	/**
	 * @test
	 */
	public function it_should_contain_correct_html_classes() {
		// @todo: Re-check how we send the `image` once we make this dynamic
		$event = [ 'ID' => 0, 'title' => 'Lorem Ipsum', 'image' => 'test.jpg', 'featured' => true, 'recurring' => true ];
		$template = $this->template->template( 'month/calendar-body/day/calendar-events/calendar-event/featured-image', [ 'event' => (object) $event ] );
		$html = $this->document->html( $template );

		$this->assertEquals(
			$html->find( '.tribe-events-calendar-month__calendar-event-featured-image-wrapper' )->count(),
			1,
			'Month Calendar Event Featured image HTML needs to contain one ".tribe-events-calendar-month__calendar-event-featured-image-wrapper" element'
		);
	}

}
