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
define( 'DB_NAME', 'site_sulwork' );

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
define( 'AUTH_KEY',         '%29*su|wzB/?^1=a5#Q/I9EBSNu?g=r:b7@3wRj1``JtNN:-SV$ZvQ:mBJFWI/dy' );
define( 'SECURE_AUTH_KEY',  'ENg7)[v8^Y[)iw3^OYV+0;R8#Y]#jFzj5j-Wl-{ICXf*kViGf2YNDYv&%*tBk^HN' );
define( 'LOGGED_IN_KEY',    'E^rw]?2kNXO7B`b5fUa*9Y>P,{MhV-ELo`t5>1 g9`Q[O9uG#+dY<V8Eql/=E_P#' );
define( 'NONCE_KEY',        'F8@i2f>44vNYH[IL;[.mk2g`$C<djJPkhfX/RxP2^!h|5<c.?/nB(eewBoy~9b_>' );
define( 'AUTH_SALT',        'tHmaHb6zF(v~*eS0)+A^QexXjPQ 9T_4HXczgULkv5VVlYS:!w.l,6F7zJrCo@+{' );
define( 'SECURE_AUTH_SALT', 'rnpu>)Olq>bDA@MtWko7!q`Z*1*+`Ao@{-[Zr^~%ds2dFMx3q05Ykfn>&L[){U`X' );
define( 'LOGGED_IN_SALT',   'AVS/rKn=~.nR+)N_Sz@.3m1k%=|_`GEC;cjB%8obRl&i=(bF4]E9LMR}0,h%*L R' );
define( 'NONCE_SALT',       '^%:+F(AZ=d~c$?IXgxy%0JwoOj$lEO=z%8o<B/3sIm%},UvWl<>`;@?n/#([$KVK' );

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
