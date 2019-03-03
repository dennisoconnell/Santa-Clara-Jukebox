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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', '10051757e4c8718950c559e10ad9312b1a10b94d8fe4fc6e');

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
define('AUTH_KEY',         'o+z5ziB)g0DuHfu!]rhT;SAF4k8yl4l63Z8LGxh~8UQ8Z5|vRD$ub^=!WU4~%.Fk');
define('SECURE_AUTH_KEY',  '&gQKY&G#|46Y].@sDQ}8b<w`x|n.t)M]>TF=@)bp>kX96?PL?yd5]=*/O5K*+43j');
define('LOGGED_IN_KEY',    '{I0tzM(>X/M@[/SJ>N)}OX(Sw@klEHqkjezilNyyGbhCr> hB?1u>cM=T|%yZz/$');
define('NONCE_KEY',        'buiY@?U;5@}o_M4E6a<MH5@hf_P05jV7F)qaEQ_}7&/CmhO)+6l l >{wep`Kr!a');
define('AUTH_SALT',        'jiww#,~Ls9tQPw9V Y~F$k9@Zc0zXb#)a,9.25mR}@h#7w:Z^WQ^BwziJSRV1<^F');
define('SECURE_AUTH_SALT', 'E>K2_6:#J:Nz*uCeQ]f~4=Zd4K_(}t?4-AdO|X:< j>~ufGq9^ ~M-9&iU[[&?oj');
define('LOGGED_IN_SALT',   'vn7s@M2mRTw~[(P*N]v<>Uz#`Vza6/g~g(Y8 =)rt^Ud|&StG2mczjRM:Q7p,:v/');
define('NONCE_SALT',       ':)lwsT(kl]6[+N[!:2NI8ZhMPcogGgK@@zMQaU`wLx6B/u)KH*b;cju,ieOwHCh9');

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
