<?php

if( stristr( $_SERVER['SERVER_NAME'], "localhost" ) ) {
	/* DEVELOPMENT SETTINGS */
	define('DB_NAME', 'name');
	define('DB_USER', 'user');
	define('DB_PASSWORD', 'password');
	define('DB_HOST', 'localhost');
	define('DB_CHARSET', 'utf8');
	define('DB_COLLATE', '');
	define('WP_DEBUG', true);
	define('DOMAIN_CURRENT_SITE', 'localhost');
	define('SAVEQUERIES', true ); // USED WITH DEBUG BAR
	define('WP_CACHE', true); // WP DEFAULT CACHING
	define( 'LOCALINDICATOR_TEXT', 'DEVELOPMENT'); // Used by Local Indicator
	define('ENVIRONMENT', 'DEVELOPMENT');
} elseif ( stristr( $_SERVER['SERVER_NAME'], "staging.domain.com" ) ) {
	/* STAGING SETTINGS */
	define('DB_NAME', 'name');
	define('DB_USER', 'user');
	define('DB_PASSWORD', 'password');
	define('DB_HOST', 'localhost');
	define('DB_CHARSET', 'utf8');
	define('DB_COLLATE', '');
	define('WP_DEBUG', false);
	define('DOMAIN_CURRENT_SITE', 'staging.domain.com');
	define('SAVEQUERIES', true ); // USED WITH DEBUG BAR
	define('WP_CACHE', true); // WP DEFAULT CACHING
	define( 'LOCALINDICATOR_TEXT', 'STAGING'); // USED BY LOCAL INDICATOR
	define('ENVIRONMENT', 'STAGING');
	define("FTP_HOST", "staging.domain.com"); // FTP DETAILS
	define("FTP_USER", "username");
	define("FTP_PASS", "password");
} elseif ( stristr( $_SERVER['SERVER_NAME'], "domain.com" ) ) {
	/* PRODUCTION SETTINGS */
	define('DB_NAME', 'name');
	define('DB_USER', 'user');
	define('DB_PASSWORD', 'password');
	define('DB_HOST', 'localhost');
	define('DB_CHARSET', 'utf8');
	define('DB_COLLATE', '');
	define('WP_DEBUG', false);
	define('DOMAIN_CURRENT_SITE', 'domain.com');
	define('SAVEQUERIES', false ); // USED WITH DEBUG BAR
	define('WP_CACHE', true); // WP DEFAULT CACHING
	define( 'LOCALINDICATOR_TEXT', 'LIVE'); // USED BY LOCAL INDICATOR
	define('ENVIRONMENT', 'PRODUCTION'); // FTP DETAILS
	define("FTP_HOST", "domain.com");
	define("FTP_USER", "username");
	define("FTP_PASS", "password");
} else {
	die('Please check wp-config.php file for correct SERVER_NAME settings.');
}

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

$table_prefix  = 'wp_';
define('WPLANG', '');

/* MULTISITE */
define('WP_ALLOW_MULTISITE', true);
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', true);
$base = '/';
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);
define('WP_MEMORY_LIMIT', '120M');

/* CUSTOM SETTINGS */
define('WP_POST_REVISIONS', 15);
define('ALTERNATE_WP_CRON', false);
define('UB_HIDE_ADMIN_MENU', true); //HIDE WPMUDEV BRANDING
define('PI_CRON_DEBUG', true); // ENABLE POST INDEXER CRON LOGGING.

/* THAT'S ALL, STOP EDITING! HAPPY BLOGGING. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
require_once(ABSPATH . 'wp-settings.php');
