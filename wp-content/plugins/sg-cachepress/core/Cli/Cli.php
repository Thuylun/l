<?php
namespace SiteGround_Optimizer\Cli;

/**
 * SG CachePress Cli main plugin class
 */
class Cli {	
	/**
	 * Create a {@link Cli} instance.
	 *
	 * @since 5.0.0
	 */
	public function __construct() {
		// If we're in `WP_CLI` load the related files.
		if ( class_exists( 'WP_CLI' ) ) {
			$this->register_commands();
		}
	}

	/**
	 * Init supercacher children.
	 *
	 * @since  5.0.0
	 */
	private function register_commands() {
		// Purge commands.
		\WP_CLI::add_command( 'sg purge', 'SiteGround_Optimizer\Cli\Cli_Purge' );

		// Memcache.
		\WP_CLI::add_command( 'sg memcached', 'SiteGround_Optimizer\Cli\Cli_Memcache' );

		// Optimize.
		\WP_CLI::add_command( 'sg optimize', 'SiteGround_Optimizer\Cli\Cli_Optimizer' );

		// Optimize.
		\WP_CLI::add_command( 'sg webp', 'SiteGround_Optimizer\Cli\Cli_Webp' );

		// HTTPS.
		\WP_CLI::add_command( 'sg forcehttps', 'SiteGround_Optimizer\Cli\Cli_Https' );

		// Status.
		\WP_CLI::add_command( 'sg status', 'SiteGround_Optimizer\Cli\Cli_Status' );

		// Heartbeat.
		\WP_CLI::add_command( 'sg heartbeat', 'SiteGround_Optimizer\Cli\Cli_Heartbeat' );

		// DNS Prefetch.
		\WP_CLI::add_command( 'sg dns-prefetch', 'SiteGround_Optimizer\Cli\Cli_DNS_Prefetch' );

		// Import/Export settings.
		\WP_CLI::add_command( 'sg settings', 'SiteGround_Optimizer\Cli\Cli_Settings' );
	}

}
