<?php
if( stristr( $_SERVER['SERVER_NAME'], "domain.dev" ) ) {
    /* DEVELOPMENT SETTINGS */
    define('DB_NAME', '');
    define('DB_USER', '');
    define('DB_PASSWORD', '');
    define('DB_HOST', 'localhost');
    define('WP_DEBUG', true);
    define('WP_DEBUG_DISPLAY', true);
    define('WP_DEBUG_LOG', true);
    define('WP_MEMORY_LIMIT', '99M');
    define('WP_MAX_MEMORY_LIMIT', '99M' );
    define('DISABLE_WP_CRON', false);
    define('FORCE_SSL_LOGIN', false );
    define('FORCE_SSL_ADMIN', false);
    define('DISALLOW_FILE_EDIT', true); // DISABLE WP FILE EDITOR
    define('SAVEQUERIES', true ); // USED WITH DEBUG BAR
    define('WP_CACHE', true); // WP DEFAULT CACHING
    define('WPLT_SERVER', 'DEVELOPMENT'); // USED BY WP LOCAL TOOLBOX
    define('WPLT_COLOR', '#4267B1'); // USED BY WP LOCAL TOOLBOX
    define('WPCOM_API_KEY', ''); // AKISMET KEY
    define( 'JETPACK_DEV_DEBUG', true); // JETPACK DEVELOPMENT MODE
    // NOTE: Jetpack will automatically enable development mode if there isn't a period in the hostname, i.e. localhost.
    // WP LOCAL TOOLBOX Disable plugins we don't want to run on DEVELOPMENT.
    define('WPLT_DISABLED_PLUGINS', serialize(
     array(
         'wp-super-cache/wp-cache.php'
     )
    ));
} elseif ( stristr( $_SERVER['SERVER_NAME'], "staging.domain.com" ) ) {
    /* STAGING SETTINGS */
    define('DB_NAME', '');
    define('DB_USER', '');
    define('DB_PASSWORD', '');
    define('DB_HOST', 'localhost');
    define('WP_DEBUG', true);
    define('WP_DEBUG_DISPLAY', false);
    define('WP_DEBUG_LOG', true);
    define('WP_MEMORY_LIMIT', '512M');
    define('WP_MAX_MEMORY_LIMIT', '512M' );
    define('DISABLE_WP_CRON', false);
    define('FORCE_SSL_LOGIN', true );
    define('FORCE_SSL_ADMIN', true);
    // define('FS_METHOD', 'direct' );
    // define('FTP_USER', 'domain' );
    // define('FTP_PASS', '' );
    // define('FTP_HOST', 'staging.domain.com:22' );
    define('FTP_SSL', true );
    define('FS_CHMOD_DIR', ( 0755 & ~ umask() ) );
    define('FS_CHMOD_FILE', ( 0664 & ~ umask() ) );
    define('DISALLOW_FILE_EDIT', true); // DISABLE WP FILE EDITOR
    define('SAVEQUERIES', false ); // USED WITH DEBUG BAR
    define('WP_CACHE', false); // WP DEFAULT CACHING
    define('WPLT_SERVER', 'STAGING'); // USED BY WP LOCAL TOOLBOX
    //If not defined as PRODUCTION or LIVE, the plugin will enable
    //'Discourage search engines from indexing this site.'
    define('WPLT_COLOR', '#3f67b1'); // USED BY WP LOCAL TOOLBOX
    define('WPCOM_API_KEY', ''); // AKISMET KEY
    define( 'JETPACK_DEV_DEBUG', true); // JETPACK DEVELOPMENT MODE
    // NOTE: Jetpack will automatically enable development mode if
    // there isn't a period in the hostname, i.e. localhost.
    //
    // WP LOCAL TOOLBOX Disable plugins we don't want to run on STAGING.
    // define('WPLT_DISABLED_PLUGINS', serialize(
    //  array(
    //      'wp-super-cache/wp-cache.php'
    //  )
    // ));
} elseif ( stristr( $_SERVER['SERVER_NAME'], "domain.com" ) ) {
    /* PRODUCTION SETTINGS */
    define('DB_NAME', '');
    define('DB_USER', '');
    define('DB_PASSWORD', '');
    define('DB_HOST', 'localhost');
    define('WP_DEBUG', true);
    define('WP_DEBUG_DISPLAY', false);
    define('WP_DEBUG_LOG', true);
    define('WP_MEMORY_LIMIT', '512M');
    define('WP_MAX_MEMORY_LIMIT', '512M' );
    define('DISABLE_WP_CRON', true);
    define('FORCE_SSL_LOGIN', true );
    define('FORCE_SSL_ADMIN', true);
    define('AWS_ACCESS_KEY_ID', ''); //Amazon Web Services
    define('AWS_SECRET_ACCESS_KEY', ''); //Amazon Web Services
    define('FS_METHOD', 'direct' );
    define('FTP_USER', 'domain' );
    define('FTP_PASS', '');
    define('FTP_HOST', '' );
    define('FTP_SSL', true );
    define('FS_CHMOD_DIR', ( 0755 & ~ umask() ) );
    define('FS_CHMOD_FILE', ( 0664 & ~ umask() ) );
    define('DISALLOW_FILE_EDIT', true); // DISABLE WP FILE EDITOR
    define('SAVEQUERIES', false ); // USED WITH DEBUG BAR
    define('WP_CACHE', true); // WP DEFAULT CACHING
    define('WPLT_SERVER', 'PRODUCTION'); // USED BY WP LOCAL TOOLBOX
    //If not defined as PRODUCTION or LIVE, the plugin will enable
    //'Discourage search engines from indexing this site.'
    define('WPLT_COLOR', '#3f67b1'); // USED BY WP LOCAL TOOLBOX
    define('WPCOM_API_KEY', ''); // AKISMET KEY
    define( 'JETPACK_DEV_DEBUG', false); // JETPACK DEVELOPMENT MODE
    // NOTE: Jetpack will automatically enable development mode if
    // there isn't a period in the hostname, i.e. localhost.
    // deactivate a set of plugins
    //
    // WP LOCAL TOOLBOX Disable plugins we don't want to run on PRODUCTION.
    define('WPLT_DISABLED_PLUGINS', serialize(
        array(
            'restricted-site-access/restricted_site_access.php'
        )
    ));
} else {
    die('Please check wp-config.php file for correct SERVER_NAME settings.');
}

//SHARED CONFIG VALUES
$table_prefix  = 'wp_';
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');
define('WPLANG', '');

//AUTH KEYS
//https://api.wordpress.org/secret-key/1.1/salt/
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
