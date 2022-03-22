<?php

// BEGIN iThemes Security - Ne modifiez pas ou ne supprimez pas cette ligne
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Désactivez l’éditeur de code - iThemes Security > Réglages > Ajustements WordPress > Éditeur de code
// END iThemes Security - Ne modifiez pas ou ne supprimez pas cette ligne

/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '|kJ0;F9/22 Geq7iAv2i!o0KHk-eE^YkL>@2I`?&0jB7j5rFr$f{/Q5QGC#XYcEY' );
define( 'SECURE_AUTH_KEY',  '/(J{_?&#ynps$D[i7+T,@X`Op]~j(Azoy$8]zale/(`82h:fW}d9E*yN<P*7t5+#' );
define( 'LOGGED_IN_KEY',    'ulo=}]u~rQMgA`*E/* ]DAN 594b7{S$T%<R0VXx5LCAW4)PLNnD%lnwaFACk:oF' );
define( 'NONCE_KEY',        '8H7}a9-F%v7L/3_eTo`=a5^=gURwRJuMN%UR);W?5`80lyDg0(Q!NME!i5Cyr]Lr' );
define( 'AUTH_SALT',        '732}ZB[@8/w_mQp4m/RoTQ-az`B+=-GZ!eha%0ecSOM.  *a~CcKKL&oV2*7gWiQ' );
define( 'SECURE_AUTH_SALT', 'A)[owghGw38iw=/ze1apdd,B9~QuP{;@E<IPz`wJ|0]ZJ ZU3!)7aA]M6L5bc:e1' );
define( 'LOGGED_IN_SALT',   'XnSMyu^r{#YK&!BR[)RDi8#vd]_]9^Ep%$N{pR#[x=9X%{xo*sp;[Ua Eoq`M5k*' );
define( 'NONCE_SALT',       'Mx&-:^/O+e]{UM%~HGblrPsR]!SEVb+R88!=IX}t<}4@w8_0;dGs|xQy3V@L^H.J' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
