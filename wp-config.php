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
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '82FZ96e7,,vA]<y@tb |c!?29x;mTA-%:-?1&#{:(#(s0KUpX>_]2vk<|7^D&(Xp' );
define( 'SECURE_AUTH_KEY',  'HGFUCi6hjW[U8^[u&_7!ILr%z7=]NDlxE7Xx>Tybj<^OB:rA>4r%,5~63)6<KSGm' );
define( 'LOGGED_IN_KEY',    '[tenLj(d%7WmQPVOZ-Uv05lGp!UkVFrydc?~NUJY`H>djGSd?u?C=]l8@I_|Mjoe' );
define( 'NONCE_KEY',        'd,~t,Z.~!5J/B_cf|.w<YgLa@bh<h `y;Z;$RRWrtC{iDBSgqW~H^eFnm 6Wx{5j' );
define( 'AUTH_SALT',        ' c=Ypa_Z!B8p0|QEz**0=|+C:NN%(QqZMybJ_4>)xvKHQn%,XYQ<&ASI{-Yqxo q' );
define( 'SECURE_AUTH_SALT', '&TiZe6Uv.rIG)wO~.4 *9!hf.~yHc;y~kA7A!Il~fSrf4ZMux=Fw<I4E.=g.y9EG' );
define( 'LOGGED_IN_SALT',   '`I/nrZB:/)2c*TU7HZ.qgbDM?(Y{8/zQ+c1Bw(?mFLG{F0/8s5gl4fz3i9Eq~[h3' );
define( 'NONCE_SALT',       'dF9(a]H16Gr|H~!J9IuW70@ZT-.57e&$(aU&&oL5/]d^V,2aG{~3^iCc/*x!vVcz' );

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
