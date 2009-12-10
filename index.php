<?php

// Includes
require 'Libs/Smarty/Smarty.class.php';
require 'Libs/markdown.php';

/*
 * Basic idea:
 *  - Posts are plain text in /p/
 *  - Meta about posts are in yaml files in /m/
 *    - Date posted in unix time
 *    - Title
 *    - Author
 * - Objects deal with caching between a sqlite file and actual on disk files.
 */

class Config {
   public $title = "Nat's Blog";
   public $timezone = "America/Los_Angeles";
}

$config = new Config();
date_default_timezone_set($config->timezone);

$smarty = new Smarty;
$smarty->assign('foo','bar');
$smarty->assign('title', $config->title);
$smarty->display('Templates/index.tpl');

?>

