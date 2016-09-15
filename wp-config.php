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
define('DB_NAME', 'gissella');

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
define('AUTH_KEY', 'wO_gUEuG]/<U?nC4aE1U{&zX+x2~Lq.NBrE>X-*?XPpD?-7#Wz^ % o>Q_*{Ixwy');
define('SECURE_AUTH_KEY', '@+xC?nV15_o]>W,Hf|/9O:IJ/&7Ju:ON:Y9Cbk3+Pa-y4mrng?sR2BUTiM!;?z)|');
define('LOGGED_IN_KEY', '?nX(EnV%2oW[>X+%r]kHX;)Uu!ZU@0PS}a!k@7|:ZqHu:8qI[pWM+JmGC0rw49u2');
define('NONCE_KEY', 'inS!&V`4t|p+BYUN-a]+~rqX`K0)snT2xxijtq!4YUyw1Fz,B(k-AXYUF,i|wa34');
define('AUTH_SALT', 'o+vJUy=|ZFs.Or}T~.jYe|>q&!-DdD+v|{5>~6O3c=4ksD(nX$4$Fd*-`K!gUJp7');
define('SECURE_AUTH_SALT', 'rS=s}T/yt1qTQ@}DY-U 49ke]dF(^5JHT-1Bx4zmuCG1ytYkop(D-(y]$sBZbm<[');
define('LOGGED_IN_SALT', 'H;=5Lp>V`i5])r|THkDuH3{hqa)z-?R==Z/{5h?LJ[!RZf4-I&o^/Y%|6|V%C3[|');
define('NONCE_SALT', '~FFJM7LieOym{G@<yeM.v#H|S:.QY$|?%B5pKF&kTc*ga#CS<ivXEi!f,@g,Zn7P');

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

