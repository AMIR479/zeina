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
define( 'DB_NAME', 'agenceImmo' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost:3306' );

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
define( 'AUTH_KEY',         'D:VrL2Wp.c`_5qL]|E3vD=Q7G#&UZCQwSd1h2OOMegM2AviqGi_/,h:2_mk~02<2' );
define( 'SECURE_AUTH_KEY',  '5e{Q2cX/>2USAMW E!<WX*NbRkYEQ2OHxLh9FD;u`$WaWt!HgI_ zBxx*MF(L<1&' );
define( 'LOGGED_IN_KEY',    'i1!kuXM]?tz$[ Aep0sVyd+g+;aG&67v+r&p}v/H]mEdp1h:&p#*=p,B+?:b^<LV' );
define( 'NONCE_KEY',        'Bh:]Eb8c.958`Q-mX6^75e2}ddbN,vCE/x?m)O^}P(W@CPI@j1sw^fkOkTO7b)kv' );
define( 'AUTH_SALT',        'Qxr%t18N(wsBIAAB1~1{lx2;_]kWs+0JUw+X*kaykok(L:{LdaTp/8<jY4LB`Yrz' );
define( 'SECURE_AUTH_SALT', 'VZ{R$0!I:2a5u6D8Lmb4>oY<hG/?c{NUT::;XQ9&PsLf4<8e;G<0ejytL4[6SgH/' );
define( 'LOGGED_IN_SALT',   'Rjl/R%/Go&E[OS!Zt8*u@k]B@y~`8-_?gz ~e8CO^sS?U|hiDGeMSpDsd)V[c},B' );
define( 'NONCE_SALT',       '8/@n_[FXq?551!kj@+h8pz|hyY3M_xWC XM7iXyA>E~Crx6R]vE+Xl]f)!v$oKO]' );
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
