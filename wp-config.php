<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'restaurantewp' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'MIAA}6>!5fTf+2,6 `7!.F!7.k@9>i&S7*+<Le7aB`H2b,/]/2K)T=Q- {le8&[}' );
define( 'SECURE_AUTH_KEY',  'zJ)jKf;j0tU,8Xc/l;K;PgHZOJz;-.Q4]+d{+W=Df_NwG;2%&^}QqQRljK}ULr7%' );
define( 'LOGGED_IN_KEY',    ';FW1MToPpi{&Lifa737kT6/ ;[NQ3QE6w5xG2, | Op!`D$(v=)8]4QbCOh@jifw' );
define( 'NONCE_KEY',        'UgdexR2o:i^{J-KtoSj!={KtHMgja[9N,Tx;sfvHQomcYN7r upO[@8G#B2dwKcU' );
define( 'AUTH_SALT',        'c8lu?%vA|jY:8wZvW$bbyIYMM={yMs8Y*/<CFO8X$%GJh^A./ml(=!IKX%~?Bm4*' );
define( 'SECURE_AUTH_SALT', 'u%Nh[hI[D37R,/tA|7!}-CJ?qc5=s,}GI2$I2NlHNXo9/Jy1n^r!7 x+q2gB>-V=' );
define( 'LOGGED_IN_SALT',   'A*FNG,VOr$w[{BnB7:>U! vl8fDpfbYenijP7txG.uyy09Ig-8CQg?u4/3rS(- o' );
define( 'NONCE_SALT',       ' Q}F3!T?4)<|8Kid{$_z-&87Q[*u!h9y;2yi{{TN1QyD=/lt r|G(xig0;i<~07L' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
