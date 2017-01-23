<?php
/**
 * Created by PhpStorm.
 * User: SLiM
 * Date: 22.01.2017
 * Time: 17:06
 */
require_once "start.php";

require_once $dir_lib . "url_class.php";

$url = new Url();
$view = $url->getView();

$class = $view . "Content";

if (file_exists($dir_lib . $class . "_class.php")) {
    require_once $dir_lib . $class . "_class.php";
    new $class();
} else {
    echo "мы тут";
}