<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'bobu4306_portfolio_planty' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'bobu4306_wordpress11' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'tdqR3ASGBSd5bwwERv' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

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
define( 'AUTH_KEY',         '-tl/}?_Mn>GT:!Yxd)s72vhuxeN!uvAw#RMCBC5oV]c(E?0JC=thAP21M!L;Xu=z' );
define( 'SECURE_AUTH_KEY',  'Q$x(`lZy--*ComeD>sV_6Li^l$0 t-Y28*L?g3d&:31Zg,Nw Z9RF{-e[f3:eR</' );
define( 'LOGGED_IN_KEY',    'd(R^FPsiy$+r70A1-DMZ~MPMGXAW#_P$JJIXeQM|)(9Rz:q6iPYi~EtOsKj,Bk4+' );
define( 'NONCE_KEY',        '.rdkOunf*#eIvir.PpYWYK[X5B?,j&t^wW)E5[`[|wZWx=.YN5.].xXrcZ/7Rl-=' );
define( 'AUTH_SALT',        '8FiM7`2HfZpe$qAstaU{wQ!l;r*P .Uk^;!gYDbCB.QA~{r{r(:(0wI$~H<ze;#A' );
define( 'SECURE_AUTH_SALT', '9w V;?43xyN$6<B@xg`+gtd<QFE}_)lH&)[D:4q4]sy_DQptN%TICOcsnL0t7ujz' );
define( 'LOGGED_IN_SALT',   'M ;CjmG )q01T~f.><;en:1J$OQz{Q:[]:vQ*mG*aFM-<gf^9?:V=<Gaxk4yJdW!' );
define( 'NONCE_SALT',       '9YF0QY$6XL89DCHO-~cph@hs/8oQHH<U@%~c=8N%:j~zbRb2Doo8?t*$^Y:w5x%.' );
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
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);
define('WP_DEBUG_DISPLAY', false);
define('WP_DEBUG_LOG', true);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
