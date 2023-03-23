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
define( 'DB_NAME', 'planty' );

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
define( 'AUTH_KEY',         ';?*G4k8@I]l=W:/-L D I*Kd]),95,6aF`qfhpQ1Dca#3R7+E*X-!WDcy5ubcsui' );
define( 'SECURE_AUTH_KEY',  '^]58hYA$N(]%% ridm.64f1JK)`!!l78$XS.5hZ0uOMal _TUiJvf:O@J:Bm.Rbq' );
define( 'LOGGED_IN_KEY',    'w!`//<uMW`, 0@XkL94karxjAbpk>=iB[&xgQkWL1g,&N*4p18 r?5n`w[AQp$I]' );
define( 'NONCE_KEY',        '9?.zKmKNQKe)e!j3PZ  E&|=n|X^i)nS[Q#oKb||:_]Ij3F`;:*N4T(lh~t,)FiH' );
define( 'AUTH_SALT',        'Mc!t4w@C41S472I$f]JV:[0*DTfu3q1b`u#Re*@;U]D8hGGB(>fN~&4OkFX/0=^7' );
define( 'SECURE_AUTH_SALT', 'n|+Yz=E^g%uE4I1z.67(DWxxrppZQp:hu*?}@}c{~q>q>B-l e@tmHVrnUtT9Y?o' );
define( 'LOGGED_IN_SALT',   '>L-dg)^(, GV4b;<_@M5}UB,YroR-on;^d.SL>{39M;]Lz^ymVCegcb^amo0Kf z' );
define( 'NONCE_SALT',       'G]Q+]{M?9ZOg#Oq{N@8Y;R;OdX6T`+4a }DLT&w/bCx=p=2:yk1?6Ic}},S;)fe?' );
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
