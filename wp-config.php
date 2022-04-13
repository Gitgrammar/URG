<?php
/**
// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'urg' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'grammar' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'Peerwordpress1' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'J<n.*<o[Jb)!E9|sP!xj! |P[~8A#J)GbS#+!Z;sZMD]#C?lsLn=EFyd94>Ty`P!' );
define( 'SECURE_AUTH_KEY',  's9oau[(3&`4I8)k-a].4tGDN.?b.PaRcY3f~8LPN1^ZgINB6~)*.;<bJ{{fb;n1&' );
define( 'LOGGED_IN_KEY',    'zIS^@ywv<u,x<D.t=/xZnXzicJ!=@$yY6HIv>BJy9|Q[(H(a1^VbuggY@QS$fOt6' );
define( 'NONCE_KEY',        '!N=uuLs-KcF5(K!p,[<e0pqlLY&&DPQ%.LOvzONf}Cf>d#|<;xOSn6EGcoTYtha!' );
define( 'AUTH_SALT',        'v5D*#wryPGoX)jNAY+EA.PF</N96xyMeIS!h4sk*SBgB]:!TqQ j0=7&FIoHa)[R' );
define( 'SECURE_AUTH_SALT', '@2;X>_[f*)s^]4%4[BRBTN@,$B+Ea*feCt1W7^Fgu5BP#)7&Jl*HX[j1=x%&xMC>' );
define( 'LOGGED_IN_SALT',   '|bB%,#7S4ay|arRpY6@a[eJD?(u]_!I!@GWGr$<.C6>nMs<C9tXcZghG3>-~Ip9M' );
define( 'NONCE_SALT',       ']UW1-6E.Aw+#!GOd*q6YV#l`V)F](~b;33_%T9@B2$y3Xms+l4GI2DTBM.4F}+yO' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* カスタム値は、この行と「編集が必要なのはここまでです」の行の間に追加してください。 */



/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
