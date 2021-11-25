<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'web' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Fu~4dRmfurgSfc;Aib[4LFl>x(c5x57u}wP BvDT&e;$fszxLma1E{#xVT_H$BGq' );
define( 'SECURE_AUTH_KEY',  'b=$fmzaF|`.!~UhAfd9AA=4v)ItsEimXpy{Wcl=}HJebhY,=k@j^b+U5Q>o~Ww.7' );
define( 'LOGGED_IN_KEY',    'W?U[.YEhMuoN}m~(.Y/3.ZKYL,y,9xSro|>$bsmym1mV{/H#JW>oE-)[N&{e<oG.' );
define( 'NONCE_KEY',        'P_-Q/ZAzIh>BJGM:*Yj 36M]zyLd>VmsDB:seZZC4Zz@jV`Hu[A{9Z|YMMH]BB)=' );
define( 'AUTH_SALT',        ';1bnC#}*8!9Z1L}SnqRRp{DOZ<0ila6ReFBnapbF$#~c;dR@2j6Cu;c@KVxvrNjT' );
define( 'SECURE_AUTH_SALT', ',%,C>x/.E9?;qpWS2ZmmhNP-m2Q`08lbJmtFayO L,e~!k=n_C-Tm56p6#+;,24n' );
define( 'LOGGED_IN_SALT',   'Z*KqhCnnx0K]@-*Q]U:t3,/8M=LE03>[M*grBBZm<9uoD)@Ttz=dZ^`.9Kto,[-k' );
define( 'NONCE_SALT',       'A.< ]*,2cq6t.lc7ny@+KutKLTv]}$%Vm^FTI:woZ(/#v``:a+^1^ZrQs2Q`e.^i' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
