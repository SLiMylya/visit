<?php

/**
 * Created by PhpStorm.
 * User: SLiM
 * Date: 22.01.2017
 * Time: 12:34
 */
require_once "config_config.php";

class Check {

    private $config;

    public function __construct($amp = true) {
        $this->config = new Config();
    }

    public function id($id, $zero=false) {
        if(!$this->intNumber($id)) return false;
        if ((!$zero)&&($id === 0)) return false;
        return $id >= 0;
    }

    public function oneOrZero($number) {
        if ($this->intNumber($number)) return false;
        return (($number == 0) || ($number == 1));
    }

    public function count($count){
        return $this->noNegativeInteger($count);
    }

    public function offset($offset){
        return $this->intNumber($offset);
    }

    private function intNumber($number) {
        if(!is_int($number)&&(!is_string($number))) return false;
        return preg_match("/^-?(([1-9][0-9]*)|(0))$/", $number);
    }

    private function noNegativeInteger($number) {
        if (!$this->intNumber($number)) return false;
        return ($number >= 0);
    }
}



