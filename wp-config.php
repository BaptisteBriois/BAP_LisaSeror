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
define('DB_NAME', 'BAP_LisaSeror');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost:3306');

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
define('AUTH_KEY',         'dsx:vdn+-rG5FBaHup2=B(2x>hp3Compjh<W-S UT^8.gN8y!h9!]Y6**sFZc5(p');
define('SECURE_AUTH_KEY',  '_O2{Azbps2_[&Uv+ZN?qa+cQeG&$WQ Uk7Rboc^ovFUBKS$.O-OBM}p{D~%g``0*');
define('LOGGED_IN_KEY',    '@ U|:c6%&#(zXx_d8O>,l`evp^#MOLpm(lbU`}(x]?@]Q#/$pYHb1T$OHk* n#0I');
define('NONCE_KEY',        '+nkX_8l;L*bV}BywEZes_W1D->*@C=c79M*BFS#uoKcHLh!D.}LQe(r&-a/?J}L[');
define('AUTH_SALT',        'D7vPru;hvqAx;VCw7h$DwK&HZfiJUK$7nO.PJD;ojc-WLA&^>i?]C|t{$AOh*p,J');
define('SECURE_AUTH_SALT', 'gvPvx[2}zb;rw)imZDQ{ U[31%`e2F;Nf4J(37DVx[I|a(J!$4faD_Q>8KJDE|uW');
define('LOGGED_IN_SALT',   'Wln|brn3lP3eZ_32n6de4F9*j?(0o>{nDT)|Zc&HQpf=GUUja{tCiP!>fUhR#oew');
define('NONCE_SALT',       'F<1$DKhAT:)z9Db?:1zv>l[>MoyBI#aUj<ly`x#G|tKYT*iIu[<vhg#]L?h4/e]G');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_lisa';

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