<?php


/**
 * Created by PhpStorm.
 * User: SLiM
 * Date: 22.01.2017
 * Time: 17:06
 */


use App\Util\Url;

require_once "start.php";
require_once "App/Util/url_class.php";

$url = new Url();
$view = $url->getView();
if ($view == "index.php") {
    $view = "";
}
$class = $view . "Content";



if (file_exists($dir_lib . $class . "_class.php")) {
    require_once $dir_lib . $class . "_class.php";
    new $class();
} else {
	echo $dir_lib . $class . "_class.php";
    echo "мы тут";
}