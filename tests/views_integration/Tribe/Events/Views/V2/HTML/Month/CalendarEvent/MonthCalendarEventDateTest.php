<?php
namespace Tribe\Events\Views\V2\Views\HTML\Month\CalendarEvent;

use Tribe\Test\Products\WPBrowser\Views\V2\HtmlTestCase;

class MonthCalendarEventDateTest extends HtmlTestCase {

	/**
	 * @test
	 */
	public function it_should_contain_correct_html_classes() {
		// @todo: use the Event Factory here, once the templates use a real event and we have the real keys.
		$event = [ 'ID' => 0, 'title' => 'Lorem Ipsum', 'image' => 'test.jpg', 'featured' => true, 'recurring' => true ];
		$template = $this->template->template( 'month/calendar-body/day/calendar-events/calendar-event/date', [ 'event' => (object) $event ] );
		$html = $this->document->html( $template );

		$this->assertEquals(
			$html->find( '.tribe-events-calendar-month__calendar-event-datetime' )->count(),
			1,
			'Month Calendar Event Date HTML needs to contain one ".tribe-events-calendar-month__calendar-event-datetime" element'
		);
	}

	/**
	 * @test
	 */
	public function it_should_contain_a11y_attributes() {
		// @todo: use the Event Factory here, once the templates use a real event and we have the real keys.
		$event = [ 'ID' => 0, 'title' => 'Lorem Ipsum', 'image' => 'test.jpg', 'featured' => true, 'recurring' => true ];
		$template = $this->template->template( 'month/calendar-body/day/calendar-events/calendar-event/date', [ 'event' => (object) $event ] );
		$html = $this->document->html( $template );

		$this->markTestSkipped( 'The month calendar event date event does not receive data yet' );

		/*
			@todo: If the event is featured we should check the following a11y classes for the icon
		*/
		$featured_icon = $html->find( '.tribe-events-calendar-month__calendar-event-datetime-featured' );
		$this->assertTrue(
			$featured_icon->is( '[aria-label="Featured"]' ),
			'Month calendar event featured icon needs to be aria-label="Featured"'
		);

		$this->assertTrue(
			$featured_icon->is( '[title="Featured"]' ),
			'Month calendar event featured icon needs to be title="Featured"'
		);

		/*
			@todo: If the event is recurring we should check the following a11y classes for the icon
		*/
		$recurring_icon = $html->find( '.tribe-events-calendar-month__calendar-event-datetime-featured' );
		$this->assertTrue(
			$recurring_icon->is( '[aria-label="Recurring"]' ),
			'Month calendar event recurring icon needs to be aria-label="Recurring"'
		);

		$this->assertTrue(
			$recurring_icon->is( '[title="Featured"]' ),
			'Month calendar event recurring icon needs to be title="Recurring"'
		);
	}

}
