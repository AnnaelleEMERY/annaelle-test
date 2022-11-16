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
define( 'DB_NAME', 'annaelle' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'Tam47koo.' );

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
define( 'AUTH_KEY',         '2>J1o;g|R_Em(^B$3XK.:uJ-js}y^(<-riZ<`6e<q}/&ztV6<5cRJRcqZ[9[TTNC' );
define( 'SECURE_AUTH_KEY',  'Uu75O[7B.H>bV9EXIwP+Z@GL pIL6Tw7XeKC35<5Z<pYL<|z^<e&5;4pJ-%9>H(-' );
define( 'LOGGED_IN_KEY',    'yn`2sL Z L>w&p1.!eHF>Sv(r9VCs5r=JwaRR.w6]}jP-60D%j_>=Ia1y,,..`BH' );
define( 'NONCE_KEY',        'dVjER{.5 1@L|nxu:/=SJYG%V$&W^`/-yQ}) _c6MUy+P%5Cf4qdUAUb@emqQ76d' );
define( 'AUTH_SALT',        'C,|/9@W#4]O!(e-Hg1s5t<I5??Nkb-uEG;i^uo1!8ndPQFBPth;5<347S1X(8$ m' );
define( 'SECURE_AUTH_SALT', ')xrq++!86=z$PV_l9l` aH!XpC6#ra&PT(}3l+kYrlLsGVLOrL%^CnaB*!JQJpo|' );
define( 'LOGGED_IN_SALT',   'gyCWDH83[BWGyg+aAtC)lg9Z!=Uyf%wtSk|J2,`ypOP#ueon(5h#}9UqMNi,~!xn' );
define( 'NONCE_SALT',       '1J% {fMfO7SckrCv}IgYj9K)Kql>4z-Tq=,R >tZilqY/?0KaHjWFl[ ;cutNoTM' );
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
