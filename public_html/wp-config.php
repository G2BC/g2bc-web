<?php
define( 'WP_CACHE', true );

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings

/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'g2bcun_geral' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'g2bcun_user' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'Db@Tbjpgh0Ta' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'db.painel-web.uneb.br' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'k^G-3SPL@>Ur2:L3h+8)o+kHP8`%oBA-!&p)Ix ?YCDrW+S&X3/;|[V;o`>Z. Z_');
define('SECURE_AUTH_KEY',  '/sW|~OB0;;{Y3D1;;v`+[IM-b]mhP1@^-.f05![+R)faC0F@o<nnDJl-+}OY`zfl');
define('LOGGED_IN_KEY',    'q2}|-A#gDqd-CYn$fuR+o9;,m#Bt>4skH{fw#b2bin-yyyhcO.uRr.~NEK+%Q|g?');
define('NONCE_KEY',        '(HTsgzqT|7M,+Wh/4b~7s>`pz61_n+rLxZ7w]N,w+~{sx6J5yn78d5-N<1M!lT/)');
define('AUTH_SALT',        '[4L1`u,*mO0Px+v[-szdQ1@%>UwpAOxd?A<GfcGBKF|T?u+{[]Hd<`Y-)Q-^E3HO');
define('SECURE_AUTH_SALT', '`-*xg,1Z`iu46=uSl)2<Ur/b>|+<}r_nN+80G$}XXDAP}|i8/du7k@#oE<+EhbTK');
define('LOGGED_IN_SALT',   'r.0L xaly|W9-_W]fls*r(hMt+w3st$_y,8m=bT&NC(Twai21n(KXuR>|8ZM4[>-');
define('NONCE_SALT',       'ON!<.b2J`X7s_j+G$:f~%KS(E$rlMQgPI,{1fXu-&YSV_wPW9(v:Sq]Q#U/|/VZb');

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

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';



























































