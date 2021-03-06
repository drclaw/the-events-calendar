<?php

namespace Tribe\Events\Views\V2\Partials\Month\Calendar_Body\Day\Calendar_Events\Calendar_Event\Tooltip;

use Tribe\Events\Views\V2\Partials\TestCase;

class CtaTest extends TestCase
{

	protected $partial_path = 'month/calendar-body/day/calendar-events/calendar-event/tooltip/cta';

	/**
	 * Test static render
	 */
	public function test_static_render() {
		$this->assertMatchesSnapshot( $this->get_partial_html() );
	}

	/**
	 * Test render with context
	 */
	public function test_render_with_context() {
		$this->markTestSkipped( 'Dynamic events are not yet in place.' );
		tribe_events()->set_args( [
			'start_date' => '2018-01-01 10am',
			'timezone'   => 'Europe/Paris',
			'duration'   => 3 * HOUR_IN_SECONDS,
			'title'      => 'Test Event - 2018-01-01 10am',
			'status'     => 'publish',
		] )->create();

		$this->assertMatchesSnapshot( $this->get_partial_html( [ 'event' => tribe_events()->first() ] ) );
	}
}
