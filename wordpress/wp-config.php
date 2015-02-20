<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、MySQL、テーブル接頭辞、秘密鍵、言語、ABSPATH の設定を含みます。
 * より詳しい情報は {@link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 * wp-config.php の編集} を参照してください。MySQL の設定情報はホスティング先より入手できます。
 *
 * このファイルはインストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さず、このファイルを "wp-config.php" という名前でコピーして直接編集し値を
 * 入力してもかまいません。
 *
 * @package WordPress
 */
// Required for batcache use
define('WP_CACHE', true);

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.sourceforge.jp/Codex:%E8%AB%87%E8%A9%B1%E5%AE%A4 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'wordpress_db');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'root');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', '');

/** MySQL のホスト名 */
if (isset($_SERVER['SERVER_SOFTWARE']) && strpos($_SERVER['SERVER_SOFTWARE'],'Google App Engine') !== false) {
    //define('DB_HOST', ':/cloudsql/golden-medium-499:wordpress');
    define('DB_HOST', ':/cloudsql/golden-medium-499:wpcloudsql');
    // To install and set up the db, visit
    // http://<YOUR_PROJECT_ID>.appspot.com/wp-admin/install.php .
    // Or, to install directly from the root URL, also define:
    // define( 'WP_SITEURL', 'https://<YOUR_PROJECT_ID>.appspot.com/' );
    define( 'WP_SITEURL', 'https://golden-medium-499.appspot.com/' );
} else {
    define('DB_HOST', '127.0.0.1');
    define( 'WP_SITEURL', 'http://localhost:8080/');
}

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'itc.P_Mw4M5Vfg)hPJL-PzaK|A[0X;X0YYmX*w^ 8|QSo+|$!@6|XC&K`XWco)n2');
define('SECURE_AUTH_KEY',  'l]3ky7p77t ;%/?~r[yF.g#QaX$ Ws}0+rUsdRlv~nbf-(1kgbBp{gr^/j$H*|}c');
define('LOGGED_IN_KEY',    '&hUQ_9=5$8=|+ygm:KuF0GeGg:.6ePa.T^dqBnqtf285o9r>Uk:ZzJ{(!8!~8oK3');
define('NONCE_KEY',        'ut+.bL- `-*,Gm/%%<I]4n-.(FSa@mNOFADY5&^p~-%;_[qKJry%@ImeyLJ27kV[');
define('AUTH_SALT',        '&io{1F)Sd&:K]$D)ZOgd8*DJCWd&9p=]]O)C#m?}NTn+M $[ :XE2VrrJF75%UjJ');
define('SECURE_AUTH_SALT', 'C[HuSo9YCfrhLPD5MRNX;bq.Bz:-_new9<TPRJrVLuTkrTk1Yk:D`9|*!94b)h()');
define('LOGGED_IN_SALT',   '8cS,<bHt(c?IZRGI$Z[i~v@!C5|+?-VZ,N&wZ9rio|>Z(1$Z7C3WXm{=?M#epW9H');
define('NONCE_SALT',       ')bDr,eEU!-tEu/&?OW#-w Y`M-e1hX.58*5ke+|c@MQ}Os%3&UE^LejN{y(#|ocB');
/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

/**
 * ローカル言語 - このパッケージでは初期値として 'ja' (日本語 UTF-8) が設定されています。
 *
 * WordPress のローカル言語を設定します。設定した言語に対応する MO ファイルが
 * wp-content/languages にインストールされている必要があります。たとえば de_DE.mo を
 * wp-content/languages にインストールし WPLANG を 'de_DE' に設定すると、ドイツ語がサポートされます。
 */
define('WPLANG', 'ja');

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

// configures batcache
$batcache = [
  'seconds'=>0,
  'max_age'=>30*60, // 30 minutes
  'debug'=>false
];
