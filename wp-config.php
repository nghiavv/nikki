<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.osdn.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'nikki');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'root');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', '');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8mb4');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '}/^(W&/%SD/=e22[-3Ar3)vaJoakY(p>/(/_mk&q#K7|GdPu5ks$,5s{-;& QBIl');
define('SECURE_AUTH_KEY',  'Hkfr;P[^$x!:3qksB1o0*h66]w]S&iM{_! g6iv/F~X7~4>W LYT@(L)V7;,eH|^');
define('LOGGED_IN_KEY',    'Ka*)CGJOgcMeBLf{0nKqq aog6Tn#H&nRkdvD}<&d<!/*tYH-;WkvDarz?9rtBWY');
define('NONCE_KEY',        'S-EW2&RP-_lu%k8IvG|^oXvT~bJ(TQmqK+j!ZvrQQ%[>VjnA<V5kW?H9YNUA3Hxf');
define('AUTH_SALT',        'KIW,xPU|TJzo}AfTko!*4=AN4nV~WD8X`ZF|u>Vb+o-?d`O/d|toX.RA}fl/oD8/');
define('SECURE_AUTH_SALT', 'Oxxd]3sQ F9%ny^Zuye1B8/:tijl/>|^nM>MMDe@uRKal8RVVV5G9]R5~#y1rWYg');
define('LOGGED_IN_SALT',   'J]k+biTO<~5&hV$||DCN[2zNL^dErjQd@J1Vp.l(t4&Sec)rFrX;peeg[^*q)E*^');
define('NONCE_SALT',       'G&O*^4RzP*upc-N.>mzhT-PpF!=bf8BObNFcmy7VSV#lC{@%IV1Cc{<[UGlV8cKl');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
