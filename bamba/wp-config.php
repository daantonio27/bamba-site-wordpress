<?php
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
define( 'DB_NAME', 'bambadb' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'dac4MySQL' );

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
define( 'AUTH_KEY',         'LU1X>VRTN!o3$&ZAf*T8Q|t yJ(DQ+ r|$*VCM^xNNDk7=1:TgOH+^{0lgyhjo*^' );
define( 'SECURE_AUTH_KEY',  'fIr<@-3<zq7{PSm8RdLazYp>=pVsHI>R-;B6]#`$4lXG,W[o_7,0G%IH*a]0[n}1' );
define( 'LOGGED_IN_KEY',    's ~|3nv&RGNZW,h!w<E)N_(C<APyR&iq@:Nbpu6p4>(a,TvliUNnVF.(%x:n?4Y}' );
define( 'NONCE_KEY',        '&l,]Z!n[IHjWk3PW`{;p|q5VL/@&GOMclDR5n6W5`FRY,.L$0d<3HvYw*y#^~#9J' );
define( 'AUTH_SALT',        '}OW_JX:hU4N L.m=2I$I>dR%4kL/(:V[zx7PEBTTQ)FA!d,%c>mKPI}~#8}[>f!g' );
define( 'SECURE_AUTH_SALT', 'zZl?hsSxE_~UF0!ngE~z3Q~$ b34z_`kcT{;/+|Rt,-!3gY}Twn%=}*gMZWcx{Em' );
define( 'LOGGED_IN_SALT',   'N4%43jQhmDsVC#T._rbAO(bD5a)8U]##t{[KvO(B/!*-]uWBa<^.VH4f?85G0C:Z' );
define( 'NONCE_SALT',       'Jlis2AzkF$(->QWKC)UE,#ZuAc^|evR *uBBqBoG>XFgvW6&XA;-H?fR>a5m~#ab' );
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
