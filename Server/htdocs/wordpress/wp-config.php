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
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'compstore' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'Raigent1SHum73' );

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
define( 'AUTH_KEY',         'XlVK#%R:o5^07khi/^_8liRB2.m3~W5jxQ_@XUU&mfjQxB/b0R87B FB]G7JVbH4' );
define( 'SECURE_AUTH_KEY',  'P>.B(K:jePB9kI_quBdTMKc8&y]YZ>.t2JceJ8#sXnh]Ke}sv=rgwqZ^oVV.>yOJ' );
define( 'LOGGED_IN_KEY',    '(G&GY3^.B2Sg*Qf]af<bC6wd*yUy*/o1<0Vwa4_],Mm8GB!mH7xMdSYA,7uZL+Q1' );
define( 'NONCE_KEY',        'dzjQ+UKO15T!9rng<f!TutGo?=>/z9,`9m]_!yEq-Wi?GwmLbzo<K#W)KupEzp!r' );
define( 'AUTH_SALT',        '5=U=bkpvMI@j` v(5_kpCp!`M}J%rQ^lb$U4hx!!g6#6aG`JQ]W2~nfCR#wn^TcN' );
define( 'SECURE_AUTH_SALT', '(:4s]/SibjT*b3belq4j2^(,rW]BT6y~)CfWBfS5D%`@k#)ir|?d=`1r|[kMSBD ' );
define( 'LOGGED_IN_SALT',   '7bBHNgo<rR$N:IpqFxPFHNG76F}(|`S(8B+k0g[/VDnXM].QI}Ih|IEq0ke$gE;p' );
define( 'NONCE_SALT',       '#)^0|Tb]!yDk)pyl62$&DIapfmNQI(k6u:TSfd#)`%x3KGP?aX[<F7sh}fJPPv+`' );

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
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
