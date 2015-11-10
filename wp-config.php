<?php
if( stristr( $_SERVER['SERVER_NAME'], "domain.dev" ) ) {
	/* DEVELOPMENT SETTINGS */
	define('DB_NAME', 'name');
	define('DB_USER', 'user');
	define('DB_PASSWORD', 'password');
	define('DB_HOST', 'localhost');
	define('WP_DEBUG', true);
	define('WP_DEBUG_DISPLAY', true);
	define('WP_DEBUG_LOG', true);
	define('WP_MEMORY_LIMIT', '99M');
	define('WP_MAX_MEMORY_LIMIT', '256M' );
	define('DISALLOW_FILE_EDIT', true); // DISABLE WP FILE EDITOR
	define('SAVEQUERIES', true ); // USED WITH DEBUG BAR
	define('WP_CACHE', true); // WP DEFAULT CACHING
	define('WPLT_SERVER', 'DEVELOPMENT'); // USED BY WP LOCAL TOOLBOX
	define('WPLT_COLOR', '#4267B1'); // USED BY WP LOCAL TOOLBOX
	// NOTE: Jetpack will automatically enable development mode if
	// there isn't a period in the hostname, i.e. localhost.
	define( 'JETPACK_DEV_DEBUG', true); // JETPACK DEVELOPMENT MODE
} elseif ( stristr( $_SERVER['SERVER_NAME'], "staging.domain.com" ) ) {
	/* STAGING SETTINGS */
	define('DB_NAME', 'name');
	define('DB_USER', 'user');
	define('DB_PASSWORD', 'password');
	define('DB_HOST', 'localhost');
	define('WP_DEBUG', true);
	define('WP_DEBUG_DISPLAY', false);
	define('WP_DEBUG_LOG', true);
	define('WP_MEMORY_LIMIT', '99M');
	define('WP_MAX_MEMORY_LIMIT', '256M' );
	define('DISALLOW_FILE_EDIT', true); // DISABLE WP FILE EDITOR
	define('SAVEQUERIES', true ); // USED WITH DEBUG BAR
	define('WP_CACHE', true); // WP DEFAULT CACHING
	define('WPLT_SERVER', 'STAGING'); // USED BY WP LOCAL TOOLBOX
	//If not defined as PRODUCTION or LIVE, the plugin will enable
	//Discourage search engines from indexing this site.
	define('WPLT_COLOR', 'orange'); // USED BY WP LOCAL TOOLBOX
	// NOTE: Jetpack will automatically enable development mode if
	// there isn't a period in the hostname, i.e. localhost.
	define( 'JETPACK_DEV_DEBUG', true); // JETPACK DEVELOPMENT MODE
} elseif ( stristr( $_SERVER['SERVER_NAME'], "domain.com" ) ) {
	/* PRODUCTION SETTINGS */
	define('DB_NAME', 'name');
	define('DB_USER', 'user');
	define('DB_PASSWORD', 'password');
	define('DB_HOST', 'localhost');
	define('WP_DEBUG', true);
	define('WP_DEBUG_DISPLAY', false);
	define('WP_DEBUG_LOG', true);
	define('WP_MEMORY_LIMIT', '99M');
	define('WP_MAX_MEMORY_LIMIT', '256M' );
	define('DISALLOW_FILE_EDIT', true); // DISABLE WP FILE EDITOR
	define('SAVEQUERIES', false ); // USED WITH DEBUG BAR
	define('WP_CACHE', true); // WP DEFAULT CACHING
	define('WPLT_SERVER', 'PRODUCTION'); // USED BY WP LOCAL TOOLBOX
	//If not defined as PRODUCTION or LIVE, the plugin will enable
	//Discourage search engines from indexing this site.
	define('WPLT_COLOR', 'green'); // USED BY WP LOCAL TOOLBOX
	// NOTE: Jetpack will automatically enable development mode if
	// there isn't a period in the hostname, i.e. localhost.
	define( 'JETPACK_DEV_DEBUG', false); // JETPACK DEVELOPMENT MODE
} else {
	die('Please check wp-config.php file for correct SERVER_NAME settings.');
}

//SHARED CONFIG VALUES
$table_prefix  = 'wp_';
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');
define('WPLANG', '');

/* AUTHENTICATION UNIQUE KEYS AND SALTS. */
/* https://api.wordpress.org/secret-key/1.1/salt/ */
define('AUTH_KEY',         'generate your keys');
define('SECURE_AUTH_KEY',  'generate your keys');
define('LOGGED_IN_KEY',    'generate your keys');
define('NONCE_KEY',        'generate your keys');
define('AUTH_SALT',        'generate your keys');
define('SECURE_AUTH_SALT', 'generate your keys');
define('LOGGED_IN_SALT',   'generate your keys');
define('NONCE_SALT',       'generate your keys');

//INITIALIZE WP
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

require_once(ABSPATH . 'wp-settings.php');
