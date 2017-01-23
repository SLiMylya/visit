<?php

/**
 * Created by PhpStorm.
 * User: SLiM
 * Date: 22.01.2017
 * Time: 13:51
 */
require_once "config_config.php";

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