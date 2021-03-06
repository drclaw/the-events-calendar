<?php

namespace Tribe\Events\Views\V2\Partials\Month\Calendar_Body\Day\Calendar_Events;

use Tribe\Events\Views\V2\Partials\TestCase;

class Calendar_EventTest extends TestCase
{

	protected $partial_path = 'month/calendar-body/day/calendar-events/calendar-event';

	/**
	 * Test render with context
	 */
	public function test_render_with_context() {
		tribe_events()->set_args( [
			'start_date' => '2018-01-01 10am',
			'timezone'   => 'Europe/Paris',
			'duration'   => 3 * HOUR_IN_SECONDS,
			'title'      => 'Test Event - 2018-01-01 10am',
			'status'     => 'publish',
		] )->create();

		$this->assertMatchesSnapshot( $this->get_partial_html( [ 'event' => tribe_events()->first() ] ) );
	}

	/**
	 * Test render with featured event
	 */
	public function test_render_with_featured_event() {
		$this->markTestSkipped( 'Fix test to allow for featured events' );
		tribe_events()->set_args( [
			'start_date' => '2018-01-01 10am',
			'timezone'   => 'Europe/Paris',
			'duration'   => 3 * HOUR_IN_SECONDS,
			'title'      => 'Test Event - 2018-01-01 10am',
			'status'     => 'publish',
			'featured'   => true,
		] )->create();

		$this->assertMatchesSnapshot( $this->get_partial_html( [ 'event' => tribe_events()->first() ] ) );
	}

	/**
	 * Test render with recurring event
	 */
	public function test_render_with_recurring_event() {
		tribe_events()->set_args( [
			'start_date' => '2018-01-01 10am',
			'timezone'   => 'Europe/Paris',
			'duration'   => 3 * HOUR_IN_SECONDS,
			'title'      => 'Test Event - 2018-01-01 10am',
			'status'     => 'publish',
			'recurring'  => true,
		] )->create();

		$this->assertMatchesSnapshot( $this->get_partial_html( [ 'event' => tribe_events()->first() ] ) );
	}

	/**
	 * Test render with featured image
	 */
	public function test_render_with_featured_image() {
		$this->markTestSkipped( 'Fix test to get event featured image' );
		tribe_events()->set_args( [
			'start_date' => '2018-01-01 10am',
			'timezone'   => 'Europe/Paris',
			'duration'   => 3 * HOUR_IN_SECONDS,
			'title'      => 'Test Event - 2018-01-01 10am',
			'status'     => 'publish',
			'image'      => '#',
		] )->create();

		$this->assertMatchesSnapshot( $this->get_partial_html( [ 'event' => tribe_events()->first() ] ) );
	}
}
