<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'i873804_wp16');

/** MySQL database username */
define('DB_USER', 'i873804_wp16');

/** MySQL database password */
define('DB_PASSWORD', 'P#Dx(i*K*1LmBgg1^f.34.(7');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '6efNfdaL8j301qIcKa0KiOU7xgNlzDxB4A9YGLvwzXc6bNp0emwMuvFsjqclE2Mm');
define('SECURE_AUTH_KEY',  'bt899S6Wk5FQXhxdyVEgIqERt8WTiiJaImLmfXK5RervmQekJLlpcxYeAulWE8E1');
define('LOGGED_IN_KEY',    'lZ565pgqzyoJcArcyp8tak1wnZiFISngv7ilBSuG2gnLIqBNbSxNYXoqWNMwSwQ8');
define('NONCE_KEY',        'JTmfl9OLZejo7DfHtmm5dGe9D3sSXakzLdW7k3miUELfGBP7iL1aes7tORqAk2hz');
define('AUTH_SALT',        'SPfSMXK8xi16VZgkPWbktfwxOS42zvCfFFiVNmdRqsF4VBC0qwFUzM2EfySRM63I');
define('SECURE_AUTH_SALT', 'ML0QqTUb3c2ivDib7JkOnMskCS6euZgCMpfZesgIn5fBBDVPp7fJktLz0qwOp1z3');
define('LOGGED_IN_SALT',   'Lb9jLppMdKEZT6q5tjpjaBlprwLuQYTa6LogmW4Hveqj71gx2LxXKsp8BodtT3jZ');
define('NONCE_SALT',       'fWItNCIgHBKDZyxPyUpO6nyKEytSEXZON4QCNESQdyW5SbvQtjljT9XmaUaIS0ht');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
