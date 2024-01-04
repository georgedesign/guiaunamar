<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'NOME DO BANCO');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'USUÁRIO');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'SENHA');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'lc ,Bih{-|g@Ex(`S,.gI|)BvZBw}!t4f-<+9C982bYW=.j^.`lT}C(.2CfOLf+M');
define('SECURE_AUTH_KEY',  '^jh&AWVBDl3F3O]:WQtq9qybjr)|&WfgZQHc @B!{O6@Qlwz@BE!`U*>!3*Nqnou');
define('LOGGED_IN_KEY',    ';9tZmih!6tB)>DWz|?|c8imd1Y582|-s]^1!y853+>@A.+$v$ka@+vhgj0}X[hI3');
define('NONCE_KEY',        '%~AcZRX!/G`u75wJ]wP0I~?(gZqCo:ENx !sF16e=*K-qk`yeuQ|X/AanFANF{Z<');
define('AUTH_SALT',        'Sp|=A2XJrx+^:Jtl}@t[.i:mo+VqdY_jln,J?:B1d!K;=n^=ah(zme*r^p3EXTH]');
define('SECURE_AUTH_SALT', 'n:Pa9MU1PZIS?Hhzdm]}|m4,e2+}onDxi|RU ?-tK!?#3|aE>#xO&|h+PEDhwSw!');
define('LOGGED_IN_SALT',   'td@R%;E.$YYAsp[;@|}7=:-9iW91;RjF.V%wu($e8On$hkgZ~8pFdwq@dg%u ^k3');
define('NONCE_SALT',       'LIA;tzm.$eSD`+lRSnS1[xy}7?kKf3bcUOJ<?`x]hVcrN*2~6-quv,jEc(tMgnh%');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';


/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Tradução :) */
define('WPLANG' , 'pt_BR');

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
