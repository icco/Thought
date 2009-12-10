<?php

// Includes
require 'libs/Smarty/Smarty.class.php';
require 'libs/markdown.php';

/*
 * Basic idea:
 *  - Posts are plain text in /p/
 *  - Meta about posts are in yaml files in /m/
 *    - Date posted in unix time
 *    - Title
 *    - Author
 * - Objects deal with caching between a sqlite file and actual on disk files.
 */

date_default_timezone_set("America/Los_Angeles");

$smarty = new Smarty;
$smarty->assign('foo','bar');
$smarty->display('templates/index.tpl');

?>

