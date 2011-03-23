<?php
/****************************************************
*
* @File: 				us_US.php
* @Package:			GetSimple
* @Subject:			US English language file
* @Date:				01 Sept 2009
* @Revision:		23 Jan 2010
* @Version:			GetSimple 2.0
* @Status:			Final
* @Traductors: 	Chris Cagle 	
*
*****************************************************/

$i18n = array(

/* 
 * For: install.php
*/
"PHPVER_ERROR"			=>	"<b>Unable to continue:</b> PHP 5.1.3 or greater is required, you have ",
"SIMPLEXML_ERROR"		=>	"<b>Unable to continue:</b> <em>SimpleXML</em> is not installed",
"CURL_WARNING"			=>	"<b>Warning:</b> <em>cURL</em> Not Installed",
"TZ_WARNING"				=>	"<b>Warning:</b> <em>date_default_timezone_set</em> is missing",
"WEBSITENAME_ERROR"	=>	"<b>Error:</b> There was a problem with your website title",
"WEBSITEURL_ERROR"	=>	"<b>Error:</b> There was a problem with your website URL",
"USERNAME_ERROR"		=>	"<b>Error:</b> Username was not set",
"EMAIL_ERROR"				=>	"<b>Error:</b> There was a problem with your email address",
"CHMOD_ERROR"				=>	"<b>Unable to continue:</b> Unable to write config file. <em>CHMOD 777</em> the folders /data, /backups and their sub-folders and retry",
"EMAIL_COMPLETE"		=>	"Setup Complete",
"EMAIL_USERNAME"		=>	"Your username is",
"EMAIL_PASSWORD"		=>	"Your new password is",
"EMAIL_LOGIN"				=>	"Login here",
"EMAIL_THANKYOU"		=>	"Thank you for using",
"NOTE_REGISTRATION"	=>	"Your registration information has been sent to",
"NOTE_REGERROR"			=>	"<b>Error:</b> There was a problem sending out the registration information via email. Please make note of the password below",
"NOTE_USERNAME"			=>	"Your username is",
"NOTE_PASSWORD"			=>	"and your password is",
"INSTALLATION"			=>	"インストール",
"LABEL_WEBSITE"			=>	"サイト名",//"Website Name",
"LABEL_BASEURL"			=>	"サイトURL",//"Website Base URL",
"LABEL_SUGGESTION"	=>	"Our suggestion is",
"LABEL_USERNAME"		=>	"ログイン名",//"Username",
"LABEL_EMAIL"				=>	"メールアドレス",//"Email Address",
"LABEL_INSTALL"			=>	"インストールを実行する",

/* 
 * For: pages.php
*/
"MENUITEM_SUBTITLE"	=>	"メニューアイテム",//"menu item",
"HOMEPAGE_SUBTITLE"	=>	"ホーム",//"homepage",
"PRIVATE_SUBTITLE"	=>	"プライベート",//"private",
"EDITPAGE_TITLE"		=>	"ページを編集",//"Edit Page",
"VIEWPAGE_TITLE"		=>	"ページを見る",//"View Page",
"DELETEPAGE_TITLE"	=>	"ページを削除",//"Delete Page",
"PAGE_MANAGEMENT"		=>	"ページ管理",//"Page Management",
"TOGGLE_STATUS"			=>	"ステータスを表示する",//"Toggle Status",
"TOTAL_PAGES"				=>	"ページ（全ページ数）",//"total pages",
"ALL_PAGES"					=>	"全ページ",//"All Pages",

/* 
 * For: edit.php
*/
"PAGE_NOTEXIST"			=>	"リクエストされたページは存在しません",//"The requested page does not exist",
"BTN_SAVEPAGE"			=>	"保存",//"Save Page",
"BTN_SAVEUPDATES"		=>	"更新",//"Save Updates",
"DEFAULT_TEMPLATE"	=>	"デフォルトテンプレート",//"Default Template",
"NONE"							=>	"None",//"None",
"PAGE"							=>	"ページ",//"Page",
"NEW_PAGE"					=>	"新しいページ",//"New Page",
"PAGE_EDIT_MODE"		=>	"",//"Page Editing Mode",
"CREATE_NEW_PAGE"		=>	"新規ページ作成",//"Create New Page",
"VIEW"							=>	"プレビュー",//"<em>V</em>iew", // 'v' is the accesskey identifier
"PAGE_OPTIONS"			=>	"オプション設定",//"Page <em>O</em>ptions", // 'o' is the accesskey identifier
"TOGGLE_EDITOR"			=>	"エディタ変更",//"To<em>g</em>gle Editor", // 'g' is the accesskey identifier
"SLUG_URL"					=>	"スラッグ(URLの一部になります)",
"TAG_KEYWORDS"			=>	"キーワード(タグ)",//"Tags &amp; Keywords",
"PARENT_PAGE"				=>	"親ページ",//"Parent Page",
"TEMPLATE"					=>	"テンプレート",//"Template",
"KEEP_PRIVATE"			=>	"非公開にしておく",//"Keep Private?",
"ADD_TO_MENU"				=>	"メニューに表示",//"Add to Menu",
"PRIORITY"					=>	"表示順",//"Priority",
"MENU_TEXT"					=>	"メニューの項目名",//"Menu Text",
"LABEL_PAGEBODY"		=>	"ページコンテンツ",//"Page Body",
"CANCEL"						=>	"キャンセル",//"Cancel",
"BACKUP_AVAILABLE"	=>	"利用可能なバックアップを表示",//"Backup Available",
"MAX_FILE_SIZE"			=>	"ファイルサイズ上限",//"Max file size",
"LAST_SAVED"				=>	"最終更新日",//"Last Saved",
"FILE_UPLOAD"				=>	"アップロード",//"File Upload",
"OR"								=>	"or",//"or",

/* 
 * For: upload.php
*/
"ERROR_UPLOAD"			=>	"ファイルのアップロードに問題がありました。",//"There was a problem with the file upload",
"FILE_SUCCESS_MSG"	=>	"Success! File location",
"FILE_MANAGEMENT"		=>	"ファイル管理",//"File Management",
"UPLOADED_FILES"		=>	"アップロードファイル",//"Uploaded Files",
"SHOW_ALL"					=>	"ALL",//"Show All",
"VIEW_FILE"					=>	"プレビュー",//"View File",
"DELETE_FILE"				=>	"削除",//"Delete File",
"TOTAL_FILES"				=>	"ファイル（全ファイル数）",//"total files",

/* 
 * For: logout.php
*/
"LOGGED_OUT"				=>	"ログアウト",//"Logged Out",
"MSG_LOGGEDOUT"			=>	"ログアウトしました。",//"You are now logged out.",
"MSG_PLEASE"				=>	"こまめにログアウトするようにしましょう",//"Please log back in if you need to re-access your account", 

/* 
 * For: index.php
*/
"LOGIN"							=>	"ログイン",//"Login",
"USERNAME"					=>	"ログイン名",//"Username",
"PASSWORD"					=>	"パスワード",//"Password",
"FORGOT_PWD"				=>	"パスワードをお忘れですか？",//"Forgot your password?",
"CONTROL_PANEL"			=>	"サイト管理画面",//"Control Panel",
"LOGIN_REQUIREMENT"	=>	"ログイン時の注意点",//"Login Requirements",
"WARN_JS_COOKIES"		=>	"お使いのブラウザでCookieとjavascriptを有効にしてください。",//"Cookies and javascript need to be enabled in your browser to work properly",
"WARN_IE6"					=>	"Internet Explorer 6では正常に動作しない場合があります。",//"Internet Explorer 6 may work, but it is not supported",

/* 
 * For: navigation.php
*/
"CURRENT_MENU" 			=> 	"現在のメニュー",//"Current Menu",
"NO_MENU_PAGES" 		=> 	"現在メニュー登録されているものはありません",//"There are no pages that are set to appear within the main menu",

/* 
 * For: theme-edit.php
*/
"TEMPLATE_FILE" 		=> 	"テンプレートファイル <b>%s</b> は正常に更新されました",//"Template file <b>%s</b> has successfully been updated!",
"THEME_MANAGEMENT" 	=> 	"テーマ管理",//"Theme Management",
"EDIT_THEME" 				=> 	"テーマの編集",//"Edit Theme",
"EDITING_FILE" 			=> 	"ファイル編集",//"Editing File",
"BTN_SAVECHANGES" 	=> 	"変更を保存",//"Save Changes",
"EDIT" 							=> 	"編集",//"Edit",

/* 
 * For: support.php
*/
"SETTINGS_UPDATED"	=> 	"あなたの設定を更新しました。",//"Your settings have been updated",
"UNDO" 							=> 	"元に戻す",//"Undo",
"SUPPORT" 					=> 	"サポート",//"Support",
"SETTINGS" 					=> 	"設定",//"Settings",
"ERROR" 						=> 	"エラー",//"Error",
"BTN_SAVESETTINGS" 	=> 	"設定を保存",//"Save Settings",
"EMAIL_ON_404" 			=> 	"Email administrator on 404 errors",//"Email administrator on 404 errors",
"VIEW_404" 					=> 	"404エラー",//"View 404 Errors",
"VIEW_FAILED_LOGIN"	=> 	"ログイン失敗",//"View Failed Login Attempts",
"VIEW_TICKETS" 			=> 	"あなたの投稿チケット",//"View Your Submitted Tickets",

/* 
 * For: log.php
*/
"MSG_HAS_BEEN_CLR" 	=> 	"クリアされている",//" has been cleared",
"LOGS" 							=> 	"ログ",//"Logs",
"VIEWING" 					=> 	"表示",//"Viewing",
"LOG_FILE" 					=> 	"ログファイル",//"Log File",
"CLEAR_ALL_DATA" 		=> 	"すべてのデータをクリアします",//"Clear all data from",
"CLEAR_THIS_LOG" 		=> 	"<em>C</em>lear This Log", // 'c' is the accesskey identifier
"LOG_FILE_ENTRY" 		=> 	"ログファイルのエントリ",//"LOG FILE ENTRY",
"THIS_COMPUTER"			=>	"このコンピュータ",//"This Computer",

/* 
 * For: backup-edit.php
*/
"BAK_MANAGEMENT"		=>	"バックアップ管理",//"Backup Management",
"ASK_CANCEL"				=>	"キャンセル",//"<em>C</em>ancel", // 'c' is the accesskey identifier
"ASK_RESTORE"				=>	"この内容に戻す",//"<em>R</em>estore", // 'r' is the accesskey identifier
"ASK_DELETE"				=>	"削除",//"<em>D</em>elete", // 'd' is the accesskey identifier
"BACKUP_OF"					=>	"バックアップ",//"Backup of",
"PAGE_TITLE"				=>	"ページタイトル",//"Page Title",
"YES"								=>	"Yes",//"Yes",
"NO"								=>	"No",//"No",
"DATE"							=>	"日付",//"Date",

/* 
 * For: components.php
*/
"COMPONENTS"				=>	"コンポーネント",//"Components",
"DELETE_COMPONENT"	=>	"コンポーネントの削除",//"Delete Component",
"EDIT"							=>	"編集",//"Edit",
"ADD_COMPONENT"			=>	"コンポーネントの追加",//"<em>A</em>dd Component", // 'a' is the accesskey identifier
"SAVE_COMPONENTS"		=>	"コンポーネントの保存",//"Save Components",

/* 
 * For: sitemap.php
*/
"SITEMAP_CREATED"		=>	"サイトマップを作成しました。また、４検索エンジンへのpingを正常に実行しました。",//"Sitemap Created! We also successfully pinged 4 search engines of the update",
"SITEMAP_ERRORPING"	=>	"サイトマップを作成しました。しかし、1つもしくは複数の検索エンジンへのpingを正常に実行できませんでした。",//"Sitemap Created, however there was an error pinging one or more of the search engines",
"SITEMAP_ERROR"			=>	"サイトマップを作成出来ませんでした",//"Your sitemap could not be generated",
"SITEMAP_WAIT"			=>	"<b>お待ちください:</b> サイトマップを作成しています",//"<b>Please Wait:</b> Creating website sitemap",

/* 
 * For: theme.php
*/
"THEME_CHANGED"			=>	"テーマを変更しました。",//"Your theme has been changed successfully",
"CHOOSE_THEME"			=>	"テーマの選択",//"Choose Your Theme",
"ACTIVATE_THEME"		=>	"テーマを変更する",//"Activate Theme",
"THEME_SCREENSHOT"	=>	"テーマのスクリーンショット",//"Theme Screenshot",
"THEME_PATH"				=>	"現在のテーマのパス",//"Current theme path",

/* 
 * For: resetpassword.php
*/
"RESET_PASSWORD"		=>	"パスワードをリセットする",//"Reset Password",
"YOUR_NEW"					=>	"あなたの新しい",//"Your new",
"PASSWORD_IS"				=>	"パスワード",//"password is",
"ATTEMPT"						=>	"試み",//"Attempt",
"MSG_PLEASE_EMAIL"	=>	"新しいパスワードを発行するには登録されているメールアドレスを入力して新規パスワード発行ボタンを押してください。",//"Please enter the email address registered on this system, and a new password will be sent to you",
"SEND_NEW_PWD"			=>	"新規パスワード発行",//"Send New Password",

/* 
 * For: settings.php
*/
"GENERAL_SETTINGS"	=>	"基本設定",//"General Settings",
"WEBSITE_SETTINGS"	=>	"サイト基本設定",//"Website Settings",
"LOCAL_TIMEZONE"		=>	"タイムゾーン",//"Local Timezone",
"LANGUAGE"					=>	"言語設定",//"Language",
"USE_FANCY_URLS"		=>	"<b>Fancy URLを使用する</b>  ※mod_rewriteを有効にする必要があります",//"<b>Use Fancy URLs</b> - Requires that your host has mod_rewrite enabled",
"ENABLE_HTML_ED"		=>	"WYSIWYGエディタを有効にする",//"<b>Enable the HTML editor</b>",
"USER_SETTINGS"			=>	"ユーザー設定",//"User Login Settings",
"WARN_EMAILINVALID"	=>	"警告: このメールアドレスは有効ではありません",//"WARNING: This email address does not look valid!",
"ONLY_NEW_PASSWORD"	=>	"パスワードを変更する場合のみ入力",//"Only provide a password below if you want to change your current one",
"NEW_PASSWORD"			=>	"新しいパスワード",//"New Password",
"CONFIRM_PASSWORD"	=>	"パスワードの確認入力",//"Confirm Password",
"PASSWORD_NO_MATCH"	=>	"パスワードが一致しません",//"Passwords do not match",

/* 
 * For: 404-mailer.php
*/
"404_ENCOUNTERED"		=>	"自動:404エラーが発生しました",//"Auto: 404 Error Encountered on",
"404_AUTO_MSG"			=>	"これはあなたのWebサイトからの自動メッセージです。",//"This is an automated message from your website",
"PAGE_CANNOT_FOUND"	=>	"『ページが見つかりません』というエラーが検出されました",//"A 'page not found' error was encountered on the",
"DOMAIN"						=>	"ドメイン",//"domain",
"DETAILS"						=>	"詳細",//"DETAILS",
"WHEN"							=>	"When",//"When",
"WHO"								=>	"Who",//"Who",
"FAILED_PAGE"				=>	"失敗したページ",//"Failed Page",
"REFERRER"					=>	"リファラー",//"Referrer",
"BROWSER"						=>	"ブラウザ",//"Browser",

/* 
 * For: health-check.php
*/
"WEB_HEALTH_CHECK"	=>	"Webサイトチェック",//"Website Health Check",
"VERSION"						=>	"バージョン",//"Version",
"UPG_NEEDED"				=>	"アップグレードするために必要",//"Upgrade needed to",
"CANNOT_CHECK"			=>	"使用中のバージョンをチェックすることができません",//"Unable to check. Your version is",
"LATEST_VERSION"		=>	"最新バージョン",//"Latest version installed",
"SERVER_SETUP"			=>	"サーバーのセットアップ",//"Server Setup",
"OR_GREATER_REQ"		=>	"以上であることが必要です",//"or greater is required",
"OK"								=>	"OK",//"OK",
"INSTALLED"					=>	"利用できます",//"Installed",
"NOT_INSTALLED"			=>	"利用できません",//"Not Installed",
"WARNING"						=>	"警告",//"Warning",
"DATA_FILE_CHECK"		=>	"データファイルの整合性チェック",//"Data File Integrity Check",
"DIR_PERMISSIONS"		=>	"ディレクトリのパーミッション",//"Directory Permissions",
"EXISTANCE"					=>	"%s Existance",//"%s Existance",
"MISSING_FILE"			=>	"ファイルが見つかりません",//"Missing file",
"BAD_FILE"					=>	"不良ファイル",//"Bad file",
"NO_FILE"						=>	"ファイルがありません",//"No file",
"GOOD_D_FILE"				=>	"ファイルを許可しない",//"Good 'Deny' file",
"GOOD_A_FILE"				=>	"ファイルを許可する",//"Good 'Allow' file",
"CANNOT_DEL_FILE"		=>	"ファイルを削除できません",//"Cannot Delete File",
"DOWNLOAD"					=>	"ダウンロード",//"Download",
"WRITABLE"					=>	"書き込み可能",//"Writable",
"NOT_WRITABLE"			=>	"書き込み可能でありません",//"Not Writable",

/* 
 * For: footer.php
*/
"POWERED_BY"				=>	"Powered by",
"PRODUCTION"				=>	"A %s Production",
"SUBMIT_TICKET"			=>	"Submit Ticket",

/* 
 * For: backups.php
*/
"PAGE_BACKUPS"			=>	"バックアップされたページ",//"Page Backups",
"ASK_DELETE_ALL"		=>	"全てのバックアップを削除",//"<em>D</em>elete All",
"DELETE_ALL_BAK"		=>	"全てのバックアップを削除しますか？",//"Delete all backups?",
"TOTAL_BACKUPS"			=>	"ページ(全バックアップページ数)",//"total backups",

/* 
 * For: archive.php
*/
"SUCC_WEB_ARCHIVE"	=>	"Webサイトのアーカイブを作成しました。このデータを用いてサイトを復元できます。",//"Successful website archive!",
"SUCC_WEB_ARC_DEL"	=>	"Webサイトのアーカイブ削除に成功しました。",//"Website archive successfully deleted",
"WEBSITE_ARCHIVES"	=>	"Webサイトをアーカイブ(サイト復元に必要なデータ全て)",//"Website Archives",
"ARCHIVE_DELETED"		=>	"アーカイブの削除に成功しました。",//"Archive deleted successfully",
"CREATE_NEW_ARC"		=>	"アーカイブを新規作成",//"Create a New Archive",
"ASK_CREATE_ARC"		=>	"新たにアーカイブを作成する",//"<em>C</em>reate New Archive Now",
"CREATE_ARC_WAIT"		=>	"<b>Please Wait:</b> Webサイトのアーカイブを作成しています...",//"<b>Please Wait:</b> Creating website archive...",
"DOWNLOAD_ARCHIVES"	=>	"アーカイブのダウンロード",//"Download Archive",
"DELETE_ARCHIVE"		=>	"アーカイブの削除",//"Delete Archive",
"TOTAL_ARCHIVES"		=>	"（アーカイブ数）",//"total archives",

/* 
 * For: include-nav.php
*/
"WELCOME"						=>	"ようこそ",//"Welcome", // used as 'Welcome USERNAME!'
"TAB_PAGES"					=>	"ページ",//"<em>P</em>ages",
"TAB_FILES"					=>	"ファイル",//"<em>F</em>iles",
"TAB_THEME"					=>	"テーマ",//"<em>T</em>heme",
"TAB_BACKUPS"				=>	"バックアップ",//"<em>B</em>ackups",
"TAB_SETTINGS"			=>	"設定",//"<em>S</em>ettings",
"TAB_SUPPORT"				=>	"サポート",//"Supp<em>o</em>rt",
"TAB_LOGOUT"				=>	"ログアウト",//"<em>L</em>ogout",

/* 
 * For: sidebar-files.php
*/
"BROWSE_COMPUTER"		=>	"アップロードするファイルを選択", //"Browse Your Computer",
"UPLOAD"						=>	"アップロード", //"Upload",

/* 
 * For: sidebar-support.php
*/
"SIDE_SUPPORT_LOG"	=>	"システムログ",//"Supp<em>o</em>rt Settings &amp; Logs",
"SIDE_VIEW_LOG"			=>	"ログ一覧",//"View Log",
"SIDE_HEALTH_CHK"		=>	"サーバの状態",//"Website <em>H</em>ealth Check",
"SIDE_SUBMIT_TICKET"=>	"Submit Tic<em>k</em>et",//"Submit Tic<em>k</em>et",
"SIDE_DOCUMENTATION"=>	"ドキュメント",//"<em>D</em>ocumentation",

/* 
 * For: sidebar-theme.php
*/
"SIDE_VIEW_SITEMAP"	=>	"サイトマップを表示",//"<em>V</em>iew Sitemap",
"SIDE_GEN_SITEMAP"	=>	"サイトマップ生成",//"<em>G</em>enerate Sitemap",
"SIDE_COMPONENTS"		=>	"コンポーネントを編集する",//"<em>E</em>dit Components",
"SIDE_EDIT_THEME"		=>	"テーマを編集する",//"Edit <em>T</em>heme",
"SIDE_CHOOSE_THEME"	=>	"テーマを選択する",//"Choose <em>T</em>heme",

/* 
 * For: sidebar-pages.php
*/
"SIDE_CREATE_NEW"		=>	"ページを新規作成",//"<em>C</em>reate New Page",
"SIDE_VIEW_PAGES"		=>	"ページの一覧を表示",//"View All <em>P</em>ages",

/* 
 * For: sidebar-pages.php
*/
"SIDE_GEN_SETTINGS"	=>	"サイト基本設定",//"General <em>S</em>ettings",
"SIDE_USER_PROFILE"	=>	"ユーザー設定",//"<em>U</em>ser Profile",

/* 
 * For: sidebar-pages.php
*/
"SIDE_VIEW_BAK"			=>	"ページのバックアップを表示",//"View Page Backup",
"SIDE_WEB_ARCHIVES"	=>	"Webサイトをアーカイブ",//"<em>W</em>ebsite Archives",
"SIDE_PAGE_BAK"			=>	"バックアップされたページ",//"Page <em>B</em>ackups",

/* 
 * For: error_checking.php
*/
"ER_PWD_CHANGE"			=>	"",//"Don't forget to <a href=\"settings.php#profile\">change your password</a> from that random generated one you have now...",
"ER_BAKUP_DELETED"	=>	"%s のためにバックアップは削除されました。",//"The backup has been deleted for %s",
"ER_REQ_PROC_FAIL"	=>	"要求されたプロセスが失敗しました",//"The requested process failed",
"ER_YOUR_CHANGES"		=>	"%s に保存されている内容を変更",//"Your changes to %s have been saved",
"ER_HASBEEN_REST"		=>	"%s が復元されました",//"%s has been restored",
"ER_HASBEEN_DEL"		=>	"%s が削除されました",//"%s has been deleted",
"ER_CANNOT_INDEX"		=>	"インデックスページのURLを変更することはできません",//"You cannot change the URL of the index page",
"ER_SETTINGS_UPD"		=>	"設定が更新されました",//"Your settings have been updated",
"ER_OLD_RESTORED"		=>	"旧設定が復元されました",//"Your old settings have been restored",
"ER_NEW_PWD_SENT"		=>	"新しいパスワードが指定のメールアドレスに送信されました",//"A new password has been sent to the email address provided",
"ER_SENDMAIL_ERR"		=>	"メールの送信に問題が発生しました。もう一度やり直して下さい",//"There was a problem sending the email. Please try again",
"ER_FILE_DEL_SUC"		=>	"ファイルが削除されました",//"File deleted successfully",
"ER_PROBLEM_DEL"		=>	"問題があるファイルを削除しました",//"There was a problem deleting the file",
"ER_COMPONENT_SAVE"	=>	"コンポーネントが保存されました",//"Your components have been saved",
"ER_COMPONENT_REST"	=>	"コンポーネントが復元されました",//"Your components have been restored",
"ER_CANCELLED_FAIL"	=>	"このファイルへの更新はキャンセルされました",//"<b>Cancelled:</b> The update to this file has been cancelled",

/* 
 * For: changedata.php
*/
"CANNOT_SAVE_EMPTY"	=>	"空のページは保存できません",//"You cannot save an empty page",
"META_DESC" 				=> "Description属性(metaタグ)",

/* 
 * For: template_functions.php
*/
"FTYPE_COMPRESSED"	=>	"Compressed", //a file-type
"FTYPE_VECTOR"			=>	"Vector", //a file-type
"FTYPE_FLASH"				=>	"Flash", //a file-type
"FTYPE_VIDEO"				=>	"Video", //a file-type
"FTYPE_AUDIO"				=>	"Audio", //a file-type
"FTYPE_WEB"					=>	"Web", //a file-type
"FTYPE_DOCUMENTS"		=>	"Documents", //a file-type
"FTYPE_SYSTEM"			=>	"System", //a file-type
"FTYPE_MISC"				=>	"Misc", //a file-type
"IMAGES"						=>	"Images",

/* 
 * For: login_functions.php
*/
"FILL_IN_REQ_FIELD"	=>	"すべての必須項目に入力",//"Please fill in all the required fields",
"LOGIN_FAILED"			=>	"ログインに失敗しました。ログイン名とパスワードを確認してください。",//"Login failed. Please double check your Username and Password",

/* 
 * For: Date Format
*/
"DATE_FORMAT"									=>	"Y-m-d", //please keep short
"DATE_AND_TIME_FORMAT"				=>	"Y-m-d H:i:s", //date and time


/***********************************************************************************
 * SINCE Version 2.0
***********************************************************************************/


/* 
 * For: welcome.php
*/
"WELCOME_MSG"				=>	"GetSimpleをインストールしました。",
"WELCOME_P"					=>	"GetSimpleは、使いやすい管理画面とシンプルなテンプレートシステムが特長。手頃なサイズのサイトを管理するのに適しており、説明書がなくても今日から使いこなせます。",
"GETTING_STARTED"		=>	"まずは下記をチェックしましょう。",

/* 
 * For: install.php
*/

"SELECT_LANGUAGE"		=> "言語を選んでください。",
"CONTINUE_SETUP" 		=> "次に進む",
"DOWNLOAD_LANG" 		=> "他の言語ファイルが必要な場合は",

/* 
 * For: image.php
*/

"CURRENT_THUMBNAIL" => "Current Thumbnail",
"RECREATE" 					=> "recreate",
"CREATE_ONE" 				=> "create one",
"IMG_CONTROl_PANEL" => "Image Control Panel",
"ORIGINAL_IMG" 			=> "Original Image",
"CLIPBOARD_COPY" 		=> "Copy to clipboard",
"CLIPBOARD_INSTR" 	=> "Select All then <em>ctrl-c</em> or <em>command-c</em>",
"CREATE_THUMBNAIL" 	=> "Create Thumbnail",
"CROP_INSTR" 				=> "<em>ctrl-Q</em> or <em>command-Q</em> for square",
"SELECT_DIMENTIONS" => "Selection Dimentions",
"HTML_ORIG_IMG" 		=> "Original Image HTML",
"LINK_ORIG_IMG" 		=> "Original Image Link",
"HTML_THUMBNAIL" 		=> "Thumbnail HTML",
"LINK_THUMBNAIL" 		=> "Thumbnail Link",
"HTML_THUMB_ORIG" 	=> "Thumbnail-to-Image HTML",

/* 
 * For: plugins.php
*/

"PLUGINS_MANAGEMENT"=> "プラグイン管理",
"PLUGINS_INSTALLED" => "個のプラグインがインストール済みです。",
"SHOW_PLUGINS"			=> "プラグイン一覧",
"PLUGINS_NAV" 			=> "プラグイン",
"PLUGIN_NAME" 			=> "Name",
"PLUGIN_DESC" 			=> "Description",
"PLUGIN_VER" 				=> "Version",


/***********************************************************************************
 * SINCE Version 2.02
***********************************************************************************/


"PERMALINK" => "Custom Permalink Structure",
"MORE" => "more",
"HELP" => "help",


"" => "not translated"



);

?>