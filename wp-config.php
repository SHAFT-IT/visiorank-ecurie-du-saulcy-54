<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'c135ECU1335qN9xCb5');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'c135CqN9xCb5');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'uwgsCJ8w_9MT');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '(AREFiw>})Yr/-p.>2;5,v<LcqWu/t7MM} M_+c4bys#m[iJ9DRnG1p)C|np},&~');
define('SECURE_AUTH_KEY',  'N>p<P5jP{FnxALZI|>R#nZ{=M cBBOJEE&]L8G2SlTi-sv835[@@iI_+gFq@rOY=');
define('LOGGED_IN_KEY',    'j/9onqwV7lqQh<]4s!!gT@>l/4=3]Cwt`0-y}12E|S2<!jR=Jz{@D>z9M1^:en[F');
define('NONCE_KEY',        ' &Ht&iy,Y{3>jj6qpJ>.rNz9Jc!&yQ$_Y|!(D5uD/|b`zu{lO8WqbsE=,Ev3YQmI');
define('AUTH_SALT',        'xw vz8T_&ud*|3!fAuB(tQm|R a{(*>TLtET[@)lt;$Y<7`/PigKU]uFS?Z(Hr!$');
define('SECURE_AUTH_SALT', '.x*fq~U2}s#e)B3jg/:dH{^[W2#n,(eiJG2I`?@lv&5h*-O=/bbX*C!-Tv1M.[8k');
define('LOGGED_IN_SALT',   'kdxm46#1_5:@XvS4I(/jV])YI-bjr!Otc}zhoHHv2iw(P>{|rfX,l0Z;zhXD6A~%');
define('NONCE_SALT',       '/__6)i758:,xfbJTdP`#jw_A*h>&dZ{iAG3q]_.2Up_kBr:bAhRIkz V?@rZYy#4');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

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
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');