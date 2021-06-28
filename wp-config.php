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
define( 'DB_NAME', 'wf_curses' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'admin' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '123456admin' );

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
define( 'AUTH_KEY',         'Kq)Jw%gw;1p}2piJQb?ObRlVTYk$R gI8`8^|fkw[^U0&|m;,J~j[ucJ}RD<Mlun' );
define( 'SECURE_AUTH_KEY',  '*P:Z0+d:9!Fz51bl~lA%v^Y w8KvM.r5!IuvOqL;WXS$#|uHxRMY}(Yz.B*CN=>G' );
define( 'LOGGED_IN_KEY',    'AZe_lrp3irYu9CncGYn-6|7E1JO-+zK[qhk=a4li^&Ga_?F]6>;%CTV0K;:yo9m^' );
define( 'NONCE_KEY',        'J<xEIF~=NqZ>0OIdk6juwW[CoX@/^x)Xr};dTFAAAw*_,OPStkj(o<P?Ij)Sz$$w' );
define( 'AUTH_SALT',        '4U/m`@(gVov}!mK2H%)Q7!Y$eWv`@ztS0UH236v2Xa0<*_YWfA)oLW4+b>vqj`7X' );
define( 'SECURE_AUTH_SALT', 'oZzd38->ND4A[ UF/vCdi-Up:&$,5&`d|(<a@sanRHO~6W:5K=O!?_8=`^oyH]Jq' );
define( 'LOGGED_IN_SALT',   '@EjKAcLIqw6_l#65s{%Udx48q#VBSPr47DtUIVyBH|%przq-k^Ni@(ZC6eryhbi]' );
define( 'NONCE_SALT',       '==mzOht-(#`w$xqx,RB8l}c|:2jR.vZ4w!g})rnuOJ!=_F>mVyz*A/LrL3y2@&Z:' );

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
