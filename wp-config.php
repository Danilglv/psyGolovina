<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'psyGolovina' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'danil' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'password' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '8uF6&]jR-|nTS.XVL^ d]<AlZK;Eh7S4%mw1uAC|P4MSVNvvE)=[SS{uMIKjh.b/' );
define( 'SECURE_AUTH_KEY',  'E$7<%bK) {wh#22X:LVwR7{^I>HVUx;f<FTn>0[jO(/gE7;L@JMk]%bGoE_b,df-' );
define( 'LOGGED_IN_KEY',    'c=!j$ke@fRE.@]K_F7jL.m@Q(Ba+i^k!1!t,o_o]<ewDXyAk;gwW@fNBF1N0VpMg' );
define( 'NONCE_KEY',        ',K,`%A[(F$ZNtuF/3P+9s|AAmW*eG&FXeLa_Um8`M$~<b#>%cah)ukD^/Hbo-(`}' );
define( 'AUTH_SALT',        '6JQBem(Gm%BM|~UW?C&>`FxHAVOx7P+w9~oz;P`NReQIdpjIhR_b7`556bTB:g(&' );
define( 'SECURE_AUTH_SALT', 'MBVu8F:-H9(Un3MC`C~W6AZI>8x):A%zodnXh(8Zd!HONbIUJnpHV:!|]fg)nPq3' );
define( 'LOGGED_IN_SALT',   '&57XA{u}:xhO={|[P 2tr`@h!XaSj9j{G^fUy&e!~%rnGo23s}T$l#cx|;A)l@ .' );
define( 'NONCE_SALT',       'hg`naZQ*R)}Ujl*?}]9F-TP0E|KiPACFe]:O!t*-iWx2A{m*b21i-Q<y}/Qm{ /P' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );

