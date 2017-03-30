<?php
namespace App\Util;
use App\Config;

/**
 * Created by PhpStorm.
 * User: SLiM
 * Date: 22.01.2017
 * Time: 11:51
 */



class Format {
    private $config;

    public function __construct() {
        //TODO удалить
        $this->config = new Config();
    }

    public function ts() {
        return time();
    }

    public function xss($data) {
        if (is_array($data)) {
            $escaped = array();
            foreach ($data as $key=>$value) {
                $escaped[$key] = $this->xss($value);
            }
            return $escaped;
        }
        return htmlspecialchars($data);
    }

}