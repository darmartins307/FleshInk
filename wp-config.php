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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'fleshinkprod' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'dev' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'root@123' );

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
define( 'AUTH_KEY',         'n=L1E85q8y&*=sxp81o`Hk:7y>VqPDuF6~[[ajz1It<RaBNA?Z8ezF3%W1~?sK&c' );
define( 'SECURE_AUTH_KEY',  'kw$)%/<r.jmzhzs?-)Vk6? b%1!g-&~KYJdg!XU(-! zl[Kwb) vhhm5&W!swt*<' );
define( 'LOGGED_IN_KEY',    'g,T@4o|;sVS;E _AT)BwG@mt@L&4wcG4v}z:E]GsmLzT79oB1|Hy8]98E?clUO0&' );
define( 'NONCE_KEY',        'Ry[r0G%93etW%|P{.I63L:xv4mWrCdl6p~dcori&TZ?0c~V0f},O]/j4_8Z>{B78' );
define( 'AUTH_SALT',        'H?J7rsq-8.mimN-xdtg+wsx$NsneBL<w-7pk_*1.x9QOLvq3NJ&)h }sE3< t2w{' );
define( 'SECURE_AUTH_SALT', '(d|l[xqRtZDaA^{Y0`7TU^-`Bje.D)>;2-K`[5]JTn-h@D7=@dp`[+%m BdGLoH2' );
define( 'LOGGED_IN_SALT',   'Xmu.|^u~E1(obvQCqetGzQ~=-X{&O/OpT@Ue1^akhQo`;o]9zf}3<$<6AgK/9YQZ' );
define( 'NONCE_SALT',       'Ljp{XV@akYPivq%p}zjO=z3@uH_Pc;$c!sxE]fS/Pn-zpB,P({-Sk8}<Jq3:B/<}' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
