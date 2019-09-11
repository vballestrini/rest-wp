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
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wordpress' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

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
define( 'AUTH_KEY',         'U +Nt4*Cl_ Bw^./iWs8JH$CBQ>vb9vuNU<3r=&6|+JKAk&nLWsbFhs[D+tY@I_u' );
define( 'SECURE_AUTH_KEY',  'w#y^adfP<e%8W;L1=1>{L.ZbgMLt.}a[X}0|eHU5(w}t!G~:H+?#;g@ ~ZtP*hnb' );
define( 'LOGGED_IN_KEY',    'D0d(+i-.IVuyX}l{({gt#T2_Q%:@:nshKY`,anmJmE6CnICj>G-%Dv3 :Vz]K/fF' );
define( 'NONCE_KEY',        'WujQ4S4-USE/k=oMoPDNZF~XVRkX$.Qh@hx=`: O3xJI;Q(H]`.y65sP6|qj84;`' );
define( 'AUTH_SALT',        '8Vl3,?$)lClS%[yB_(SAVna_,Y)!|Dul[FWq[-W%[v)lWTb;x>T7KV*<U]jrt), ' );
define( 'SECURE_AUTH_SALT', '+^z)3[|_YV&G=,:m>1pM/EARqgJ:ql(Vq9}QmWE0hXs^$&uN+R;+* h4u|c(8wkO' );
define( 'LOGGED_IN_SALT',   '[9fqI2Ko~>P-fxh[P@c<;Kt>5>]9WU0U&v6z:ASHEHVUwTq~@_=NozV{&h$NGlvk' );
define( 'NONCE_SALT',       '3uk<cS/|cWH+@c<#XaHgPQ%emk.@EAmJP.3IONac$Kd-=c PQ;wAZ7Ns/J]u0eg7' );

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
