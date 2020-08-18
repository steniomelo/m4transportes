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
define( 'DB_NAME', 'm4transportes' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'm4transportes' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'm4321#@!' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'm4transportes.mysql.dbaas.com.br' );

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
define( 'AUTH_KEY',         'YPh=rsZ]WB&4.U|olSz>E@1Uf`aBmFjWyyUE=9E|uTt&PP#8<+h-6@6yrCby$osI' );
define( 'SECURE_AUTH_KEY',  'iFg,b|Ea0x7}1-Yd$V>nW`(-YO_7p68_M!,nhc/D~w1SDC6;=wqFw %6M9<Qxc6Y' );
define( 'LOGGED_IN_KEY',    '$ F%/NFUz<@J7>XMQ]z)<+<GgqoV@MP:3$9r}|7i7c [2,U$On[@yL-BEv`v ([^' );
define( 'NONCE_KEY',        'ji=K:BETnIj3ci.$Fx]-C.vZQQ[g.Y 2d@7#s=/=V6m~5#(xux@3w->*s=?|9:]7' );
define( 'AUTH_SALT',        'H:-1Ef Z0p@KE4LK`Lm`h<v!y QdQ;A10cQaBMww<x*@>G,ppE<d.u*7`>^qs(x8' );
define( 'SECURE_AUTH_SALT', 'lMi9o~I|A*nkOjb|I]IC}z_Ib3xu)d2iQn-iPE^MP%kP?[kd6`Bhy#G@;fA!H#);' );
define( 'LOGGED_IN_SALT',   'no#n~g2~F woHLr+*re& ]h6:J[qAVWXeYn8m8)c|Px0X9ohyFSWMs=YtcihiUfB' );
define( 'NONCE_SALT',       '|dMZ788di*HB{H1=(<j(n@XxA!w|0i#,GAeolxzjO<H1)Z):QJ&b`96nNMIc;|r}' );

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

@ini_set( 'upload_max_filesize' , '128M' );
@ini_set( 'post_max_size', '128M');
@ini_set( 'memory_limit', '256M' );
@ini_set( 'max_execution_time', '300' );
@ini_set( 'max_input_time', '300' );

define( 'WP_HOME', 'http://m4transportes.com.br' );
define( 'WP_SITEURL', 'http://m4transportes.com.br' );