<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'curso-wp');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'QRvHr;V[u`i_hMkTHQ4&`/:pQO~IQUXD;DKqjQ/A<6[O$XW<Bu@z h@Q@LZ4~Z8c');
define('SECURE_AUTH_KEY', '0R:GOOn)#ST5>g+&<]_;0^@=gq5^K8KmvGLl~LHH#P61T @$S++I(0P09W;ldi:!');
define('LOGGED_IN_KEY', '8T@[M`g :7gnu7o59Z$CueQ5zZ$sE,R/bCBV#9dJz1|iWV2XUNnJ~h6c%YH. 0o.');
define('NONCE_KEY', 'WC$?kK0qw7fFCN~NEI8Q[!dOJ)P(MYVk% *_;6UZV 5j?/m~?%^Je,B&f!aB^_-^');
define('AUTH_SALT', '2u9p0)IzL~58Ag0N>b7pNXnHTnN0>C [-rAczG*Hxh;LVrap/,r}Rc3IxuU3i!eV');
define('SECURE_AUTH_SALT', '3w;X<Q3E{OFKV].rx-C)O.Ii>qq*;3{kTClZ_gxe[bQ&+kZJ|mf)A>9j7tb&084 ');
define('LOGGED_IN_SALT', '`{ECBXI}9&cj|,a,kkme>W,V1lx=1@?ya=*-:2pZLT3F1[v~,l;nm%dQd(=m.n($');
define('NONCE_SALT', '-|p*c];[vw$8s*wFMVeW01K<GwLxWQol%LO!3cbx P2=9]VJ|I(+JC|?U6g=&SzA');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

