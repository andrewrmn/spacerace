<?php
/**
 * The base configuration for WordPress
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

define( 'DB_NAME', 'spacerace_db' );
define( 'DB_USER', 'root' );
define( 'DB_PASSWORD', 'root' );
define( 'DB_HOST', 'localhost' );
define( 'DB_CHARSET', 'utf8mb4' );
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'tX?C?+#Re|yxm@H%9w[y>t*@ZOaYByN aT$Osc?,4T_sDgDf{W7w[an-SH2W/U#=' );
define( 'SECURE_AUTH_KEY',  '/c!]1)2Ktayg]#e2Qjbo-w1/P PB6Zui%aygq^nF^4v9w})Yo^/ y%w4` u%}h81' );
define( 'LOGGED_IN_KEY',    '(!2^T NkOY4pjW+,76qb/rP;d.r[U5H!MK#N[3S _E.ieWQ3`=mmBTVtk!`/6!27' );
define( 'NONCE_KEY',        'tkUff*Yc7m0G?}f^q0tM6>W}K6&m-Ih<Y9El5{^&?$}7co5h<e3.0 !T:&zb&&?@' );
define( 'AUTH_SALT',        '3kHPX6C`[=P=TuGf0Y.47Sl1F[G$%zCR!n0SE5xmj5GGYV[5FH5<m-8g=(FXB~b$' );
define( 'SECURE_AUTH_SALT', '3Ci,M.b2vpDlSWrh+#;a1_cYR&g(g*aJ&_Mq0tS5Hz_o*3mP@Y4gH}J-us)=]Alf' );
define( 'LOGGED_IN_SALT',   '|3R[T*bWE:0OCg]4dCXBcGxPt:6RrO8=P,LA_NRI><&d^4Tk)@<W|k^+#3IUHN<2' );
define( 'NONCE_SALT',       '/tZZU>gx7bSTh)@1XM;tO!a,e5|E1VkEb4ZK]b95go3Q5iIp3eWK6yuE}#E#R,Sx' );


$table_prefix = 'wp_';


define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
