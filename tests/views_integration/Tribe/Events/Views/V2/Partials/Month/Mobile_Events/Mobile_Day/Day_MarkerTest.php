<?php
namespace Tribe\Events\Views\V2\Partials\Month\Mobile_Events\Mobile_Day;

use Tribe\Test\Products\WPBrowser\Views\V2\HtmlPartialTestCase;

class Day_MarkerTest extends HtmlPartialTestCase
{

	protected $partial_path = 'month/mobile-events/mobile-day/day-marker';

	/**
	 * Test static render
	 * @todo remove this static HTML test once the partial is dynamic.
	 */
	public function test_static_render() {
		$this->assertMatchesSnapshot( $this->get_partial_html() );
	}

	/**
	 * Test render with context
	 */
	public function test_render_with_context() {
		$this->assertMatchesSnapshot( $this->get_partial_html( [
			'foo' => 23,
			'bar' => 89,
		] ) );
	}
}
