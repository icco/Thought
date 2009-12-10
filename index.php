<?php



// Includes
require 'Libs/Smarty/Smarty.class.php';
require 'Libs/markdown.php';

function my_autoload($class) {
   $path = "Objects/{$class}.php";
   if (file_exists($path))
      @require $path;
}

spl_autoload_register('my_autoload');

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

// Build Page
$smarty = new Smarty;
$smarty->assign('title', $config->title);
$smarty->assign('posts', Post::getPosts(5));
$smarty->display('templates/index.tpl');

?>

