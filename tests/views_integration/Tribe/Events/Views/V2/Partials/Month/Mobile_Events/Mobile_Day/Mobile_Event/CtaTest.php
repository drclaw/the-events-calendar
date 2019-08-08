<?php
namespace Tribe\Events\Views\V2\Partials\Month\Mobile_Events\Mobile_Day\Mobile_Event;

use Tribe\Test\Products\WPBrowser\Views\V2\HtmlPartialTestCase;

class CtaTest extends HtmlPartialTestCase
{

	protected $partial_path = 'month/mobile-events/mobile-day/mobile-event/cta';

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
		/* @todo: complete once we have dynamic views */
		$this->markTestSkipped( 'Complete once we have dynamic views.' );

		$this->assertMatchesSnapshot( $this->get_partial_html( [] ) );
	}
}
