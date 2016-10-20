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
define('DB_NAME', 'bojack');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'i%5t81CcE^!k*?sxC:y+L3:qw,t:ilO[lUZg$nz,:HZt+812]MC Yb70o{`(Fpk@');
define('SECURE_AUTH_KEY',  'I9%bbw45SM,:?Qkic%ZV{?Ww$|)DL9,f(_ Zp1JvS*P3[f@=hK<)0wOksfe)5y(9');
define('LOGGED_IN_KEY',    'R/7s0k}hK~w0rHxu<F.-^o#2fIO G@lI ?lQ~8/~CtX!G?+1<.kTk/uLs0}0@)oE');
define('NONCE_KEY',        'k$#EH,xWX^iN5nni,kuF`V(:kD)iKx`w/z-<s>T2mM4$o6,(rOANkb|-A*zgmg.3');
define('AUTH_SALT',        'cy|,qB67e2bn3(*oYO}&|a^j?,K>*[1V0o&Dgyr_+fU i[Ms9rSzj.vnz:I8P0z/');
define('SECURE_AUTH_SALT', '0ut3S,}L~Uo`9O=Yr4g5Lc4qh8OWP9h75U`Nb,Y~+KV7,Z,F&;:L(OpA9{uEdoeD');
define('LOGGED_IN_SALT',   'vi:*d-EfX$o=B?h*m~]d,!<R[NvQ+fn}8S;13;[0zLfL<PI~?EoKxkC]t<b[[Ciy');
define('NONCE_SALT',       '>*?6GRdzXL_goNe8fpj>FA-(_pA7`$nCgPKZ]OEIK!CzLYJzyd%P6D%T..W^gN`&');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_bojack';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d'information sur les autres constantes qui peuvent être utilisées
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