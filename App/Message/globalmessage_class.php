<?php
namespace App\Message;
use App\Config;


/**
 * Created by PhpStorm.
 * User: SLiM
 * Date: 22.01.2017
 * Time: 13:51
 */
abstract class GlobalMessage {
    private $data;

    public function __construct($file) {
        $config=new Config();
        $this->data = parse_ini_file($config->dir_text.$file.".ini");
    }

    public function get($name) {
        return $this->data[$name];
    }

}