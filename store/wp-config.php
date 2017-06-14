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
define('DB_NAME', 'n260m_16685188_prendas');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'n260m_16685188');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'nicefood');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'sql210.260mb.net');

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
define('AUTH_KEY', '?*Avr#A`LwE*F^w)l%uP@*zdF>~[U.W/<&+^BI!p`,Fw?_Zuc^x*[`%M`+@w4:PX');
define('SECURE_AUTH_KEY', 'QRrY{gbz17-%L9mHf,:4RiE]us6d3Xq<_*qt^0+)d[wHA[3z@K.|V1ULVR/K?~mK');
define('LOGGED_IN_KEY', 'gU#75k;Z?)U0(x6n32nHcOG 8M0X~l>[0;2 p:fzVh1I.HA6kEp0#Le$pVl>$dP%');
define('NONCE_KEY', '(GHcSn;L/^=[V~[u7-#y<;QN2-W?(pE*[jAwX3aszxFb!O3D1xUOWL PB,lP:Q5/');
define('AUTH_SALT', 'Bgoo,WO{pL&zioaYrxe^ }NN)R*cXG<v67vvHC7G.O:_DF6IP1n>8g}+Bse4riR0');
define('SECURE_AUTH_SALT', '}SBs4]}t0 <- /SY&]D(3W_FW%iVDH=Hnw3rm=}i,C9PI,`7`BIDb)ew<yyCf 3$');
define('LOGGED_IN_SALT', 'WOp3~A.gE7F;Ez]NNT~9;Bc]A-[~kY*F.A!:(*bXI$&j~9GE$hDEboM!ZoFA@QCJ');
define('NONCE_SALT', 'v(:=raU;D2|%X/hI_nhSn4}My$jbY1@-9h#3~8y2fAr70RzbJB(=V%D`VCKz;_wX');

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

