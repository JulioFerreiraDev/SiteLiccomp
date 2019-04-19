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

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'wp');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'fCWRX.A~MM(5w7o7xsTxxePyH=j#8IXGgCeL^-]M_W@QiBNf#=m4GQ<Wxu(sL:7^');
define('SECURE_AUTH_KEY',  '6)bI9O5XaWhKqUc8f)6p,3E.j:uR`QY]%*GI~;qB/?Fs6}eDp]sCC`K$V<E?b!a7');
define('LOGGED_IN_KEY',    'GJ$EHr!zt?Waos)HXUQapZm8h_F)R<-Gmkp[.tYs.1+Khx:gYw8hyrB[>8:VA#bf');
define('NONCE_KEY',        '/$~S@3aC@?ND@A%`:hv#BR_Avj;Pl^O@Oa60Ca~$gRQu~?]|(qmZXZF2F?F!zLSB');
define('AUTH_SALT',        '6Q:9i}I 3*F!sMu~L,e4Zy@%d%TK}39(U@8[k.UpRcM7FJW]?9O9E-4g)1vR5p:M');
define('SECURE_AUTH_SALT', 'yVu9ow_uoM[/yA4x#sV)S?yuRr_]L)$:3J[r=vA@Amu,v*jz!Q5_^x:|v{lf_W~>');
define('LOGGED_IN_SALT',   'd{+dy*8OGbe`sJ)8/K8O;+yq^<<@|Ymmwk&g:l#=6,Dt%lL*8ZqQk/=Srb7dwdO|');
define('NONCE_SALT',       'W(zoLHxD1j_AxDm{8gl?U8x5=ZEUl_cG;KJ>DQH!zfhh5dD]T05$y [<BV;yvOG1');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

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
