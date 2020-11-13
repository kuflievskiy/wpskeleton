<?php
	/**
	 * Dynamically load environment variables from file .env
	 */

	/**
	 * Set up our global environment constant and load its config first
	 * Default: development
	 */	
	use Symfony\Component\Yaml\Yaml;
	$settings = Yaml::parse(file_get_contents(__DIR__.'/settings.yml'));
	
	/**
	 * URLs.
	 */
	define( 'WP_HOME', 			$settings['wp_home'] );
	define( 'WP_SITEURL', 		$settings['wp_siteurl'] );

	/**
	 * Custom Content Directory.
	 */
	define( 'CONTENT_DIR', 		'/app' );
	define( 'WEB_ROOT_PATH',	dirname( __DIR__ ) . '/web' );
	define( 'WP_CONTENT_DIR', 	dirname( __DIR__ ) . '/web' . CONTENT_DIR );
	define( 'WP_CONTENT_URL', 	WP_HOME . '/web' . CONTENT_DIR );

	/**
	 * DB settings.
	 */
	define( 'DB_NAME', 			$settings['db']['name'] );
	define( 'DB_USER', 			$settings['db']['user'] );
	define( 'DB_PASSWORD', 		$settings['db']['password'] );
	define( 'DB_HOST', 			$settings['db']['host'] ?: 'localhost' );
	define( 'DB_CHARSET', 		'utf8' );
	define( 'DB_COLLATE', 		'' );
	$table_prefix = 			$settings['db']['prefix'];

	/**
	 * Authentication Unique Keys and Salts.
	 * See here: https://api.wordpress.org/secret-key/1.1/salt
	 */
	define( 'AUTH_KEY', 		$settings['keys']['auth'] );
	define( 'SECURE_AUTH_KEY', 	$settings['keys']['secure_auth'] );
	define( 'LOGGED_IN_KEY', 	$settings['keys']['logged_in'] );
	define( 'NONCE_KEY', 		$settings['keys']['nonce'] );
	define( 'AUTH_SALT', 		$settings['salt']['auth'] );
	define( 'SECURE_AUTH_SALT', $settings['salt']['secure_auth'] );
	define( 'LOGGED_IN_SALT', 	$settings['salt']['logged_in'] );
	define( 'NONCE_SALT', 		$settings['salt']['nonce'] );

	/**
	 * AutoSave Interval.
	 */
	define( 'AUTOSAVE_INTERVAL', 3600 ); // Auto-save 1x per hour.

	/**
	 * Disable Post Revisions.
	 */
	define( 'WP_POST_REVISIONS', false ); // No revisions.

	/**
	 * Media Trash.
	 */
	define( 'MEDIA_TRASH', 		true ); // Don't use trash for media files.

	/**
	 * Trash Days.
	 */
	define( 'EMPTY_TRASH_DAYS',	0 ); // Don't use trash.

	/**
	 * Bootstrap WordPress.
	 */
	if ( !defined( 'ABSPATH' ) ) {
		define( 'ABSPATH', dirname( __DIR__ ) . '/web/wp/' );
	}