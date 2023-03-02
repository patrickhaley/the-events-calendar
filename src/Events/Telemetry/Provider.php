<?php
/**
 * Service Provider for interfacing with tec-common Telemetry.
 *
 * @since   TBD
 *
 * @package TEC\Events\Site_Health
 */

namespace TEC\Events\Telemetry;

use TEC\Common\lucatume\DI52\ServiceProvider as ServiceProvider;
use Tribe\Events\Admin\Settings as Plugin_Settings;

 /**
  * Class Provider
  *
  * @since   TBD

  * @package TEC\Events\Telemetry
  */
class Provider extends ServiceProvider {
	/**
	 * Slug for the section.
	 *
	 * @since TBD
	 *
	 * @var string $slug
	 */
	protected static string $slug = 'the-events-calendar';


	public function register() {
		// wp-admin/admin.php?page=tec-event-settings
		if ( ! tribe( Plugin_Settings::class )->is_tec_events_settings() ) {
			return;
		}

		$this->add_filters();
	}

	public function add_filters() {
		add_filter( 'tec_common_telemetry_optin_args', [ $this, 'filter_tec_common_telemetry_optin_args' ] );
		add_filter( 'tribe_general_settings_debugging_section',[ $this, 'filter_tribe_general_settings_debugging_section' ] );
	}

	public function filter_tec_common_telemetry_optin_args( $optin_args ) {
		return $this->container->get( Telemetry::class )->filter_tec_common_telemetry_optin_args(  $optin_args );
	}

	public function filter_tribe_general_settings_debugging_section( $fields ) {
		return $this->container->get( Telemetry::class )->filter_tribe_general_settings_debugging_section( $fields );
	}

}
