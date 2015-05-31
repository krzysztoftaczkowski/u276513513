<?php
/**
 * Podstawowa konfiguracja WordPressa.
 *
 * Ten plik zawiera konfiguracje: ustawień MySQL-a, prefiksu tabel
 * w bazie danych, tajnych kluczy i ABSPATH. Więcej informacji
 * znajduje się na stronie
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Kodeksu. Ustawienia MySQL-a możesz zdobyć
 * od administratora Twojego serwera.
 *
 * Ten plik jest używany przez skrypt automatycznie tworzący plik
 * wp-config.php podczas instalacji. Nie musisz korzystać z tego
 * skryptu, możesz po prostu skopiować ten plik, nazwać go
 * "wp-config.php" i wprowadzić do niego odpowiednie wartości.
 *
 * @package WordPress
 */

// ** Ustawienia MySQL-a - możesz uzyskać je od administratora Twojego serwera ** //
/** Nazwa bazy danych, której używać ma WordPress */
define('DB_NAME', 'u276513513_baza');

/** Nazwa użytkownika bazy danych MySQL */
define('DB_USER', 'u276513513_admin');

/** Hasło użytkownika bazy danych MySQL */
define('DB_PASSWORD', '123WSNHiD');

/** Nazwa hosta serwera MySQL */
define('DB_HOST', 'mysql.hostinger.pl');

/** Kodowanie bazy danych używane do stworzenia tabel w bazie danych. */
define('DB_CHARSET', 'utf8');

/** Typ porównań w bazie danych. Nie zmieniaj tego ustawienia, jeśli masz jakieś wątpliwości. */
define('DB_COLLATE', '');

/**#@+
 * Unikatowe klucze uwierzytelniania i sole.
 *
 * Zmień każdy klucz tak, aby był inną, unikatową frazą!
 * Możesz wygenerować klucze przy pomocy {@link https://api.wordpress.org/secret-key/1.1/salt/ serwisu generującego tajne klucze witryny WordPress.org}
 * Klucze te mogą zostać zmienione w dowolnej chwili, aby uczynić nieważnymi wszelkie istniejące ciasteczka. Uczynienie tego zmusi wszystkich użytkowników do ponownego zalogowania się.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '+}d8@ _||d{}>uy4{r)v:~>i1&efmAGd.$!Wf]Bl8^?qtc.OzONTUmC(}DBn.I1T');
define('SECURE_AUTH_KEY',  'CMt#*ZR[Dzc+-|))$VLI]j7iXmIEInrf[eHFmIv/~|?~t f.-hUutF}6X!C|-Vv<');
define('LOGGED_IN_KEY',    ',oot-3%^?[_kMmlAbB~A0sxTKUy;|`luT|vo:*E%gqK!W&Bn&.-EJQ-Ez-#_]9-/');
define('NONCE_KEY',        'WVY6@VeY- *c_!h_J8f*m+y8nv2{.B}7L&+k?k-d$YbvMkOUM1uO@^PE:[]x+W)9');
define('AUTH_SALT',        '$YNaoZlSM2beX6n*[d:xgS}%J#9pQjsh_ JEsi8Ce,+#< 13@IeYVy{AqT;IbEPz');
define('SECURE_AUTH_SALT', '~S2Ca)EN6DN1SvAI)7#}_YU:3i!$+w-G``kc#_6+){F/2R|SUYy?IwuY^{,W9vMC');
define('LOGGED_IN_SALT',   '%,4nfgQ]xw^ZG2NaVSmX8_L*1@H-H#R7hJ:2mkl]0r<(|x-5)<Pn|rCkI!--Dnmr');
define('NONCE_SALT',       'Ujw*3AY:3cjseLS[3=c-tL0lxsERE?VAyI?c*fg6E.F:5f7 rFnd-Mht1eBlTNJ*');

/**#@-*/

/**
 * Prefiks tabel WordPressa w bazie danych.
 *
 * Możesz posiadać kilka instalacji WordPressa w jednej bazie danych,
 * jeżeli nadasz każdej z nich unikalny prefiks.
 * Tylko cyfry, litery i znaki podkreślenia, proszę!
 */
$table_prefix  = 'wp_';

/**
 * Dla programistów: tryb debugowania WordPressa.
 *
 * Zmień wartość tej stałej na true, aby włączyć wyświetlanie ostrzeżeń
 * podczas modyfikowania kodu WordPressa.
 * Wielce zalecane jest, aby twórcy wtyczek oraz motywów używali
 * WP_DEBUG w miejscach pracy nad nimi.
 */
define('WP_DEBUG', false);

/* To wszystko, zakończ edycję w tym miejscu! Miłego blogowania! */

/** Absolutna ścieżka do katalogu WordPressa. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Ustawia zmienne WordPressa i dołączane pliki. */
require_once(ABSPATH . 'wp-settings.php');
