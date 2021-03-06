<?php
xoops_loadLanguage('modinfo_common', 'tadtools');
require_once __DIR__ . '/county.php';

define('_MI_TADLOGIN_NAME', '快速登入');
define('_MI_TADLOGIN_AUTHOR', '快速登入');
define('_MI_TADLOGIN_CREDITS', '王嘉田主任(adm@mail.cyc.edu.tw)');
define('_MI_TADLOGIN_ADMENU1', 'FaceBook認證設定說明');
define('_MI_TADLOGIN_ADMENU2', '自動群組設定');
define('_MI_TADLOGIN_ADMENU3', 'Google認證設定說明');
define('_MI_TADLOGIN_ADMENU4', '教育雲認證設定');

define('_MI_TADLOGIN_DESC', '加入FB等快速登入的機制');
define('_MI_TADLOGIN_BNAME1', '快速登入');
define('_MI_TADLOGIN_BDESC1', '快速登入(tad_login)');
define('_MI_TADLOGIN_APPID', 'FaceBook 的「應用程式 ID」');
define('_MI_TADLOGIN_APPID_DESC', '請至 https://developers.facebook.com/apps 建立一個應用程式，並取得其「應用程式 ID」，預設值對您的網站來說是無效的（僅供參考而已）。');
define('_MI_TADLOGIN_SECRET', 'FaceBook 的「應用程式密鑰」');
define('_MI_TADLOGIN_SECRET_DESC', '請至 https://developers.facebook.com/apps 建立一個應用程式，並取得其「應用程式密鑰」，預設值對您的網站來說是無效的（僅供參考而已）。');
define('_MI_TADLOGIN_AUTH_METHOD', '欲使用的認證方式');
define('_MI_TADLOGIN_AUTH_METHOD_DESC', '請選可要開放給使用者用的認證方式');
define('_MI_TADLOGIN_REAL_JOBNAME', '套用OpenID職稱');
define('_MI_TADLOGIN_REAL_JOBNAME_DESC', '選「是」會嘗試抓取OpenID傳回的職稱（如果有的話），選「否」僅會判斷是否為學生或老師。');

define('_MI_TADLOGIN_GOOGLE_APPID', 'Google 的「Client ID」');
define('_MI_TADLOGIN_GOOGLE_APPID_DESC', '請至 https://console.developers.google.com 建立一個 Project，並取得其「Client ID」。');
define('_MI_TADLOGIN_GOOGLE_SECRET', 'Google 的「Client secret」');
define('_MI_TADLOGIN_GOOGLE_SECRET_DESC', '請至 https://console.developers.google.com 建立一個 Project，並取得其「Client secret」。');

define('_MI_TADLOGIN_GOOGLE_REDIRECT_URL', 'Google 的「Redirect URIs」');
define('_MI_TADLOGIN_GOOGLE_REDIRECT_URL_DESC', '請至 https://console.developers.google.com 建立一個 Project，並取得其「Redirect URIs」。');
define('_MI_TADLOGIN_GOOGLE_API_KEY', 'Google 的「API key」');
define('_MI_TADLOGIN_GOOGLE_API_KEY_DESC', '請至 https://console.developers.google.com 建立一個 Project，並取得其「API key」。');

define('_MI_TADLOGIN_REDIRECT_URL', '登入後轉向設定');
define('_MI_TADLOGIN_REDIRECT_URL_DESC', '可設定登入後要導向到哪個位址，一般無須設定。');

define('_TADLOGIN_OIDC_SETUP', 'OIDC 教育雲帳號設定');
define('_TADLOGIN_OIDC_SETUP_DESC', '勿動，請從<a href="' . XOOPS_URL . '/modules/tad_login/admin/oidc.php">' . XOOPS_URL . '/modules/tad_login/admin/oidc.php</a> 設定之');
