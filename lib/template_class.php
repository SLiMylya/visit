<?php

/**
 * Created by PhpStorm.
 * User: SLiM
 * Date: 22.01.2017
 * Time: 16:55
 */
class Template {

    private $dir_tmpl;
    private $data = array();

    /**
     * Template constructor.
     * @param $dir_tmpl
     */
    public function __construct($dir_tmpl) {
        $this->dir_tmpl = $dir_tmpl;
    }

    public function set($name, $value) {
        $this->data[$name] = $value;
    }

    public function delete($name) {
        unset($this->data[$name]);
    }

    public function __get($name) {
        if(isset($this->data[$name])) return $this->data[$name];
        return "";
    }

    public function display($template) {
        $template = $this->dir_tmpl . $template . ".tpl";
        ob_start();
        include($template);
        echo ob_get_clean();
    }
}