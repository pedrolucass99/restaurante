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
define( 'DB_NAME', 'cardapio' );

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
define( 'AUTH_KEY',         '@F2l]{[F==f^.a_X^=_XgC<,|S{RvkX$^2^p=37J27n8O$y{##UMNt>NeSE|SMce' );
define( 'SECURE_AUTH_KEY',  '2/A-pli`xWmrVxtV^+*:`X3aS~?<zwYyxO`94O;YA9W_Cjpp=iN~q?~GX}Ov5XH1' );
define( 'LOGGED_IN_KEY',    '>Z[Yj~UiftX}lp7n3Xbs4RqG7@V3_2?^C=#Ga:}pG7A/;*#BDCfI5=v~&[F_NWlr' );
define( 'NONCE_KEY',        'J6uOK<~Tw+zMaEgj..C#p<jO1b[nk&iHa0IM^lvQE`@j?Ilq-DoQlRAct)GC_^Q2' );
define( 'AUTH_SALT',        'ze0~j)d,(8mm*/Ct=UhFUOqYkdnY@LeJ:+=rHJy8fOF;90exougCk_0s` Cb}7b`' );
define( 'SECURE_AUTH_SALT', 'q)42MLdwhaNrDQ3Z6GLzA%C_L?T$CwYiHcZRTFHy;rqG=is#XZPL2SwB{]mT|VT1' );
define( 'LOGGED_IN_SALT',   '/&JR|acA9Xrf#fsBaxYZA74Y SSn1.)!R?[F>8@mfSn!nt0in|}kr;xL 6W{0.gE' );
define( 'NONCE_SALT',       'TfjT4BmBTkPj=emQ:HQpb6eQp`k,J|m[Fn![v;5}&u=cy{9A,mBn~=D~S16+J]!6' );

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
