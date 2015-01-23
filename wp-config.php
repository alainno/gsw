<?php
/**
 * Configuración básica de WordPress.
 *
 * Este fichero contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información
 * visite la página del Codex {@link http://codex.wordpress.org/Editing_wp-config.php Editando
 * wp-config.php}. Los ajustes de MySQL se los proporcionará su proveedor de alojamiento web.
 * 
 * Este fichero es usado por el script de creación de wp-config.php durante la
 * instalación. Usted no tiene que utilizarlo en su sitio web, simplemente puede guardar este fichero
 * como "wp-config.php" y completar los valores.  
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solcite esta información a su proveedor de alojamiento web. ** //
/** El nombre de la base de datos de WordPress */
define('DB_NAME', 'wordpress');

/** Nombre de usuario de la base de datos de MySQL */
define('DB_USER', 'root');

/** Contraseña del usuario de la base de datos de MySQL */
define('DB_PASSWORD', '1234');

/** Nombre del servidor de MySQL (generalmente es localhost) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para usar en la creación de las tablas de la base de datos. */
define('DB_CHARSET', 'utf8');

/** El tipo de cotejamiento de la base de datos. Si tiene dudas, no lo modifique. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autenticación y salts.
 *
 * ¡Defina cada clave secreta con una frase aleatoria distinta!
 * Usted puede generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress.org}
 * Usted puede cambiar estos valores en cualquier momento para invalidar todas las cookies existentes. Esto obligará a todos los usuarios a iniciar sesión nuevamente. 
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '<.uX6f-3qBP<8_QIwlA4XAciq`wLL/sdln9pTAsaZnVnDx*-GUAwGN2D_/7aq8q)');
define('SECURE_AUTH_KEY',  '13O7FP6RC+^AyXTWtNj(sB4pvWMl@G[S9VD/!j4+ZrXJd:~I!Kc|yRp7SY+a#[_q');
define('LOGGED_IN_KEY',    'k ?Ztuh+mK&=hJNxs!5T,ji7PzIW1Jo(;3@6/$zQ<`+)hY/hI+x9V92$V!IIgu62');
define('NONCE_KEY',        'Ze1-P&5q4bj$eE|]4n<T947d<Lvu3=&H/:=kzd`8DxnSY9>DGmQQcATtE4sIOhC`');
define('AUTH_SALT',        '^%1_t%%Z$m>GdVm&A`]_%>`CJWri!v,+#4:r/d^:Yyv(k:Y2.W}3=^#}fMTx7W2~');
define('SECURE_AUTH_SALT', 'Lp/i@Z)7WlLsa?p+<7^Z9`M.FqJ#mMMJFkW7O8T?+xj&zEs<6t/z61D5i0`B&:K-');
define('LOGGED_IN_SALT',   '/A`J|SBi+~PTYu}oq9eluF#NUS mKbwc+.*(,|.S[87xI]P*0K]-SY-XA(OH.&$i');
define('NONCE_SALT',       'CG f4^[ UF9FMYkI71a=qq+=X3-EgWSRq-bn+E}_FaB!r`Q)N<-xb7q?<BKJ#_/{');

/**#@-*/

/**
 * Prefijo de las tablas de la base de datos de WordPress. 
 *
 * Usted puede tener múltiples instalaciones en una sóla base de datos si a cada una le 
 * da un único prefijo. ¡Por favor, emplee sólo números, letras y guiones bajos!
 */
$table_prefix  = 'wp_';

/**
 * Para los desarrolladores: modo de depuración de WordPress.
 *
 * Cambie esto a true para habilitar la visualización de noticias durante el desarrollo.
 * Se recomienda encarecidamente que los desarrolladores de plugins y temas utilicen WP_DEBUG 
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deje de editar! Disfrute de su sitio. */

/** Ruta absoluta al directorio de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Establece las vars de WordPress y los ficheros incluidos. */
require_once(ABSPATH . 'wp-settings.php');
