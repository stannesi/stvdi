<?php

	/**
	*
	* This is the configuration file.
	*
	* @version       1.0
  * @package       Stvdi
	* @author        Jencube Team
	* @license       http://opensource.org/licenses/gpl-license.php
	*                GNU General Public License (GPL)
	* @copyright     Copyright (c) 2015 Jencube
	* @twitter       @deusex0 & @One_Oracle
  * @filesource    includes/config/inc.config.php
	*
	**/

  $config = array(

    /*
    *
    * Database information
    *
    */

    // Database type
    'db_type' => 'mysqli',

    // Database name
    'db_name' => 'stvdi_db',

    // Database username
    'db_user' => 'root',

    // Database password
    'db_pass' => '',

    // Database hostname
    'db_host' => 'localhost',

    // Database charset
    'db_charset' => 'utf8',

    // Database collate type
    'db_collate' => 'utf8_general_ci',

    // Database table prefix
    'db_prefix' => 'sv_',

    /*
    *
    * Cache information
    *
    */

    // Set cache (TRUE/FALSE)
    'cache' => FALSE,

    // Set cache age, how long cache would last @default: 5mins
    'cache_age' => 300,

    // Cache folder
    'cache_path' => '/cache',

    /*
    *
    * Language information
    *
    */

    // Default language
    'default_lang' => 'en-us',

    // Language folder
    'lang_dir' => '/includes/languages',

    /*
    *
    * Log information
    *
    */

    // Log folder
    'log_path' => '/logs',

    /*
    *
    * System Backup
    *
    */

    // backup folder
    'log_path' => '/backups',

    /*
    *
    * Error handling information
    *
    */

    // Error Handling
    'error_reporting' => TRUE,

    // Error handling type
    'error_type' => 4,

    /*
    *
    * Cookie information
    *
    */

    // Cookie name
    'cookie_name' => 'svcookies',

    // Cookie time @default: 1 month
    'cookie_time' => 2592000,

    // Cookie path
    'cookie_path' => '/',

    /*
    *
    * Session information
    *
    */

    // Session name
    'session_name' => 'svsessions',

    // Session character length
    'session_char_length' => 60,

    /*
    *
    * Login information
    *
    */

    // Login data length
    'login_data_length' => 8,

    /*
    *
    * Date and time information
    *
    */

    // Short date format
    'short_date' => 'Y-m-d',

    // Long date format
    'long_date' => 'F j, Y',

    // Time format
    'time' => 'H:i:s',

    // Date and time format
    'date_time' => 'Y-m-d H:i:s',

    /*
    *
    * Application information
    *
    */

    // Application name
    'app_name' => 'Stvdi',

    // Display list information
    'list_limit' => 10,

    // Include folder
    'include' => '/includes',

    // Config folder
    'config' => '/includes/config',

    // functions folder
    'function' => '/includes/functions',

    // Classes folder
    'class' => '/includes/libraries',

    // Classes folder
    'template' => '/template',

    // Images folder
    'images' => '/images',

    // Images folder
    'ico' => '/images/icons',

    // Javascript folder
    'javascript' => '/javascripts',

    // Stylesheet folder
    'stylesheet' => '/stylesheets',

    // Theme folder
    'theme' => '/contents/themes',

    // Plugins folder
    'plugins' => '/contents/plugins',

    // Uploads folder
    'uploads' => '/contents/uploads',

  );

?>