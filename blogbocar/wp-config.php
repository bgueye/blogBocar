<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur 
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'baseblog');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

/** Type de collation de la base de données. 
  * N'y touchez que si vous savez ce que vous faites. 
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant 
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'D6Q6Ze)+$*tUhXJu/SE4JU~R%- k<K#r{7*M,|+g$`%,X6 3@T%aBp=5EMHMe?F!');
define('SECURE_AUTH_KEY',  'b+@/A$FICQ}0vlaX/a#4(U=LI;r*YOI+_6+!hO8#o!icKy}`Y[NqyoHiC!f]f(H_');
define('LOGGED_IN_KEY',    '*/-?9mNuBg.gZu7r4k6%*@R9ui#-j+pg1+.Sj=_W)}Em5f%>H tC<bKeDC#A{{xE');
define('NONCE_KEY',        'r5e^;Lc-g&$Zd4Q/;=+~ W3cncqld{d#{-#X^O+NCAx8/u+[|Z4h^^0*Juq{TLWC');
define('AUTH_SALT',        'G#=*V<uB/-y*@&hXm<g8Vl2G:m+vW~m$%mq(e!_;b(`xbli+N.i[w;$MUe&i~Ctp');
define('SECURE_AUTH_SALT', 'EAAvFtHbsHCso R9Pj|eVK31PGjX^@n%y.j8UJ Qncno!E*=!+w-?FRb|U|IXRak');
define('LOGGED_IN_SALT',   'O`&,3+CckQg]#}@|7SxP%Kl8NIO]/@4[T1Hkb,[]Et0;5lh.eJ/_|+_E|t}V4jY^');
define('NONCE_SALT',       '<V8Q=VZ(>T}<A!@S{dh1|xGN]dL+. -Z^|uh{mK/yD9M-A)47F(rZ.[4u>H=zl^3');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/** 
 * Pour les développeurs : le mode deboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');