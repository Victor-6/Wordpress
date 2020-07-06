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
define( 'DB_NAME', 'wordpress-epitech' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'Victor@Epitech1' );

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
define( 'AUTH_KEY',         '.!2O2uX4.z%08k$X,<zI.Dn Bs*=hv48uOSckyoFWb1nk8M|dF92j`b_EhkfceNz' );
define( 'SECURE_AUTH_KEY',  'K*i<0o6Ym[#8-2)8,29VFz(VjKC{ oQ%)?~77mUsek`SwizT^uq%G_a7BwlF~y/-' );
define( 'LOGGED_IN_KEY',    ';&F=.n-y)~9%Z)H8MR9+x)@tzh>&/[o!}`Yb_@Ogz1XvwSS:QAp(}Esa%p)ZWOZG' );
define( 'NONCE_KEY',        'n9auyk5{i_lQO~d!N+ 0#GR^y]{0dLf^$P=vB,QiZP--Fw}H+Dz3<CQ9IjS?BIa)' );
define( 'AUTH_SALT',        '/r{RO?Ob<xk7N-;z_g|{Q3c)[N/#wWC?c#^Hl.d[YioY3~1?R],DX2s^0.17RPl|' );
define( 'SECURE_AUTH_SALT', 'Ul/z3y6@N.H<]vB0VfU$%?P_5n;AV|[!@lly9Sxw`!W i~Tla_U&ji:QWBM6iJCb' );
define( 'LOGGED_IN_SALT',   '|.dUASPE9gz1aD1 Yvoe?;_:v&KWmg/@W8qFK_OEDi5dP>~@y+t;DS@A*W;O@>c.' );
define( 'NONCE_SALT',       'ZLaf`UK7.>!TI}--3iqt4*q>i%*4ghOTE^,s)Mu^D=J}hw+!bW*+g)]Th5~+;}n6' );
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
 * Il est fortemment recommandé que les développeurs d’extensions et
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
