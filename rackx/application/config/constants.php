<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
define('FILE_READ_MODE', 0644);
define('FILE_WRITE_MODE', 0666);
define('DIR_READ_MODE', 0755);
define('DIR_WRITE_MODE', 0777);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/

define('FOPEN_READ',							'rb');
define('FOPEN_READ_WRITE',						'r+b');
define('FOPEN_WRITE_CREATE_DESTRUCTIVE',		'wb'); // truncates existing file data, use with care
define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE',	'w+b'); // truncates existing file data, use with care
define('FOPEN_WRITE_CREATE',					'ab');
define('FOPEN_READ_WRITE_CREATE',				'a+b');
define('FOPEN_WRITE_CREATE_STRICT',				'xb');
define('FOPEN_READ_WRITE_CREATE_STRICT',		'x+b');


/* End of file constants.php */
/* Location: ./application/config/constants.php */

/* 開發環境專用  */
define('IS_DEVELOPED', ($_SERVER['HTTP_HOST']=='localhost')?true:false);

define('DB_HOST', 'rackx.shangc.info');
define('DB_USER', 'root');
define('DB_PASS', 'xxxxx');
define('DB_NAME', 'rackx');

define('ROWS_PER_PAGE', 10);

// PATH
define('IMAGE_PATH', 'images/');

// 讀取view下面的檔案
define('DIR_EMAIL_TEMPLATE', 'emailTemplate/');

/* System Parameters */
// FCPATH : 專案的根目錄
define('SPLASH', (strtoupper(substr(PHP_OS,0,3)=='WIN')) ? '\\' : '/');

define('ERR_MSG_PREFIX', '<span class="error_message">');
define('ERR_MSG_SUFFIX', '</span>');