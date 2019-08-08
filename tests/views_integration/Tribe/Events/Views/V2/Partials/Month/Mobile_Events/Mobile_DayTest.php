<?php

namespace Tribe\Events\Views\V2\Partials\Month\Mobile_Events;

use Tribe\Test\Products\WPBrowser\Views\V2\HtmlPartialTestCase;

class Mobile_DayTest extends HtmlPartialTestCase
{

	protected $partial_path = 'month/mobile-events/mobile-day';

	/**
	 * Test static render
	 */
	public function test_static_render() {
		$this->assertMatchesSnapshot( $this->get_partial_html( [ 'day' => [ 'daynum' => 1, 'events' => [] ] ] ) );
	}
}
